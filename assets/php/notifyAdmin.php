<?php
	
	$db_host = "localhost";
	$db_user = "u883347914_thealphacoder";
	$db_pass = "Alpha@675";
	$db_name = "u883347914_dairy_tracker";

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die('Failed to connect');
	
	$today = date('d/m/Y');
	$todayArr = explode('/', $today);

	$day = $todayArr[0];
	$month = $todayArr[1];
	$year = $todayArr[2];
	if ($day[0] == 0) {
		$day = str_replace('0', '', $day);
	}
	if ($month[0] == 0) {
		$month = str_replace('0', '', $month);
	}

	$date = $day."/".$month."/".$year;

	$sql = "SELECT * FROM `dairy_records` WHERE `date` = '$date'";
	$res = mysqli_query($conn, $sql);
	if (mysqli_num_rows($res) == 0) {
		function sendMessage($chatID, $messaggio, $token) {

	    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
	    $url = $url . "&text=" . urlencode($messaggio);
	    $ch = curl_init();
	    $optArray = array(
	            CURLOPT_URL => $url,
	            CURLOPT_RETURNTRANSFER => true
	    );
	    curl_setopt_array($ch, $optArray);
	    $result = curl_exec($ch);
	    curl_close($ch);
	    return $result;
	}

	$token = "1865104022:AAEeJ7pAFI9XH42J3rL1nfhjS9itcMM8a04";
	$chatid = "1149842523";

	$msg = "Dear User, You've not added the entry of the day: ".$date.", Regards, Alpha Coder.";

	sendMessage($chatid, $msg, $token);
	}
	else {
		echo "Rec found";
	}
?>