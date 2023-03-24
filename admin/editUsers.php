<?php 
  require_once './init.php';
  require_once './functions.php';

  if (isset($_POST['hid_id'])) {
    $id = $_POST['hid_id'];
    $username = isset($_POST['txt_username_edit']) ? mysqli_real_escape_string($conn, $_POST['txt_username_edit']) : '';
    $password = isset($_POST['txt_password_edit']) ? md5($_POST['txt_password_edit']) : 0;
    $modified_on = date('Y-m-d H:i:s');
    $user = $_SESSION['username'];
    $block = 0;

    if ($username == '') {
      $block = 1;
      $data['result'] = 0;
      $data['message'] = 'Harap mengisi username!';
    }

    if ($block == 0) {
      $update_sql = "UPDATE tb_user SET username = '$username', password='$password' WHERE id='$id'";

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
    $data['message'] = 'Harap mengisi username dan password!';
  }

  echo json_encode($data);
?>