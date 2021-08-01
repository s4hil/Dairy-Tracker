<?php
	include 'config.php';
	include '../../loginCheck.php';
	header('Access-Control-Allow-Origin');
	$data = json_decode(file_get_contents("php://input"), true);

	$date = $data['date'];
	$item = ucfirst($data['item']);
	$quantity = $data['quantity'];
	$user_id = $_SESSION['userID'];

	$dateArray = explode('-', $date);
	$month = $dateArray[1];

	$sql = "INSERT INTO `purchased_items` (`date`, `month`, `item`, `quantity`, `user_id`) 
			VALUES('$date','$month','$item','$quantity', '$user_id')";
	$res = mysqli_query($conn, $sql);
	if ($res) {
		$response = "Item Added!";
	}
	else {
		$response = "Failed To Add Item!";
	}
	echo json_encode($response);
?>