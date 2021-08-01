<?php
	
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "dairy_tracker";

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die('Failed to connect');
	
	function clean($str)
    {
        return preg_replace('/[^\.\@\,\-\_A-Za-z0-9 ]/', '', $str);
    }
?>