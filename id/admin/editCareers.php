<?php 
  require_once './init.php';
  require_once './functions.php';

  if (isset($_POST['hid_id'])) {
    $id = $_POST['hid_id'];
    $title = isset($_POST['txt_title_edit']) ? mysqli_real_escape_string($conn, $_POST['txt_title_edit']) : '';
    $requirement = isset($_POST['requirement_edit']) ? mysqli_real_escape_string($conn, $_POST['requirement_edit']) : '';
    $urutan = isset($_POST['txt_urutan_edit']) ? $_POST['txt_urutan_edit'] : '';
    $modified_on = date('Y-m-d H:i:s');
    $user = $_SESSION['username'];
    $block = 0;

    if ($title == '') {
      $block = 1;
      $data['result'] = 0;
      $data['message'] = 'Harap mengisi title!';
    }

    if ($block == 0) {
      $update_sql = "UPDATE tb_career SET modified_on = '$modified_on', modified_by='$user', title='$title', requirement='$requirement', urutan='$urutan' WHERE id='$id'";

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
    $data['message'] = 'Harap mengisi title dan requirement!';
  }

  echo json_encode($data);
?>