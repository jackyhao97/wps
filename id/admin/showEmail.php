<?php 
  require_once './init.php';
  require_once './functions.php';
  $res = [];

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
    $data = $conn->query("SELECT deskripsi, email FROM tb_email_contact WHERE id = '$id'");
    $row = $data->fetch_array(MYSQLI_ASSOC);
    $deskripsi = $row['deskripsi'];
    $email = $row['email'];
	
    $hasil[] = [
      'hid_id' => $id,
      'deskripsi' => $deskripsi,
      'email' => $email
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