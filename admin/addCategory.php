<?php 
  require_once './init.php';
  require_once './functions.php';

  if (isset($_POST['txt_category'])) {
    $category = isset($_POST['txt_category']) ? mysqli_real_escape_string($conn, $_POST['txt_category']) : '';
    $urutan = isset($_POST['txt_urutan']) ? $_POST['txt_urutan'] : '';
    $created_on = date('Y-m-d H:i:s');
    $user = $_SESSION['username'];
    $block = 0;

    if ($category == '') {
      $block = 1;
      $data['result'] = 0;
      $data['message'] = 'Harap mengisi category!';
    }

    if ($block == 0) {
      $insert_sql = "INSERT INTO tb_category (created_on, created_by, category, urutan) VALUES ('$created_on', '$user', '$category', '$urutan')";
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
    $data['message'] = 'Harap mengisi category!';
  }

  echo json_encode($data);
?>