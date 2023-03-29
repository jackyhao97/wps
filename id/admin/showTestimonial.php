<?php 
  require_once './init.php';
  require_once './functions.php';
  $res = [];

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
    $data = $conn->query("SELECT nama, testimoni, path, urutan FROM tb_testimonial WHERE id = '$id'");
    $row = $data->fetch_array(MYSQLI_ASSOC);
    $nama = $row['nama'];
    $testimoni = $row['testimoni'];
    $path = $row['path'];
    $urutan = $row['urutan'];
	
    $hasil[] = [
      'hid_id' => $id,
      'nama' => $nama,
      'testimoni' => $testimoni,
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