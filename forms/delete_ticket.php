<?php 

	require_once '../auth/connect.php';
	$id = $_GET['id'];
	mysqli_query($connect, "DELETE FROM tickets WHERE `tickets`.`id` = '$id'");
	header('Location: ../admin.php');

?>