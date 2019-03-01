<?php

	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "notice_board";

	$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword, $dbName) or dir("Unable to connect to db!");

	echo "Connection to [mytestdb] successful!!";
?>
