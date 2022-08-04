<?php

	require_once '../auth/connect.php';

	$id = $_POST['id'];
	$name = $_POST['name'];
	$cause = $_POST['cause'];
	$cabinet = $_POST['cabinet'];
	$discription = $_POST['discription'];

	if ($cause == 1) {
		$cause = 'Картридж';
	} elseif ($cause == 2) {
		$cause = 'Принтер';
	} elseif ($cause == 0) {
		$cause = '';
	}



	mysqli_query($connect, "INSERT INTO `tickets` (`id`, `name`, `cause`, `cabinet`, `discription`, `time`) VALUES (NULL, '$name', '$cause', '$cabinet', '$discription', '$date');");

	header('Location: /profile.php');