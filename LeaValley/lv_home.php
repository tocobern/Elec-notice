<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="styles/themes.css">

<html>
<head>
	<title>Lea Valley Notices</title>

</head>
<body>

<header class="main-header"><h2>Lea Valley Notices</h2></header>
		<nav class="nav-bar">
			<ul>
				<li><a href="../index.php">...Home</a></li>
			</ul>
		</nav>
<main>
<br>
<br>
<br>
	<details open>
		<summary>See Notices & Add Meeting attendance..</summary>

		<form action="inc/lv_attendants.inc.php" method='POST'> <!--process the attendance-->
		<h2>Enter attendance:</h2>
		<input type="text" name="meetingCount" style="font-size:20pt";>
		<input type="submit" value=" Submit Count " style="font-size:20pt"; >
		<input type="checkbox" name="clearAttendance" value="checked">Clear all data</input>

	    <?php

		/*SET TIME */	  
	  	date_default_timezone_set('Europe/London');  /*See time zone - https://stackoverflow.com/questions/1814935/why-is-my-time-off-by-one-hour-in-php*/

		/* See datetime functions: https://www.geeksforgeeks.org/php-date-time/ --*/ 
		$today = date("d.M.Y/D");
		$time = date("h:i a"); 
		echo " (" . $today . " - " . $time . ")";

		?> 
		</form>

<div class="Notices-Container">

		<div class="Meeting-Attendance">
			<h3>Meeting Attendance</h3>

			<!--READ ATTENDANCE FILE-->
			<?php
				//$MeetingAttendanceFile="jp-meeting-attendance.txt";
					$fopen = fopen("lv-meeting-attendance.txt", "r");
					echo "[FILE OPENED....]" . "<br/>";
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

					echo "[....FILE CLOSED]";
		
			?>

		</div>

		<div class="Notices-From-LV">
			<h3>Notices From Lea Valley Park</h3>
			<?php
				//$MeetingAttendanceFile="lv-meeting-attendance.txt";
					$fopen = fopen("../leavalley/messages/msg-To-LV.txt", "r");
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
			$files = array_reverse($files, true); //reverse the order so latest comes first.

			/*echo "Files found :" . count($files) . ". Only 12 items displayed!";
			echo "<br>";
			echo "<br>";*/

			$files = array_slice($files, 0,20);

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
						/*echo "<a href=\"docs\\$file\" target=\"_blank\" >" . $file . "</a>" . "<br>";*/

						echo "<a href=\"viewfile.php?object=$file\">" . $file . "</a>" . "<br>";
					  echo "</div>";
					/*}*/
			}


		?>
</div>


</body>
</html>