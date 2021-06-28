<?php
	include 'config.php';
	header('Access-Control-Allow-Origin');
	$data = json_decode(file_get_contents("php://input"), true);

	$month = $data['month'];
	$totalLitres = 0;

	$sql = "SELECT * FROM `dairy_records` WHERE `month` = '$month'";
	$res = mysqli_query($conn, $sql);
	if ($res) {
		if (mysqli_num_rows($res) == 0) {
				$response['tbl_err'] = 1;
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

			$res2 = mysqli_query($conn, "SELECT * FROM `tracker_config` WHERE `name` = 'litrePrice'");
			$config = mysqli_fetch_array($res2);

			$litrePrice = $config['prop1Val'];

			$response['litrePrice'] = $litrePrice;
			$response['totalMoney'] = $litrePrice * $totalLitres;

		}
	}

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
		

	

	echo json_encode($response);
?>