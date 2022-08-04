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

	if ($status == 1) {$status = 'Отправлено';} 
	if ($status == 2) {$status = 'На рассмотрении';} 
	if ($status == 3) {$status = 'Готово';}

	mysqli_query($connect, "UPDATE `tickets` SET `name` = '$name', `cause` = '$cause', `cabinet` = '$cabinet', `status` = '$status' , `time` = '$date', `discription` = '$discription' WHERE `tickets`.`id` = '$id'");

	header('Location: /admin.php');

?>