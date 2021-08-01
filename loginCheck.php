<?php
session_start();
	if (isset($_POST['login'])) {
		include 'assets/php/config.php';
		$username = mysqli_real_escape_string($conn, clean($_POST['username']));
		$password = mysqli_real_escape_string($conn, clean($_POST['password']));

		$sql = "SELECT * FROM `users` WHERE `username` = '$username' LIMIT 1";
		$res = mysqli_query($conn, $sql);
		if (mysqli_num_rows($res) > 0) {
			$row = mysqli_fetch_array($res);
			if ($username == $row['username'] && $password == $row['password']) {
				$_SESSION['loginStatus'] = true;
				$_SESSION['userID'] = $row['user_id'];
				header('location: dashboard.php');
			}
		}
		else {
			$_SESSION['msg'] = "Invalid Credentials";
			$_SESSION['loginStatus'] = false;
			header('location: index.php');
		}
	}
	if (isset($_GET['logout'])) {
		header('location: index.php');
		session_destroy();
	}
?>