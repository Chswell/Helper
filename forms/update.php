<?php

	require_once '../auth/connect.php';

	$id = $_POST['id'];
	$name = $_POST['name'];
	$cause = $_POST['cause'];
	$cabinet = $_POST['cabinet'];
	$discription = $_POST['discription'];
	$status = $_POST['status'];

	if ($cause == 1) {
		$cause = 'Картридж';
	} elseif ($cause == 2) {
		$cause = 'Принтер';
	} elseif ($cause == 0) {
		$cause = '';
	}

	mysqli_query($connect, "UPDATE `tickets` SET `name` = '$name', `cause` = '$cause', `cabinet` = '$cabinet', `time` = NOW(), `discription` = '$discription' WHERE `tickets`.`id` = '$id'");

	header('Location: /profile.php');

?>