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
    $urutan = isset($_POST['txt_urutan']) ? $_POST['txt_urutan'] : 0;
    $sql_name = $conn->query("SELECT name FROM tb_slider WHERE name = '$name'");

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
      $new_filename = "SLIDER_".rand(1,1000)."_".time().".jpg";
      $upload = move_uploaded_file($file['tmp_name'], "img/slider/".$new_filename);
      $insert_sql = "INSERT INTO tb_slider (created_on, created_by, name, path, urutan) VALUES ('$created_on', '$user', '$name', '$new_filename', '$urutan')";
      $exec_sql = $conn->query($insert_sql);
      $last_inserted_id = $conn->insert_id;
      if ($exec_sql && $upload) {
        $insert_name = "INSERT INTO tb_dokumen_slider (created_on, created_by, slider_id, img_path, urutan) VALUES ('$created_on', '$user', '$last_inserted_id', '$new_filename', '$urutan')";
        $exec_name = $conn->query($insert_name);
        if ($exec_name) {
          $data['result'] = 1;
          $data['message'] = "Data berhasil disimpan.";
        }
        else {
          $data['result'] = 0;
          $data['message'] = "Gambar berhasil diupload namun gagal disimpan ke database.";
        }
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