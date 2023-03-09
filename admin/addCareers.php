<?php 
  require_once './init.php';
  require_once './functions.php';

  if (isset($_POST['txt_judul'])) {
    $judul = isset($_POST['txt_judul']) ? mysqli_real_escape_string($conn, $_POST['txt_judul']) : '';
    $keterangan = isset($_POST['txt_keterangan']) ? mysqli_real_escape_string($conn, $_POST['txt_keterangan']) : '';
    $created_on = date('Y-m-d H:i:s');
    $user = $_SESSION['username'];
    $block = 0;
    $file = $_FILES['image_data'];

    if ($judul == '') {
      $block = 1;
      $data['result'] = 0;
      $data['message'] = 'Harap mengisi judul!';
    }

    if ($block == 0) {
      $new_filename = "CAREERS_".rand(1,1000)."_".time().".jpg";
      $upload = move_uploaded_file($file['tmp_name'], "img/careers/".$new_filename);
      $insert_sql = "INSERT INTO tb_career (created_on, created_by, judul, keterangan, path) VALUES ('$created_on', '$user', '$judul', '$keterangan', '$new_filename')";
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
    $data['message'] = 'Harap mengisi judul!';
  }

  echo json_encode($data);
?>