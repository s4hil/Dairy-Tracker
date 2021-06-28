<?php
	include 'config.php';
	header('Access-Control-Allow-Origin');
	$data = json_decode(file_get_contents("php://input"), true);

	$date = $data['date'];

	$dateArray = explode('/', $date);

	$month = $dateArray[1];

	$records = array();
	$sql = "SELECT * FROM `dairy_records` WHERE `month` = '$month'";
	$res = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_array($res)) {
		$response[] = $row;
	}
	echo json_encode($response);
?>