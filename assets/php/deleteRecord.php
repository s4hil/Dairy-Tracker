<?php
	include 'config.php';
	header('Access-Control-Allow-Origin');
	$data = json_decode(file_get_contents("php://input"), true);

	$id = $data['delID'];
	$sql = "DELETE FROM `dairy_records` WHERE `id` = '$id'";
	$res = mysqli_query($conn, $sql);
	if ($res) {
		$response = "Deleted!";
	}
	else {
		$response = "Failed To Delete!";
	}

	echo json_encode($response);

?>