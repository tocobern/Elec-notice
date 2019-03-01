





<html>
	<link rel="stylesheet" type="text/css" href="styles/themes.css">
	<header>
		<title>Lea Valley view file </title>
	</header>

	<body>
		<br>
		<nav class="nav-bar">
			<ul>
				<li><a href="../index.php">Home</a></li>
			</ul>
			<ul>
				<li><a href="lv_home.php">...Back</a></li>
			</ul>
		</nav>


		<?php
			if (isset($_GET['object'])) {
			    $fileObject = $_GET['object'];
			} else {
			   echo "<embed src=\"docs//$Getanyfile\" alt=\"HTML5 Icon\" style=\"width:500px;height:500px;\"> "; 
			}

			echo "using php";
			echo "<embed src=\"docs//$fileObject \" alt=\"HTML5 Icon\" style=\"width:70%;height:100%;\"> "; 
				
		?>
	</body>	
</html>