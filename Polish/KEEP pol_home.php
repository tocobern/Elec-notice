<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="styles/themes.css">

<html>
<head>
	<title>Electronic Notice Board</title>



	<style type="text/css">
			div{
	color: black;
	}

		details {
			color: black;
			border: 1px solid #aaa;
			border-radius: 4px;
			padding: .5em .5em 0;
		}

		summary {
			color:black;
			font-weight: bold;
			margin: -.5em -.5em 0;
			padding: .5em;
		}

	</style>

</head>
<body>

<header class="main-header"><h2>Polish Congregation Notices</h2></header>
		<nav class="nav-bar">
			<ul>
				<li><a href="../index.php">...Home</a></li>
			</ul>
		</nav>



<main>
<br>
<br>
<br>
	<details>
		<summary>See Notices & Add Meeting attendance..</summary>

		<form action="inc/pol_attendants.inc.php" method='POST'>
		<h2>Please input your name:</h2>
		<input type="text" name="meetingCount">
		<input type="submit" value="Submit Count">

		<?php

		/*SET TIME */	  
	  	date_default_timezone_set('Europe/London');  /*See time zone - https://stackoverflow.com/questions/1814935/why-is-my-time-off-by-one-hour-in-php*/

		/* See datetime functions: https://www.geeksforgeeks.org/php-date-time/ --*/ 
		$today = date("d.M.Y/D");
		$time = date("h:i a"); 
		echo $today . " - " . $time;

		?> 

		
		</form>


<br/>
<br/>


<div class="Notices-Container">
		<div class="Notices-From-JP">
			<h3>Notices From Jubilee Park</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>



		<div class="Meeting-Attendance">
			<h3>Meeting Attendance</h3>

			<!--READ ATTENDANCE FILE-->
			<?php
				//$MeetingAttendanceFile="jp-meeting-attendance.txt";
					$fopen = fopen("pol-meeting-attendance.txt", "r");
					echo "[file opened]" . "<br/>";
					while ( $current_line = fgets($fopen) ) {
					// do stuff to the current line here
						/*echo $current_line . "<br />";*/

						//Put lines in an array
						$lineArray[] = $current_line . "\n";
					}
					fclose($fopen);
					
					//Display lines 
					if (!empty($lineArray)){
							foreach(array_reverse($lineArray) as $word){
								echo $word . "<br/>";					
							}

					}

					unset($lineArray) ;//destroy array
					echo "[FILE CLOSED]";
		
			?>

		</div>
		<div class="Notices-From-Congrations">
			<h3>Notices From Congregations</h3>
							<!--READ ATTENDANCE FILE-->
			<?php
				//$MeetingAttendanceFile="jp-meeting-attendance.txt";
					$fopen = fopen("../messagesToAll/msg-To-All-Congs.txt", "r");
					echo "[file opened]" . "<br/>";
					while ( $current_line = fgets($fopen) ) {
					// do stuff to the current line here
						/*echo $current_line . "<br />";*/

						//Put lines in an array
						$lineArray[] = $current_line . "\n";
					}
					fclose($fopen);
					
					//Display lines 
					if (!empty($lineArray)){
							foreach($lineArray as $word){
								echo $word . "<br/>";					
							}

					}

					unset($lineArray) ;//destroy array
					echo "[FILE CLOSED]";
		
			?>
		</div>
	</div>

<br>
<br>
<br>
<br>

	</details>

<div>

</div>





<BR>

<BR>



</main>

	


		<!--TRY SORTING THE FILES-->
		<?php
			$files = array();
			$dir = opendir('docs/'); // open the cwd..also do an err check.
			while(false != ($file = readdir($dir))) {
			        if(($file != ".") and ($file != "..") and ($file != "index.php")) {
			                $files[] = $file; // put in array.
			        }   
			}

			natsort($files); // sort.

			/*echo "Files found :" . count($files) . ". Only 12 items displayed!";
			echo "<br>";
			echo "<br>";*/

			$files = array_slice($files, 0,8);

		echo "<div class=\"container\">";
			// print.
			foreach($files as $file) {
			        /*echo("<a href='$file'>$file</a> <br />\n");*/
		    		/*if (strpos ($file, 'pdf') !== false) {  #check if this is a pdf file*/
					  echo "<div class=\"sections\">";
					  echo "<iframe src=\"docs\\$file\">";
					  echo "</iframe>";
					  echo "<br>";
					 	echo "<br>";
							echo "<a href=\"docs\\$file\" target=\"_blank\" >" . $file . "</a>" . "<br>";
					  echo "</div>";
					/*}*/
			}


		?>
</div>


</body>
</html>