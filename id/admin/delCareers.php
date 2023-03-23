<?php 
  require_once './init.php';
  require_once './functions.php';
  $res = [];

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
		$hapus = $conn->query("DELETE FROM tb_career WHERE id = '$id'");
	
		if ($hapus) {
			$res['success'] = 1;
		}
		else {
			$res['success'] = 0;
		}
	}

	echo json_encode($res);
?>