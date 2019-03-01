<!DOCTYPE html>
<html>
<head>
	<title>Electronic Notice Board</title>

<style type="text/css">
	.container{
				display:flex;
			}

	.container > div{
		background: #BB8FCE;
		padding: 1em;

		box-shadow: 10px 10px 5px #888888;
	}

	.container > div:nth-child(odd){
		background: #D7BDE2;
	}


	.container{
		display:grid;
		/*grid-template-columns: 30% 30% 30% ;
		grid-column-gap: 1em;
		grid-row-gap: 1em;*/

		

		grid-template-columns: repeat(3, 1fr) ; 
		
		grid-column-gap: 3em;
		grid-row-gap: 3em;
		grid-template-columns: 30% 30% 30%;
		justify-content: space-evenly;	







	}

		.main-header{
				text-align:center;
				background-color:purple;
				opacity: 0.9;
				color:white;
				padding:2px;
				border:2px;
			}


	.sections{
				border:1px #ccc solid;
				padding:5px;
				/*width: 95%;  /* Or whatever */
				height:560px;
			}
	iframe{
		margin:0;
		padding: 0;
		border: none;
		width: 85%;
		height: 85%;

	}


	iframe {
		margin-top: 20px;
		margin-bottom: 30px;
		-moz-border-radius: 12px;
		-webkit-border-radius: 12px;
		border-radius: 12px;
		-moz-box-shadow: 4px 4px 14px #000;
		-webkit-box-shadow: 4px 4px 14px #000;
		box-shadow: 4px 4px 14px #000;
		-moz-transform:rotate(10deg);
		-webkit-transform:rotate(10deg);
		-o-transform:rotate(10deg);
		-ms-transform:rotate(10deg);
		filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=.2);


} 



.Notices-Container div {
	border: 1px #ccc solid;
	padding: 10px;
	box-shadow: 10px 10px 5px #888888;

}

.Notices-Container{
	display: flex;
	justify-content:space-around;
}

.Notices-From-JP{
	background: #D7DF01;
	flex-basis: 45%;
}

.Notices-From-Congrations{
	background: #D0FA58;
	flex-basis: 45%;
}


	.nav-bar{
				display: inline-block;
				width: 100%;
				margin-left: auto;
				margin-right: auto;
				}

</style>

</head>
<body>

<header class="main-header"><h2>Jubilee Park Notices</h2></header>
		<nav class="nav-bar">
			<ul>
				<li><a href="../index.php">Home.....</a></li>
			</ul>
		</nav>
<main>
	
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
		<div class="Notices-From-Congrations">
			<h3>Notices From Congregations</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
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