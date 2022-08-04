<?php

	require_once '../auth/connect.php';

	$ticket_id = $_GET['id'];
	$data = [
		"status" => $_POST['status']
	];



	$status = $_POST['status'];
	$sql = mysqli_query($connect, "UPDATE `tickets` SET `status` = '$status', `time` = '$date', WHERE `tickets`.`id` = '$id'");
	$statement = $connection->prepare($sql);
	$result = $statement->execute($data);
	var_dump($result);


?>