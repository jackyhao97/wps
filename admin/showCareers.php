<?php 
  require_once './init.php';
  require_once './functions.php';
  $res = [];

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
    $data = $conn->query("SELECT judul, keterangan, path FROM tb_career WHERE id = '$id'");
    $row = $data->fetch_array(MYSQLI_ASSOC);
    $judul = $row['judul'];
    $keterangan = $row['keterangan'];
    $path = $row['path'];
	
    $hasil[] = [
      'hid_id' => $id,
      'judul' => $judul,
      'keterangan' => $keterangan,
      'path' => $path
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