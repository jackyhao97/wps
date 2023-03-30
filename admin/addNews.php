<?php 
  require_once './init.php';
  require_once './functions.php';

  if (isset($_POST['txt_judul'])) {
    $judul = isset($_POST['txt_judul']) ? mysqli_real_escape_string($conn, $_POST['txt_judul']) : '';
    $keterangan = isset($_POST['keterangan']) ? mysqli_real_escape_string($conn, $_POST['keterangan']) : '';
    $category = isset($_POST['txt_category']) ? $_POST['txt_category'] : '';
    $tglberita = isset($_POST['date_tgl_berita']) ? $_POST['date_tgl_berita'] : '';
    $urutan = isset($_POST['txt_urutan']) ? $_POST['txt_urutan'] : '';
    $seolink = to_prety_url($judul);
    $created_on = date('Y-m-d H:i:s');
    $user = $_SESSION['username'];
    $block = 0;
    $file = $_FILES['image_data'];

    if ($judul == '') {
      $block = 1;
      $data['result'] = 0;
      $data['message'] = 'Harap mengisi judul!';
    }

    if ($block == 0) {
      $new_filename = "NEWS_".rand(1,1000)."_".time().".jpg";
      $upload = move_uploaded_file($file['tmp_name'], "img/news/".$new_filename);
      $insert_sql = "INSERT INTO tb_news (created_on, created_by, judul, category_id, tgl_berita, keterangan, path, urutan, seo_link) VALUES ('$created_on', '$user', '$judul', '$category', '$tglberita', '$keterangan', '$new_filename', '$urutan', '$seolink')";
      $exec_sql = $conn->query($insert_sql);
      if ($exec_sql && $upload) {
        $data['result'] = 1;
        $data['message'] = "Data berhasil disimpan.";
      }
      else if (!$exec_sql && $upload) {
        $data['result'] = 0;
        $data['message'] = "Gambar berhasil diupload namun gagal disimpan ke database.";
      }
      else {
        $data['result'] = 0;
        $data['message'] = "Data gagal disimpan.";
      }
    }
  }
  else {
    $data['result'] = 0;
    $data['message'] = 'Harap mengisi judul!';
  }

  echo json_encode($data);
?>