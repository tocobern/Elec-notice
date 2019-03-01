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
		grid-gap: 1em;

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



</style>

</head>
<body>
	<!--<p>hello world</p>-->

	
<!--WORKING CODE. ADD THE <?php...?> 
<div class="container">
	


			/*phpinfo();*/

			/*Get Folder Contents*/
			$dir = "docs/";

			// Open a directory, and read its contents
			if (is_dir($dir)){
					if ($dh = opendir($dir)){
						while (($file = readdir($dh)) !== false){
						
						  /*echo  "filename: " . "<a href=\"https://www.bbc.co.uk\">" . $file . "</a>" . "<br>" ; --EXAMPLE*/ 


						  if (strpos ($file, 'pdf') !== false) {  #check if this is a pdf file
							  echo "<div class=\"sections\">";
							  echo "<iframe src=\"docs\\$file\">";
							  echo "<a href=\"docs\\$file\" target=\"_blank\" >" . $file . "</a>" . "<br>";
							  echo "</iframe>";
		 					  echo "<a href=\"docs\\$file\" target=\"_blank\" >" . $file . "</a>" . "<br>";
							  echo "</div>";

						}
									  
					}
					closedir($dh);
				}
			}

		</p>


</div>
	-->

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

	echo "Files found :" . count($files) . ". Only 12 items displayed!";
	echo "<br>";
	echo "<br>";

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