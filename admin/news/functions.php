<?php
    function createToken($length)
    {
    	$chars = "abcdefghijkmnopqrstuvwxyz023456789";
    	srand((double)microtime()*1000000);
    	$i = 0;
    	$pass = '' ;
    
    	while ($i <= ($length - 1)) {
    		$num = rand() % 33;
    		$tmp = substr($chars, $num, 1);
    		$pass = $pass . $tmp;
    		$i++;
    	}
    	return $pass;
    }
    
    function generateFileName()
    {
        $timestamp = strtotime("now");
        return createToken(12) . "_" . $timestamp;
    }
?>