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

	if ($name == 1) {
		$name = 'Sumsung ML-2160';
	} elseif ($name == 2) {
		$name = 'Xerox B210';
	} elseif ($name == 3) {
		$name = 'Xerox Phaser 3020';
	} elseif ($name == 4) {
		$name = 'Другой принтер';
	}

	mysqli_query($connect, "UPDATE `tickets` SET `name` = '$name', `cause` = '$cause', `cabinet` = '$cabinet', `status` = '$status' , `time` = '$date', `discription` = '$discription' WHERE `tickets`.`id` = '$id'");

	header('Location: /profile.php');

?>