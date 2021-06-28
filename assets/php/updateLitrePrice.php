<?php
	include 'config.php';
	header('Access-Control-Allow-Origin');
	$data = json_decode(file_get_contents("php://input"), true);

	$price = $data['newPrice'];
	$sql = "UPDATE `tracker_config` SET `prop1Val`='$price' WHERE `name` = 'litrePrice'";
	$res = mysqli_query($conn, $sql);
	if ($res) {
		$response = "Updated!";
	}
	else {
		$response = "Failed To Update!";
	}
	echo json_encode($response);

?>