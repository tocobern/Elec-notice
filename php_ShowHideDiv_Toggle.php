<!DOCTYPE html>
<html>
<head>
	<title></title>


	<style type="text/css">
		.toggleHide{
			display: none;
		}

	</style>

</head>
<body>


	<?php
		session_start();
		if(isset($_SESSION['option'])){
			
			if($_SESSION['option'] =="hide"){
				$_SESSION['option'] = "show";

				$toggle = $_SESSION['option'];
				echo $toggle;

			}else{
				$_SESSION['option'] = "hide";

				$toggle = $_SESSION['option'];
				echo $toggle;
			}
		}else
		{
			$_SESSION['option'] = "hide";
		}

	?>


	<div
		<?php 
			if ($_SESSION['option'] == "hide"){echo "style='display:none;";}
		?>
	>
		
		<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</P>

	</div>

	<Br/>
	
	<div
		<?php 
			if ($_SESSION['option'] == "hide"){echo "class='toggleHide'";}
		?>

	>
		
		<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</P>

	</div>


	<form action="php_ShowHideDiv_Toggle.php" method="post">
		<input type="submit" name="someAction" value="GO" />
	</form>
</body>
</html>