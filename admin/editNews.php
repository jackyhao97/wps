<?php 
  require_once './init.php';
  require_once './functions.php';

  if (isset($_POST['hid_id'])) {
    $id = $_POST['hid_id'];
    $judul = isset($_POST['txt_judul_edit']) ? mysqli_real_escape_string($conn, $_POST['txt_judul_edit']) : '';
    $category = isset($_POST['txt_category_edit']) ? $_POST['txt_category_edit'] : '';
    $tglberita = isset($_POST['date_tgl_berita_edit']) ? $_POST['date_tgl_berita_edit'] : '';
    $keterangan = isset($_POST['keterangan_edit']) ? mysqli_real_escape_string($conn, $_POST['keterangan_edit']) : '';
    $urutan = isset($_POST['txt_urutan_edit']) ? $_POST['txt_urutan_edit'] : '';
    $modified_on = date('Y-m-d H:i:s');
    $user = $_SESSION['username'];
    $block = 0;
    $file = isset($_FILES['image_data_edit']) ? $_FILES['image_data_edit'] : '';

    if ($judul == '') {
      $block = 1;
      $data['result'] = 0;
      $data['message'] = 'Harap mengisi judul!';
    }

    if ($block == 0) {
      if ($file != '') {
        $new_filename = "NEWS_".rand(1,1000)."_".time().".jpg";
        $upload = move_uploaded_file($file['tmp_name'], "img/news/".$new_filename);
        $update_sql = "UPDATE tb_news SET modified_on = '$modified_on', modified_by='$user', judul='$judul', category_id='$category', tgl_berita='$tglberita', keterangan='$keterangan', path='$new_filename', urutan='$urutan' WHERE id='$id'";
      }
      else {
        $update_sql = "UPDATE tb_news SET modified_on = '$modified_on', modified_by='$user', judul='$judul', category_id='$category', tgl_berita='$tglberita', keterangan='$keterangan', urutan='$urutan' WHERE id='$id'";
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
    $data['message'] = 'Harap mengisi judul dan keterangan!';
  }

  echo json_encode($data);
?>