<?php
	header('Access-Control-Allow-Origin');
	$data = json_decode(file_get_contents("php://input"), true);
	$name = strtolower($data['name']);
	$password = strtolower($data['pw']);
	if ($name == "umaid" && $password == "umaid@1") {
		$response = true;
	}
	else {
		$response = false;
	}
	echo json_encode($response);
?>