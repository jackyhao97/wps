<?php 
  require_once './init.php';
  require_once './functions.php';
  $res = [];

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
    $data = $conn->query("SELECT username, password FROM tb_user WHERE id = '$id'");
    $row = $data->fetch_array(MYSQLI_ASSOC);
    $username = $row['username'];
    $password = $row['password'];
	
    $hasil[] = [
      'hid_id' => $id,
      'username' => $username,
      'password' => $password
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