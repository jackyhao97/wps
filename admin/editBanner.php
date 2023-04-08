<?php 
  require_once './init.php';
  require_once './functions.php';

  if (isset($_POST['hid_id'])) {
    $id = $_POST['hid_id'];
    $modified_on = date('Y-m-d H:i:s');
    $user = $_SESSION['username'];
    $block = 0;
    $file = isset($_FILES['image_data_edit']) ? $_FILES['image_data_edit'] : '';

    if ($block == 0) {
      if ($file != '') {
        $new_filename = "BANNER_".rand(1,1000)."_".time().".jpg";
        $upload = move_uploaded_file($file['tmp_name'], "img/banner/".$new_filename);
        $update_sql = "UPDATE tb_banner SET modified_on = '$modified_on', modified_by='$user', path='$new_filename' WHERE id='$id'";
      }
      else {
        $update_sql = "UPDATE tb_banner SET modified_on = '$modified_on', modified_by='$user' WHERE id='$id'";
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
  }
  else {
    $data['result'] = 0;
    $data['message'] = 'Harap upload gambar!';
  }

  echo json_encode($data);
?>