<?php
    session_start();
    
    require_once ('functions.php');
    include '../../config.php';
    
	if(!isset($_SESSION['status']) || ($_SESSION['status'] != "login")){
		$res['error'] = 1;
		$res['message'] = 'Unauthorized access.';
		echo json_encode($res);
		exit;
	}
	
	if (isset($_FILES['file']['name'])) {
        $res = array();
        
	    $filename = explode(".",$_FILES['file']['name']);
        $name = $filename[0];
	    $site_path = SITE_PATH;
        
        /* Location */
        $dir = '../img/news/details/';
        $location = $dir . $_FILES['file']['name'];
        $imageFileType = pathinfo($location, PATHINFO_EXTENSION);
        $imageFileType = strtolower($imageFileType);
        
        /* Valid extensions */
        $valid_extensions = array('jpg','jpeg','png');
        
        /* Check file extension */
        if (in_array($imageFileType, $valid_extensions)) {
            /* Upload file */
            // $new_filename = generateFileName();
            $file = $name . '_' . strtotime("now") . '.' . $imageFileType;
            if (move_uploaded_file($_FILES['file']['tmp_name'], $dir . $file)) {
                $data[] = array(
                    'key' => createToken(8),
                    'path' => $site_path . $file,
				    'filename' => $file
                );
                $res['error'] = 0;
                $res['data'] = $data;
            }
        } else {
            $res['error'] = 1;
            $res['message'] = 'Please upload a valid image file.';
        }
	} else {
	    $res['error'] = 1;
        $res['message'] = 'Image upload failed. Please try again.';
	}
	
	echo json_encode($res);
?>