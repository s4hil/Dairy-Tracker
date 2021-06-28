<?php
	include 'config.php';
	header('Access-Control-Allow-Origin');
	$data = json_decode(file_get_contents("php://input"), true);

	$date = $data['date'];

	$checkDuplicate = "SELECT * FROM `dairy_records` WHERE `date` = '$date'";
	$query = mysqli_query($conn, $checkDuplicate);

	$record = mysqli_fetch_array($query);

	if ($record['date'] == $date) {
		$response = "Todays Record Already Exists!";
	}
	else {
		$dateArray = explode('/', $date);
		$month = $dateArray[1];

		$quantity = $data['quantity'];

		$sql = "INSERT INTO `dairy_records` (`date`, `month`,`quantity`) VALUES ('$date', '$month','$quantity')";
		$res = mysqli_query($conn, $sql);
		if ($res) {
			$response = "Record Added!";
		}
		else {
			$response = "Failed To Add!";
		}

	}
	
	echo json_encode($response);
?>