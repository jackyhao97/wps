<?php 
  require_once './init.php';
  require_once './functions.php';

  $created_on = date('Y-m-d H:i:s');
  $user = $_SESSION['username'];
  $block = 0;
  $file = $_FILES['image_data'];

  if ($block == 0) {
    $new_filename = "BANNER_".rand(1,1000)."_".time().".jpg";
    $upload = move_uploaded_file($file['tmp_name'], "img/banner/".$new_filename);
    $insert_sql = "INSERT INTO tb_banner (created_on, created_by, path) VALUES ('$created_on', '$user', '$new_filename')";
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
  echo json_encode($data);
?>