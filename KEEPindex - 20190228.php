<!DOCTYPE html>
<html id="html-container">
	<head>

		<title>Electron Notice Board</title>
		<meta name="description" content="Electionic board for Galliard Close Kingdom Hall">
		<meta bane="keywords" content="Based on jw.org information ">

		<link rel="stylesheet" type="text/css" href="styles/styles.css">



		<style type="text/css">
			.Yeartext{
				border: 1px solid black;
				background-color: #FCF3CF;
				opacity: .7;
				text-align: center;
				position: absolute;
				top:  50%;
				left: 50%;
				transform: translate(-50%,-50%);
				font-size: 200%;

			}

			.MeetingTimes{
				border: 1px solid black;
				text-align: center;
				position: absolute;
				top:  50%;
				left: 50%;
				transform: translate(-50%,-50%);
				font-size: 200%;
			}


		</style>



	</head>

	<body id="body">



		<?php

		//Set initial value for message boxes as 'hidden'
		if(!isset($_GET['msgAllCongs'])){
			$_GET['msgAllCongs'] = 'hide';
		}

		
		if(!isset($_GET['msgToJP'])){
			$_GET['msgToJP'] = 'hide';
		}

		if(!isset($_GET['msgToBP'])){
			$_GET['msgToBP'] = 'hide';
		}

		if(!isset($_GET['msgToLV'])){
			$_GET['msgToLV'] = 'hide';
		}



		if(!isset($_GET['msgToPOL'])){
			$_GET['msgToPOL'] = 'hide';
		}


		//HIDE MEETING TIMES IMG
		if(!isset($_GET['BushhillParkMeetingTimeImg'])){
			$_GET['BushhillParkMeetingTimeImg'] = 'hide';
		}

		if(!isset($_GET['LeaValleyMeetingTimes'])){
			$_GET['LeaValleyMeetingTimes'] = 'hide';
		}

		if(!isset($_GET['JubileeParkMeetingTimes'])){
			$_GET['JubileeParkMeetingTimes'] = 'hide';
		}

		if(!isset($_GET['PolishMeetingTimes'])){
			$_GET['PolishMeetingTimes'] = 'hide';
		}



		?>

			
		<header id="main-header">
			<br>
				<h1>Electronic Notice Board</h1>
			<br>
		</header>

		<br>

		<!--* Get the daily text from jw.org *-->

	<nav class="nav-bar">
			<ul>
				<li><a href="#">Home</a>
					<ul>
						<li><a href="#">Restart****</a></li>
					</ul>
				</li>
				
				<li><a href="BushhillPark/bh_home.php" target="_blank">Bush Hill Park</a>
					<ul>
						<li><a href="index.php?BushhillParkMeetingTimeImg=show">Meeting times</a></li>
					</ul>
				</li>

				<li><a href="leavalley/lv_home.php" target="_blank">Lea Valley</a>
					<ul>
						<li><a href="index.php?LeaValleyMeetingTimes=show">Meeting times</a></li>
					</ul>
					<!--https://1drv.ms/f/s!AgXTm78KlNayhXrlarpWSwKTRbjC-->
				</li>

				<li><a href="JubileePark/jp_home.php" target="_blank">Jubilee Park</a>
					<ul>
						<li><a href="index.php?JubileeParkMeetingTimes=show">Meeting times</a></li>
					</ul>
				</li>

				<li><a href="polish/pol_home.php" target="_blank">Polish</a>
					<ul>
						<li><a href="index.php?PolishMeetingTimes=show">Meeting times</a></li>
					</ul>
				</li>

				<li><a href="#">Messages</a>
					<ul>
						<li><a href="index.php?msgAllCongs=show" >All Congregations</a>
						</li>
						<li><a href="index.php?msgToBP=show">Bush Hill Park</a></li>
						<li><a href="index.php?msgToJP=show">Jubilee Park</a></li>
						<li><a href="index.php?msgToLV=show">Lea Valley</a></li>
						<li><a href="index.php?msgToPOL=show">Polish</a></li>
					</ul>
				</li>

				<li><a href="#">Contacts</a>
					<ul>
						<li><a href="#">Kingdom Hall Address</a></li>
						<li><a href="#">Operating Commitee</a></li>
					</ul>
				</li>
				<li><a href="#">About</a>
					<ul>
						<li><a href="#">Electonic Notice</a></li>
						<li><a href="#">Make a suggestion</a></li>
					</ul>
				</li>
			</ul>
	</nav>

<br>


<!--MESSAGE TO ALL CONGREGATIONS-->
<div <?php if ($_GET['msgAllCongs'] == "hide"){echo "class='toggleHide'";}?>>
	<form action="includes/msgAllCongs.inc.php" method='POST'> <!--process the attendance-->
		<h3>Enter message for all congregations: </h3>

		<textarea class="msgAllCongs" rows="4" cols="50" name="contact_list">
		</textarea>


		<input type="submit" name="msgAllCongs" Value="Submit"  />
	</form>

	<form action="index.php" method="Get">
		<input type="hidden" name="msgAllCongs" value="hide" />
		<input type="submit" Value="Cancel"  />
	</form>
