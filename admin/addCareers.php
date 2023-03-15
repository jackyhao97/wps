<?php 
  require_once './init.php';
  require_once './functions.php';

  if (isset($_POST['txt_title'])) {
    $title = isset($_POST['txt_title']) ? mysqli_real_escape_string($conn, $_POST['txt_title']) : '';
    $requirement = isset($_POST['requirement']) ? mysqli_real_escape_string($conn, $_POST['requirement']) : '';
    $urutan = isset($_POST['txt_urutan']) ? $_POST['txt_urutan'] : '';
    $created_on = date('Y-m-d H:i:s');
    $user = $_SESSION['username'];
    $block = 0;

    if ($title == '') {
      $block = 1;
      $data['result'] = 0;
      $data['message'] = 'Harap mengisi title!';
    }

    if ($block == 0) {
      $insert_sql = "INSERT INTO tb_career (created_on, created_by, title, requirement, urutan) VALUES ('$created_on', '$user', '$title', '$requirement', '$urutan')";
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
    $data['message'] = 'Harap mengisi title!';
  }

  echo json_encode($data);
?>