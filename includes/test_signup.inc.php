	<?php 
	
		//connecting to db 
		//see 38: Insert data from a website into a database using MySQLi | PHP tutorial | Learn PHP programming
		//https://www.youtube.com/watch?v=XhLAB1wwzNk
		include_once 'test_dbh.inc.php';
	
	
		$Fname = $_POST['Fname'];
		$Lname = $_POST['Lname'];
		$Email = $_POST['Email'];
		$address1 = $_POST['address1'];
		$address2 = $_POST['address2'];
		$address3 = $_POST['address3'];
		$postcode = $_POST['postcode'];

		
		$sql = 	"INSERT INTO `mytesttable`(`ID`, `Fname`, `Lname`, `Email`, `address1`, `address2`, `address3`, `postcode`) 
		VALUES ('id','$Fname','$Lname','$Email','$address1','$address2','$address3','$postcode')";
				
		mysqli_query($conn, $sql) or die("..error inserting to db");
		
		header("Location: ../index.php?signup=success");
		
		mysqli_close($con);
	?>
