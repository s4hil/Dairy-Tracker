<?php
	header('Access-Control-Allow-Origin');
	header('Content-Type: application/json');
	include 'config.php';
	include '../../loginCheck.php';
	$data = json_decode(file_get_contents("php://input"), true);

	$response = array();
	$month = $data['month'];
	$year = $data['year'];


	// $month = 7;
	// $year = 2021;
	

	$totalLitres = 0;
	$user_id = $_SESSION['userID'];

	// print_r($user_id);

	if (!empty($data) || 1 == 1){

		$sql = "SELECT * FROM `dairy_records` WHERE `user_id` = '1' AND `year` = '$year' AND `month` = '$month'";
		$res = mysqli_query($conn, $sql);
		if ($res) {
			$response['data'] = $month."-".$year."-".$user_id;

			if (mysqli_num_rows($res) == 0) {
					$response['msg'] = "No records Found!";
				}
			else {
				while ($row = mysqli_fetch_array($res)) {
					$totalLitres += $row['quantity'];
					$fullDate = $row['date'];
				}

				$fullDateArray = explode('/', $fullDate);
				$monthYear = $fullDateArray[1]."/".$fullDateArray[2]; 

				$response = array();
				$purchasedItems = array();
				$response['monthYear'] = $monthYear;
				$response['totalLitres'] = $totalLitres;

				$res2 = mysqli_query($conn, "SELECT LPV FROM `tracker_config` WHERE `user_id` = '$user_id'");
				$config = mysqli_fetch_array($res2);

				$litrePrice = $config['LPV'];

				$response['litrePrice'] = $litrePrice;
				$response['totalMoney'] = $litrePrice * $totalLitres;


				$sql3 = "SELECT * FROM `purchased_items` WHERE `month` = '$month'";
				$res3 = mysqli_query($conn, $sql3);

				if ($res3) {
					if (mysqli_num_rows($res3) == 0) {
						$response['sum_err'] = 1;
					}
					else{
						while ($rec = mysqli_fetch_array($res3)) {
							$purchasedItems[] = $rec;
						}
						
						$response['purchasedItems'] = $purchasedItems;
					
					}
				}

			}
		}

	}
	else {
		$response['status'] = false;
		$response['msg'] = "Invalid Parameters!";
 	}

	echo json_encode($response, JSON_PRETTY_PRINT);
?>