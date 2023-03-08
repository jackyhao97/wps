<?php 
  require_once './init.php';
  require_once './functions.php';

  // if(!isset($_SESSION['username'])) {
	// 	header("location: login.php");
	// }

  if (isset($_POST['txt_nama'])) {
    $name = isset($_POST['txt_nama']) ? $_POST['txt_nama'] : '';
    $created_on = date('Y-m-d H:i:s');
    $user = $_SESSION['username'];
    $block = 0;
    $file = $_FILES['image_data'];
    $sql_name = $conn->query("SELECT name FROM tb_client WHERE name = '$name'");

    if ($name == '') {
      $block = 1;
      $data['result'] = 0;
      $data['message'] = 'Harap mengisi nama!';
    }
    else if (mysqli_num_rows($sql_name) > 0) {
      $block = 1;
      $data['result'] = 0;
      $data['message'] = "$name sudah pernah diinput!";
    }

    if ($block == 0) {
      $new_filename = "CLIENT_".strtoupper($name)."_".time().".jpg";
      $upload = move_uploaded_file($file['tmp_name'], "img/clients/".$new_filename);
      $insert_sql = "INSERT INTO tb_client (created_on, created_by, name, path) VALUES ('$created_on', '$user', '$name', '$new_filename')";
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
    $data['message'] = 'Harap mengisi nama!';
  }

  echo json_encode($data);
?>