<?php 
  require_once './init.php';
  require_once './functions.php';

  if (isset($_POST['hid_id'])) {
    $url = isset($_POST['txt_url_edit']) ? mysqli_real_escape_string($conn, $_POST['txt_url_edit']) : '';
    $id = $_POST['hid_id'];
    $modified_on = date('Y-m-d H:i:s');
    $user = $_SESSION['username'];
    $file = isset($_FILES['image_data_edit']) ? $_FILES['image_data_edit'] : '';

    if ($file != '') {
      $new_filename = "CLIENT_".rand(1,1000)."_".time().".jpg";
      $upload = move_uploaded_file($file['tmp_name'], "img/clients/".$new_filename);
      $update_sql = "UPDATE tb_clients SET modified_on = '$modified_on', modified_by='$user', path='$new_filename', url='$url' WHERE id='$id'";
    }
    else {
      $update_sql = "UPDATE tb_clients SET modified_on = '$modified_on', modified_by='$user', url='$url' WHERE id='$id'";
    }

    $exec_sql = $conn->query($update_sql);
    if ($exec_sql) {
      $data['result'] = 1;
      $data['message'] = "Data berhasil diubah.";
    }
    else {
      $data['result'] = 0;
      $data['message'] = "Data gagal disimpan.";
    }
  }
  else {
    $data['result'] = 0;
    $data['message'] = 'Harap memilih gambar yang diupload!';
  }

  echo json_encode($data);
?>