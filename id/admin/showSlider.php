<?php 
  require_once './init.php';
  require_once './functions.php';
  $res = [];

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
    $data = $conn->query("SELECT name, urutan, path FROM tb_slider WHERE id = '$id'");
    $row = $data->fetch_array(MYSQLI_ASSOC);
    $nama = $row['name'];
    $urutan = $row['urutan'];
    $path = $row['path'];
	
    $hasil[] = [
      'hid_id' => $id,
      'nama' => $nama,
      'urutan' => $urutan,
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