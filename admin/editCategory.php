<?php 
  require_once './init.php';
  require_once './functions.php';

  if (isset($_POST['hid_id'])) {
    $id = $_POST['hid_id'];
    $category = isset($_POST['txt_category_edit']) ? mysqli_real_escape_string($conn, $_POST['txt_category_edit']) : '';
    $urutan = isset($_POST['txt_urutan_edit']) ? $_POST['txt_urutan_edit'] : '';
    $tipe = to_prety_url($category);
    $modified_on = date('Y-m-d H:i:s');
    $user = $_SESSION['username'];
    $block = 0;

    if ($category == '') {
      $block = 1;
      $data['result'] = 0;
      $data['message'] = 'Harap mengisi category!';
    }

    if ($block == 0) {
      $update_sql = "UPDATE tb_category SET modified_on = '$modified_on', modified_by='$user', category='$category', urutan='$urutan', tipe='$tipe' WHERE id='$id'";

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
    $data['message'] = 'Harap mengisi category dan urutan!';
  }

  echo json_encode($data);
?>