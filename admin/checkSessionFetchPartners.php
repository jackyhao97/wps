<?php 
  session_start();
  include '../config.php';
  
  if(!isset($_SESSION['status']) || ($_SESSION['status'] != "login")){
    $data['result'] = 0;
    session_unset();
	  session_destroy();
  }
  else {
    $result = $conn->query("SELECT max(urutan) as maxurutan FROM tb_partners");
    $maxurutan = $result->fetch_array(MYSQLI_ASSOC);

    $data['maxurutan'] = $maxurutan['maxurutan'] + 1;
    $data['result'] = 1;
  }

  echo json_encode($data);
?>