<!DOCTYPE html>
<html>
	<head>
		<title>Electron Notice Board</title>
		<meta name="description" content="Electionic board for Galliard Close Kingdom Hall">
		<meta bane="keywords" content="Based on jw.org information ">

		<style type="text/css">
			

		/*reset all margin and border
		
		*{
			margin:0;
			padding:0;
		}*/
	.container{
				display:flex;
			}


			#main-header{
						text-align:center;
						background-color:SlateBlue;
						color:white;
						/*padding:5px*/

						border: 5px red solid;
						}

			#main-footer{
						text-align:center;
						font-size:18px
						}

			.main-body{display:flex;
						
						border:1px #ccc solid;
						padding: 10px;
						border-radius: 15px;
			}


			.left-sidebar{
						
						border:1px #ccc solid;
						padding: 10px;
						border-radius: 15px;
			}




		</style>

	</head>
	<body>

		<header id="main-header"><h1>Electronic Notice Board</h1></header>
		<section>Main Section
			<article></article>
			<article></article>
		</section>


		<div  class="main-body">
			<div class="left-sidebar">
				<h3>Congregations</h3>
					<div class="nav-bar1">
						<ul>
							<li><a href="#">Bushhill Park</a></li>
							<li><a href="">Lea Valley</a></li>
							<li><a href="jubileepark/jphome.php">Jubilee Park</a></li>
							<li><a href="#">Polish</a></li>

						</ul>
					</div>
			</div>
		</div>
		



		<!--Details section always a calaspable section on the site-->
		<details>	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</details>


		<!--Quotations-->
		<blockquote site="https://jw.org">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>

		<!--abbrivations-->
		<p><cite>Jw.org &copy</cite></p>	

		<footer id="main-footer">
			<p>Copyright &copy; 2019, Galliard Close Kingdom Hall</p>
		</footer>
	</body>
</html>