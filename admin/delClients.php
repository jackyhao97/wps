<?php 
  require_once './init.php';
  require_once './functions.php';
  $res = [];

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
    $data = $conn->query("SELECT path FROM tb_clients WHERE id = '$id'");
    $row = $data->fetch_array(MYSQLI_ASSOC);
    $path = $row['path'];
		$hapus = $conn->query("DELETE FROM tb_clients WHERE id = '$id'");
	
		if ($hapus) {
      $img_path = BASE_URL.DS.'admin/img/clients/'.$path;
      if (file_exists($img_path)){
        unlink($img_path);
      }
			$res['success'] = 1;
      $res['url'] = $img_path;
		}
		else {
			$res['success'] = 0;
		}
	}

	echo json_encode($res);
?>