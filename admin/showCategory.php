<?php 
  require_once './init.php';
  require_once './functions.php';
  $res = [];

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
    $data = $conn->query("SELECT category, urutan FROM tb_category WHERE id = '$id'");
    $row = $data->fetch_array(MYSQLI_ASSOC);
    $category = $row['category'];
    $urutan = $row['urutan'];
	
    $hasil[] = [
      'hid_id' => $id,
      'category' => $category,
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