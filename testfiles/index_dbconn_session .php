<?php
	include_once 'includes/dbh.inc.php';
	
	//HOW TO USE SESSIONS 
	//SEE https://www.tutorialspoint.com/php/php_sessions.htm
	session_start();
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";

   echo $msg;
   
   
   //CONNECTING TO DB 
   //SEE https://www.youtube.com/watch?v=XhLAB1wwzNk
	/*
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "mytestdb";

	$conn = mysqli_connect($dbServername,$dbUsername, $dbPassword, $dbName) or die("Connection DB failed!") ;
	
	
	echo "DB 'mytestdb' connection made!"
	*/
	
	/*
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define("DB_DATABASE", "mytestdb");

	$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
	
	echo "DB connection made!"
	*/
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Electron Notice Board</title>
<style type="text/css">
	
	#main-header{
				text-align:center;
				background-color:SlateBlue;
				color:white;
				padding:5px
			}

				#main-footer{
				text-align:center;
				font-size:18px
			}

</style>

</head>
<body>

	<header id="main-header"><h1>Electronic Notice Board</h1></header>

	
	<form action="includes/signup.inc.php" method="POST">
		<input type="text" name="Fname" placeholder="Firstname">
		<BR>
		<input type="text" name="Lname" placeholder="Last Name">
		<BR>
		<input type="text" name="Email" placeholder="Email">
		<BR>
		<input type="text" name="address1" placeholder="Address1">
		<BR>
		<input type="text" name="address3" placeholder="Address2">
		<BR>
		<input type="text" name="address3" placeholder="Address3">
		<BR>
		<input type="text" name="postcode" placeholder="Postcode">
		<BR>
		<button type="submit" name="submit">Sign up</button>
	</form>
	
	
	
	<?php 

		$sql = "SELECT * FROM mytesttable;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0 ){
			while ($row = mysqli_fetch_assoc($result)){
				$withComma = implode(", ", $row);
				echo $withComma . "<BR>";
			}
		}
	?>


	<footer id="main-footer">
		<p>Copyright &copy; 2018, My Website</p>
	</footer>
</body>
</html>