<?php 
  require_once './init.php';
  require_once './functions.php';
  $res = [];

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
    $data = $conn->query("SELECT judul, category_id, tgl_berita, keterangan, path, urutan FROM tb_news WHERE id = '$id'");
    $row = $data->fetch_array(MYSQLI_ASSOC);
    $judul = $row['judul'];
    $category = $row['category_id'];
    $tglberita = $row['tgl_berita'];
    $keterangan = $row['keterangan'];
    $path = $row['path'];
    $urutan = $row['urutan'];
	
    $hasil[] = [
      'hid_id' => $id,
      'judul' => $judul,
      'category' => $category,
      'tglberita' => $tglberita,
      'keterangan' => $keterangan,
      'path' => $path,
      'urutan' => $urutan
    ];

    array_push($hasil);

    $res = [
      'success' => 1,
      'data' => $hasil
    ];
	}
  else {
    $res = [
      'success' => 0
    ];
  }

	echo json_encode($res);
?>