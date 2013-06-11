<?php
include_once('classes/Connection.php');

if(isset($_POST['submitted'])){
	include_once 'classes/Connection.php';
$sql="delete from betaling where x=1";
$sql2="delete from user where x=1";
$sql3="delete from drank where x=1";
$link -> query($sql);
$link -> query($sql2);
$link -> query($sql3);
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
		<div id="wrapper">
			<header>
				<nav>
				</nav>
			</header>
			<img src="images/logo.jpg" alt="logo" id="logoIndex" />
					<div id="contact">
						<a href="lijst.php"><div class="invoegen">Lijst</div></a>
						<div class='pixel'></div>
						<a href="split.php"><div class="invoegen">Split</div></a>
							<div class='pixel'></div>
						<form method="post">	
							<input name="submitted" type="hidden" value="reset" />
							<button class="invoegen2" id="btnLogin">Reset</button>
							
							<!--<div class="button" id="btnLogin">Reset</div>-->
						</form>
				    </div>
				
		
		
	 </div>
		
	</body>		
	
	
</html>
