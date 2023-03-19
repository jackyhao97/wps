<?php
	session_start();
    
	require_once ('functions.php');
	include '../../config.php';
    
	if(!isset($_SESSION['status']) || ($_SESSION['status'] != "login")){
		$res['error'] = 1;
		echo json_encode($res);
		exit;
	}
	
    $dir = '../img/news/details/';
    $site_path = SITE_PATH;
    $res = $data = array();
    
	if (is_dir($dir)) {
		if ($dh = opendir($dir)) {
			while (($file = readdir($dh)) !== false) {
				if (filetype($dir . $file) == 'file') {
					if (($file != 'index.html') && ($file != 'index.php')) {
				        $data[] = array(
				            'key' => createToken(8),
				            'path' => $site_path . $file,
				            'filename' => $file,
				            'modified' => filemtime($dir . $file)
				        );
					}
				}
			}
			closedir($dh);
		}
	}
	
	if (!empty($data)) {
	    $sort = array_column($data, 'modified');
	    array_multisort($sort, SORT_DESC, $data);
	}
	$res['data'] = $data;
	
	echo json_encode($res);
?>