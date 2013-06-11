<?php

if(isset($_POST['submitted'])){
	include_once 'classes/Connection.php';
$sql="delete from betaling where x=1";

$link -> query($sql);

};	


?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>index</title>
		<meta name="description" content="" />
		<meta name="author" content="User" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<link rel="stylesheet" type="text/css" href="css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="css/stijl.css"/>
		
	</head>
	<body>
		<header>
				<nav>
					<div id="titleApp">
				
					<a href="lijst.php"><p id="log-out">Lijst</p></a>
					<p>split-T-bill</p>
				</div>
				</nav>
			</header>
			<div id="wrapper">
				<br />
				<br />
				<div>
					Wenst u lijst te wissen?
					<br />
					<br />
				</div>
						<form method="post">	
							<input name="submitted" type="hidden" value="reset" />
							<button class="invoegen2" id="btnLogin">Reset</button>
							
							<!--<div class="button" id="btnLogin">Reset</div>-->
						</form>
				   
				
			</div>
		<footer id="footer">
			<a href="Drankje.php"><img src="images/pint.png" /></a>
			<a href="Persoon.php"><img src="images/ventje.png" /></a>
			<a href="Bestelling.php"><img src="images/kaartje.png" /></a>
			<a href="Tournee.php"><img src="images/tournee.png" /></a>
			<a href="Wijzig.php"><img src="images/wijzig.png" /></a>
		</footer>	
	
		
	</body>		
	
	
</html>
