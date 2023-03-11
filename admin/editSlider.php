<?php 
  require_once './init.php';
  require_once './functions.php';

  if (isset($_POST['hid_id'])) {
    $id = $_POST['hid_id'];
    $nama = isset($_POST['txt_nama_edit']) ? mysqli_real_escape_string($conn, $_POST['txt_nama_edit']) : '';
    $urutan = isset($_POST['txt_urutan_edit']) ? mysqli_real_escape_string($conn, $_POST['txt_urutan_edit']) : 0;
    $modified_on = date('Y-m-d H:i:s');
    $user = $_SESSION['username'];
    $block = 0;
    $file = isset($_FILES['image_data_edit']) ? $_FILES['image_data_edit'] : '';

    if ($nama == '') {
      $block = 1;
      $data['result'] = 0;
      $data['message'] = 'Harap mengisi nama!';
    }

    if ($block == 0) {
      if ($file != '') {
        $new_filename = "SLIDER_".rand(1,1000)."_".time().".jpg";
        $upload = move_uploaded_file($file['tmp_name'], "img/slider/".$new_filename);
        $update_sql = "UPDATE tb_slider SET modified_on = '$modified_on', modified_by='$user', name='$nama', urutan='$urutan', path='$new_filename' WHERE id='$id'";
      }
      else {
        $update_sql = "UPDATE tb_slider SET modified_on = '$modified_on', modified_by='$user', name='$nama', urutan='$urutan' WHERE id='$id'";
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
    $data['message'] = 'Harap mengisi nama dan urutan!';
  }

  echo json_encode($data);
?>