<?php 
  require_once './init.php';
  require_once './functions.php';

  if (isset($_POST['txt_judul'])) {
    $judul = isset($_POST['txt_judul']) ? mysqli_real_escape_string($conn, $_POST['txt_judul']) : '';
    $keterangan = isset($_POST['keterangan']) ? mysqli_real_escape_string($conn, $_POST['keterangan']) : '';
    $created_on = date('Y-m-d H:i:s');
    $user = $_SESSION['username'];
    $block = 0;
    $file = $_FILES['image_data'];
    $urutan = isset($_POST['txt_urutan']) ? $_POST['txt_urutan'] : '';

    if ($judul == '') {
      $block = 1;
      $data['result'] = 0;
      $data['message'] = 'Harap mengisi judul!';
    }

    if ($block == 0) {
      $new_filename = "SERVICES_".rand(1,1000)."_".time().".jpg";
      $upload = move_uploaded_file($file['tmp_name'], "img/services/".$new_filename);
      $insert_sql = "INSERT INTO tb_services (created_on, created_by, judul, keterangan, path, urutan) VALUES ('$created_on', '$user', '$judul', '$keterangan', '$new_filename', '$urutan')";
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