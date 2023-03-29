<?php 
  require_once './init.php';
  require_once './functions.php';

  if (isset($_FILES['image_data'])) {
    $url = isset($_POST['txt_url']) ? mysqli_real_escape_string($conn, $_POST['txt_url']) : '';
    $deskripsi = isset($_POST['txt_deskripsi']) ? mysqli_real_escape_string($conn, $_POST['txt_deskripsi']) : '';
    $urutan = isset($_POST['txt_urutan']) ? $_POST['txt_urutan'] : '';
    $created_on = date('Y-m-d H:i:s');
    $user = $_SESSION['username'];
    $block = 0;
    $file = $_FILES['image_data'];

    $new_filename = "PARTNER_".rand(1,1000)."_".time().".jpg";
    $upload = move_uploaded_file($file['tmp_name'], "img/partners/".$new_filename);
    $insert_sql = "INSERT INTO tb_partners (created_on, created_by, path, url, deskripsi, urutan) VALUES ('$created_on', '$user', '$new_filename', '$url', '$deskripsi', '$urutan')";
    $exec_sql = $conn->query($insert_sql);
    if ($exec_sql) {
      $data['result'] = 1;
      $data['message'] = "Data berhasil disimpan.";
    }
    else {
      $data['result'] = 0;
      $data['message'] = "Data gagal disimpan.";
    }
  }
  else {
    $data['result'] = 0;
    $data['message'] = 'Harap memilih gambar!';
  }

  echo json_encode($data);
?>