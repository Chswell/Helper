<?php 

	$connect = mysqli_connect('localhost', 'root', 'root', 'helper-auth');

	if (!$connect) {
		die('Error connect to DataBase');
	}

	date_default_timezone_set('Asia/Bangkok');
	$date = date('Y-m-d H:i:s', time());