</Div>



<!--MESSAGE TO JUBILEE PARK-->
<div <?php if ($_GET['msgToJP'] == "hide"){echo "class='toggleHide'";}?>>
	<form action="includes/msgToJP.inc.php" method='POST'> <!--process the attendance-->
		<h3>Enter message for for Jubilee Park Congregation</h3>

		<textarea class="msgToJP" rows="4" cols="50" name="msg_To_JP">
		</textarea>


		<input type="submit" name="msgToJP" Value="Submit"  />
	</form>

	<form action="index.php" method="Get">
		<input type="hidden" name="msgToJP" value="hide" />
		<input type="submit" Value="Cancel"  />
	</form>
</Div>


<!--MESSAGE TO BUSH HILL PARK-->
<div <?php if ($_GET['msgToBP'] == "hide"){echo "class='toggleHide'";}?>>
	<form action="includes/msgToBP.inc.php" method='POST'> <!--process the attendance-->
		<h3>Enter message for for Bush Hill Park Congregation</h3>

		<textarea class="msgToBP" rows="4" cols="50" name="msg_To_BP">
		</textarea>


		<input type="submit" name="msgToBP" Value="Submit"  />
	</form>

	<form action="index.php" method="Get">
		<input type="hidden" name="msgToBP" value="hide" />
		<input type="submit" Value="Cancel"  />
	</form>
</Div>


<!--//MESSAGE TO LEA VALLEY-->
<div <?php if ($_GET['msgToLV'] == "hide"){echo "class='toggleHide'";}?>>
	<form action="includes/msgToLV.inc.php" method='POST'> <!--process the attendance-->
		<h3>Enter message for for Lea Valley Congregation</h3>

		<textarea class="msgToLV" rows="4" cols="50" name="msg_To_LV">
		</textarea>


		<input type="submit" name="msgToLV" Value="Submit"  />
	</form>

	<form action="index.php" method="Get">
		<input type="hidden" name="msgToLV" value="hide" />
		<input type="submit" Value="Cancel"  />
	</form>
</Div>


<!--MESSAGE TO POLISH CONGREGATION-->
<div <?php if ($_GET['msgToPOL'] == "hide"){echo "class='toggleHide'";}?>>
	<form action="includes/msgToPOL.inc.php" method='POST'> <!--process the attendance-->
		<h3>Enter message for for Bush Hill Park Congregation</h3>

		<textarea class="msgToPOL" rows="4" cols="50" name="msg_To_POL">
		</textarea>


		<input type="submit" name="msgToPOL" Value="Submit"  />
	</form>

	<form action="index.php" method="Get">
		<input type="hidden" name="msgToPOL" value="hide" />
		<input type="submit" Value="Cancel"  />
	</form>
</Div>

<br>
<br>
	<div class="Yeartext">
		<h1>Yeartext 2019</h1>
		<P>
			<h2>
				"Do not be anxious, for I am your God." <br>
				- Isaiah 41:10
			</h2>
		</P>
	</div>



<div class="MeetingTimes">
	<!--//BUSH HILL PARK MEETING TIMES-->
	<div <?php if ($_GET['BushhillParkMeetingTimeImg'] == "hide"){echo "class='toggleHide'";}?>>
		<img src="images/BushHillParkMeetingTimes.jpg">
		<form action="index.php" method="Get">
			<input type="hidden" name="msgAllCongs" value="hide" />
			<input type="submit" Value="Cancel"  />
		</form>
	</Div>

	<!--//LEA VALLEY MEETING TIMES-->
	<div <?php if ($_GET['LeaValleyMeetingTimes'] == "hide"){echo "class='toggleHide'";}?>>
		<img src="images/LeaValleyMeetingTimes.JPG">
		<form action="index.php" method="Get">
			<input type="hidden" name="msgAllCongs" value="hide" />
			<input type="submit" Value="Cancel"  />
		</form>
	</Div>

	<!--//JUBILEE PARK MEETING TIMES-->
	<div <?php if ($_GET['JubileeParkMeetingTimes'] == "hide"){echo "class='toggleHide'";}?>>
		<img src="images/JubileeParkMeetingTimes.JPG">
		<form action="index.php" method="Get">
			<input type="hidden" name="msgAllCongs" value="hide" />
			<input type="submit" Value="Cancel"  />
		</form>
	</Div>

	<!--//POLISH TIMES-->
	<div <?php if ($_GET['PolishMeetingTimes'] == "hide"){echo "class='toggleHide'";}?>>
		<img src="images/PolishMeetingTimes.jpg">
		<form action="index.php" method="Get">
			<input type="hidden" name="msgAllCongs" value="hide" />
			<input type="submit" Value="Cancel"  />
		</form>
	</Div>
</div>

<footer id="main-footer">
	<br>
	<p>Copyright &copy; 2019, Galliard Close Kingdom Hall</p>
</footer>
	</body>
</html>