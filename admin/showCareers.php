<?php 
  require_once './init.php';
  require_once './functions.php';
  $res = [];

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
    $data = $conn->query("SELECT title, requirement, urutan FROM tb_career WHERE id = '$id'");
    $row = $data->fetch_array(MYSQLI_ASSOC);
    $title = $row['title'];
    $requirement = $row['requirement'];
    $urutan = $row['urutan'];
	
    $hasil[] = [
      'hid_id' => $id,
      'title' => $title,
      'requirement' => $requirement,
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