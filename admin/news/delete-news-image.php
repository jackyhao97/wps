<?php
    session_start();
    include '../../config.php';
    
	if(!isset($_SESSION['status']) || ($_SESSION['status'] != "login")){
		$res['error'] = 1;
		echo json_encode($res);
		exit;
	}
	
	if (isset($_POST['file'])) {
	    $filename = $_POST['file'];
	    $dir = '../img/news/details/';
        $site_path = SITE_PATH;
        $res = array();
        
        if (file_exists($dir . $filename)) {
            unlink($dir . $filename);
            $res['error'] = 0;
            $res['message'] = 'File has been removed.';
        } else {
            $res['error'] = 1;
            $res['message'] = 'File not exist.';
        }
	} else {
	    $res['error'] = 1;
        $res['message'] = 'An error occured while accessing the server. Please try again.';
	}
	
	echo json_encode($res);
?>