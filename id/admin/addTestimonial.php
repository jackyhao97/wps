<?php 
  require_once './init.php';
  require_once './functions.php';

  if (isset($_POST['txt_nama'])) {
    $nama = isset($_POST['txt_nama']) ? mysqli_real_escape_string($conn, $_POST['txt_nama']) : '';
    $testimoni = isset($_POST['txt_testimoni']) ? mysqli_real_escape_string($conn, $_POST['txt_testimoni']) : '';
    $urutan = isset($_POST['txt_urutan']) ? mysqli_real_escape_string($conn, $_POST['txt_urutan']) : '';
    $created_on = date('Y-m-d H:i:s');
    $user = $_SESSION['username'];
    $block = 0;
    $file = $_FILES['image_data'];

    if ($nama == '') {
      $block = 1;
      $data['result'] = 0;
      $data['message'] = 'Harap mengisi nama!';
    }

    if ($block == 0) {
      $new_filename = "TESTIMONIAL_".rand(1,1000)."_".time().".jpg";
      $upload = move_uploaded_file($file['tmp_name'], "img/testimonial/".$new_filename);
      $insert_sql = "INSERT INTO tb_testimonial (created_on, created_by, nama, testimoni, path, urutan) VALUES ('$created_on', '$user', '$nama', '$testimoni', '$new_filename', '$urutan')";
      $exec_sql = $conn->query($insert_sql);
      if ($exec_sql && $upload) {
        $data['result'] = 1;
        $data['message'] = "Data berhasil disimpan.";
      }
      else if (!$exec_sql && $upload) {
        $data['result'] = 0;
        $data['message'] = "Gambar berhasil diupload namun gagal disimpan ke database.";
      }
      else {
        $data['result'] = 0;
        $data['message'] = "Data gagal disimpan.";
      }
    }
  }
  else {
    $data['result'] = 0;
    $data['message'] = 'Harap mengisi nama!';
  }

  echo json_encode($data);
?>