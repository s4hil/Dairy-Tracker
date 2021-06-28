<?php
	
	include 'config.php';
	header('Access-Control-Allow-Origin');
	$data = json_decode(file_get_contents("php://input"), true);

	$month = $data['month'];

	$sql = "SELECT * FROM `dairy_records` WHERE `month` = '$month' ORDER BY `date` ASC";
	$res = mysqli_query($conn, $sql);
	$response = array();

	while($row = mysqli_fetch_array($res)){
		$response[] = $row;
	}

	echo json_encode($response);

?>