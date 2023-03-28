<?php 
  require_once './init.php';
  require_once './functions.php';
  $res = [];

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
    $data = $conn->query("SELECT url, path, deskripsi, urutan FROM tb_partners WHERE id = '$id'");
    $row = $data->fetch_array(MYSQLI_ASSOC);
    $path = $row['path'];
    $url = $row['url'];
    $deskripsi = $row['deskripsi'];
    $urutan = $row['urutan'];
	
    $hasil[] = [
      'hid_id' => $id,
      'path' => $path,
      'url' => $url,
      'deskripsi' => $deskripsi,
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