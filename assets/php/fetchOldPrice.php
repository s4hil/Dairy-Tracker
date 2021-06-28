<?php
	include 'config.php';
	header('Access-Control-Allow-Origin');

	$sql = "SELECT * FROM `tracker_config` WHERE `name` = 'litrePrice'";
	$res = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($res);

	$response = array('pricePerLitre' => $row['prop1Val']);

	echo json_encode($response);

?>