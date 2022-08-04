<?php 

	$connect = mysqli_connect('localhost', 'root', 'root', 'helper-auth');

	if (!$connect) {
		die('Error connect to DataBase');
	}