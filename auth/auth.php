<?php 

	session_start();
	require_once 'connect.php';

	$login = $_POST['login'];
	$pass = $_POST['pass'];
	$role = $_POST['role'];
	
	$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
	if (mysqli_num_rows($check_user) > 0) {
		$user = mysqli_fetch_assoc($check_user);
		if ($user['role'] === 'admin' && $user['login'] === 'admin' && $user['pass'] === 'Setup') {

			$_SESSION['user'] = [
				"id" => $user['id'],
				"login" => $user['login'],
				"role" => $user['role']
			];
			header('Location: ../admin.php');

			} elseif ($user['login'] === $login && $user['pass'] === $pass && $user['role'] === 'user') {

			$_SESSION['user'] = [
				"id" => $user['id'],
				"login" => $user['login'],
				"role" => $user['role']
			];
			header('Location: ../profile.php'); 
		}
	} else {
		var_dump($_SESSION['user']);
		die('Error');
	}
?>