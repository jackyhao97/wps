<?php 
  session_start();
  include '../config.php';
  
  if(!isset($_SESSION['status']) || ($_SESSION['status'] != "login")){
    $data['result'] = 0;
    session_unset();
	  session_destroy();
  }
  else {
    $data['result'] = 1;
  }

  echo json_encode($data);
?>