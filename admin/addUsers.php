<?php 
  require_once './init.php';
  require_once './functions.php';

  if (isset($_POST['txt_username'])) {
    $username = isset($_POST['txt_username']) ? mysqli_real_escape_string($conn, $_POST['txt_username']) : '';
    $password = isset($_POST['txt_password']) ? md5($_POST['txt_password']) : '';
    $created_on = date('Y-m-d H:i:s');
    $user = $_SESSION['username'];
    $block = 0;
    $sql_name = $conn->query("SELECT username FROM tb_user WHERE username = '$username'");

    if ($username == '') {
      $block = 1;
      $data['result'] = 0;
      $data['message'] = 'Harap mengisi username!';
    }
    else if (mysqli_num_rows($sql_name) > 0) {
      $block = 1;
      $data['result'] = 0;
      $data['message'] = "$username sudah pernah diinput!";
    }

    if ($block == 0) {
      $insert_sql = "INSERT INTO tb_user (username, password, isactive) VALUES ('$username', '$password', '1')";
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
  }
  else {
    $data['result'] = 0;
    $data['message'] = 'Harap mengisi username!';
  }

  echo json_encode($data);
?>