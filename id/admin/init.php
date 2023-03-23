<?php 
	session_start();
	include '../config.php';
	// mengaktifkan session
	// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
	if(!isset($_SESSION['status']) || ($_SESSION['status'] != "login")){
		header("location:./login.php");
	}
?>