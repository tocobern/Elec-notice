<!DOCTYPE html>
<html id="html-container">
	<head>
		<title>Electron Notice Board</title>
		<meta name="description" content="Electionic board for Galliard Close Kingdom Hall">
		<meta bane="keywords" content="Based on jw.org information ">

		<link rel="stylesheet" type="text/css" href="styles/style.css">

		<style type="text/css">
			reset all margin and border
			
			*{
				margin:0;
				padding:0;
			}

			/*Sort out footer to stay at bottom*/
								body {
								   margin:0;
								   padding:0;
								   height:95%;
								}
								#html-container {
								   min-height:100%;
								   position:relative;
								}
								#main-header {
								   background:#ff0;
								   padding:10px;
								}
								#body {
								   padding:10px;
								   padding-bottom:60px;   /* Height of the footer */
								}
								#main-footer {
								   position:absolute;
								   bottom:0;
								   width:100%;
								   height:50px;   /* Height of the footer */
								   background:#5b2c6f;
								   opacity: .9;
								   border: 5px;
								   border-color: red;

								}













			body {
				background: url('images/mainImage.jpg') no-repeat;  /*find another way of naming this*/
				background: cover;
				/*font-family: Arial;*/
				color: white;
			}

				#main-header{
				text-align:center;
				background-color:#5b2c6f; /*https://htmlcolorcodes.com/color-chart/ */
				opacity: 0.9;
				color:white;
				padding:2px;
				border:2px;
			}

				#main-footer{
				text-align:center;
				font-size:18px;
				position: absolute;
				margin-top: auto;
			}




			.nav-bar{
				display: inline-block;
				width: 100%;
				margin-left: auto;
				margin-right: auto;
				}

			nav ul {
				margin:0px;
				padding: 0px;
				list-style: none;
				width: 100%;
			}

			nav ul li {
				display: inline;

				float: left;
				width: 200px;
				height: 40px;
				background-color: black;
				opacity: .8;
				line-height: 40px;
				text-align: center;
				font-size: 20px;
				margin-right: 2px;
			}

			nav ul li a{

				text-decoration: none;
				color: white;
			}

			nav ul li a:hover {
				background-color: green;
				display: block;
			}

			nav ul li ul li {
				display: none; 
			}

			nav ul li:hover ul li {
				display: block;
			}
	

		</style>

	</head>

	<body id="body">

		<header id="main-header"><h1>Electronic Notice Board</h1></header>
		<br>

		<!--* Get the daily text from jw.org *-->




		<nav class="nav-bar">
				<ul>
					<li><a href="#">Home</a>
						<ul>
							<li><a href="#">Restart****</a></li>
							<li><a href="https://wol.jw.org/en/wol/h/r1/lp-e" target="_blank">Daily Text</a></li>
							<li><a href="https://www.jw.org" target="_blank">JW.ORG</a></li>
							<li><a href="https://tv.jw.org/#en/home" target="_blank">Broadcasting</a></li>
							<li><a href="https://www.jw.org/en/online-help/jw-library/" target="_blank">Online Library</a></li>
							<li><a href="https://apps.jw.org/ui/E/donate-home.html#/donate" target="_blank">Donations</a></li>
							
						</ul>
					</li>
					
					<li><a href="Bushhillpark/bhp_home.php" target="_blank">Bushhill Park</a>
						<ul>
							<li><a href="https://apps.jw.org/ui/E/meeting-search.html#/?w=404EF664-A512-4D27-9085-E33B767BB358" target="_blank">Meeting times</a></li>
						</ul>
					</li>

					<li><a href="leavalley/lv_home.php" target="_blank">Lea Valley</a>
						<ul>
							<li><a href="https://apps.jw.org/ui/E/meeting-search.html#/?w=208996DC-D50D-4323-BF89-80F0AED0C061" target="_blank">Meeting times</a></li>
						</ul>
					</li>

					<li><a href="JubileePark/jp_home.php" target="_blank">Jubilee Park</a>
						<ul>
							<li><a href="https://apps.jw.org/ui/E/meeting-search.html#/?w=2B560FE2-6916-4A5F-B11D-2E39FEAB070B" target="_blank">Meeting times</a></li>
						</ul>
					</li>

					<li><a href="polish/p_home.php" target="_blank">Polish</a>
						<ul>
							<li><a href="https://apps.jw.org/ui/E/meeting-search.html#/?w=FBA316A4-18E0-4D93-8D26-E5FCCAC5CF7C" target="_blank">Meeting times</a></li>
						</ul>
					</li>

					<li><a href="#">Messages</a>
						<ul>
							<li><a href="#">Operating Commitee</a></li>
							<li><a href="#">All Congregations</a></li>
							<li><a href="#">Bushhill Park</a></li>
							<li><a href="#">Jubilee Park</a></li>
							<li><a href="#">Lea Valley</a></li>
							<li><a href="#">Polish</a></li>
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
					<li><a href="https://jw.org">JW.ORG</a>
					</li>
				</ul>
		</nav>

	<br>
	
		<footer id="main-footer">
			<p>Copyright &copy; 2019, Galliard Close Kingdom Hall</p>
		</footer>
	</body>
</html>