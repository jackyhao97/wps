<?php 
  require_once './init.php';
  require_once './functions.php';

  if (isset($_POST['hid_id'])) {
    $id = $_POST['hid_id'];
    $email = isset($_POST['txt_email_edit']) ? $_POST['txt_email_edit'] : '';
    // $modified_on = date('Y-m-d H:i:s');
    // $user = $_SESSION['username'];

    $update_sql = "UPDATE tb_email_contact SET email = '$email' WHERE id='$id'";

    $exec_sql = $conn->query($update_sql);
    if ($exec_sql) {
      $data['result'] = 1;
      $data['message'] = "Email berhasil diubah.";
    }
    else {
      $data['result'] = 0;
      $data['message'] = "Email gagal disimpan.";
    }
  }
  else {
    $data['result'] = 0;
    $data['message'] = 'Harap mengisi Email!';
  }

  echo json_encode($data);
?>