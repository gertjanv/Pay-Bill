<?php

include_once 'classes/bestelling.class.php';

$o = new bestelling;
$betaal = $o-> ToonBestelling();






//Wis de lijst

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
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		
		<script type="text/javascript">
		
		</script>
		
		
	</head>
	<body>
		<header>
				<nav>
					<div id="titleApp">
				
					<a href="index.php"><p id="log-out">back</p></a>
					<p>split-T-bill</p>
				</div>
				</nav>
			</header>
		<div id="wrapper">
			<div id="Prijs"><u>Prijs</u></div><div id="Naam"><u>Naam</u></div>
			<br />
		<?php
			
			while($Betaal= $betaal->fetch_assoc())
			{
				echo "<div class='prijs'>".$Betaal['sum(prijs)']."</div>";
				echo "<div class='betaal'>".$Betaal['naam']."</div>";
				
				
				echo "<br />";
				
			
			}
			while($Betaal= $betaal->fetch_assoc())
			{
			
			echo $Betaal['sum(prijs)'];
			}
			
		?>
		
		
				
		
		
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
