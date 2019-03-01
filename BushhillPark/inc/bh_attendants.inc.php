<!--This includes page updates the attendants count for the meeting
Then it redirects back to the notice board.-->

<?php
	include_once '../../includes/dbh.inc.php'; //DB connection

	/*SET TIME */	  
		date_default_timezone_set('Europe/London');  /*See time zone - https://stackoverflow.com/questions/1814935/why-is-my-time-off-by-one-hour-in-php*/

	/* See datetime functions: https://www.geeksforgeeks.org/php-date-time/ --*/ 
	$today = date("d.M.Y/D");
	$time = date("h:i a"); 
	//echo $today . " - " . $time;




	//Retrieve name from query string and store to a local variable
	if(isset($_POST) && array_key_exists('meetingCount',$_POST) && is_numeric($_POST['meetingCount'])) { 
		$meetingCount = $today . " - " . $time . " - " . $_POST['meetingCount'] .  "\r\n"; 

					  
																						  

		if ($_POST['clearAttendance']=="checked"){
			file_put_contents("..//bh-meeting-attendance.txt","");//overwrite file.
		}else{
			echo "clear attendants not set";
		}
 
		//WRITE TO TEXT FILE.
		file_put_contents("..//bh-meeting-attendance.txt", $meetingCount, FILE_APPEND | LOCK_EX);
 
								
									 
 
 

		//WRITE TO DATABASE
		$meetingCount = $_POST['meetingCount']; //Just get the count part
		$dateForDB = date("Y-m-d H:i:s");  //Convert to date datatype
		
		/*$sql = 	"INSERT INTO `meeting_attendance`(`ID`, `Date`, `Congregation`, `Count`) 
		VALUES ('id','$dateForDB','Bushhill Park','$meetingCount')";*/
				

		$sql = 	"INSERT INTO `meeting_attendance`(`ID`, `Date`, `Congregation`, `Count`) 
		VALUES ('id','$dateForDB','Bushhill Park','$meetingCount')";
				
		mysqli_query($conn, $sql) or die("..error inserting to db");
		
	
		mysqli_close($conn);

	}


	//REDIRECT BACK TO NOTICE BOARD
		header('Location: ../bh_home.php'); 
		
		

?> 