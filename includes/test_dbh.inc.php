<?php

	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "mytestdb";

	$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword, $dbName) or dir("Unable to connect to db!");

	echo "Connection to [mytestdb] successful!!"

	
?>
