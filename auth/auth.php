<?php 

	session_start();
	require_once 'connect.php';

	$login = $_POST['login'];
	$pass = $_POST['pass'];

	$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
	if (mysqli_num_rows($check_user) > 0) {
		$user = mysqli_fetch_assoc($check_user);
		if ($login === 'admin' && $pass === 'Setup') {

			$_SESSION['user'] = [
				"id" => $user['id'],
				"login" => $user['login']
			];
			header('Location: ../admin.php');

			} elseif ($login === 'user' && $pass === 'user') {

			$_SESSION['user'] = [
				"id" => $user['id'],
				"login" => $user['login']
			];
			header('Location: ../profile.php'); 
		}
	} else {
		die('Error');
	}
?>