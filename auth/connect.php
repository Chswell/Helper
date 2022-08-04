<?php 

	$connect = mysqli_connect('192.168.0.14:3306', 'root', 'root', 'helper-auth');

	if (!$connect) {
		die('Error connect to DataBase');
	}