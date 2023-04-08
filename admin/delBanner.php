<?php 
  require_once './init.php';
  require_once './functions.php';
  $res = [];

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
    $data = $conn->query("SELECT path FROM tb_banner WHERE id = '$id'");
    $row = $data->fetch_array(MYSQLI_ASSOC);
    $path = $row['path'];
		$hapus = $conn->query("DELETE FROM tb_banner WHERE id = '$id'");
	
		if ($hapus) {
      $dir = './img/banner/';
      unlink($dir . $path);
      $res['success'] = 1;
      $res['url'] = $dir;
		}
		else {
			$res['success'] = 0;
		}
	}

	echo json_encode($res);
?>