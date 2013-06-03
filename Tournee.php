<?php

include_once 'classes/tournee.class.php';

//$feedback = "Gelieve u te registeren.";
if(!empty($_POST['Naam']))
	{
		$obj_subscriber = new tournee();
		$obj_subscriber->Naam = $_POST['Naam'];
		$obj_subscriber->Prijs = $_POST['Prijs'];
		
		
		try
		{
			$obj_subscriber->Save();
			
		}
		catch(Exception $e)
		{
			$feedback = $e->getMessage();	
		}	
	}


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
					<p>split-T-Bill</p>
				</div>
				</nav>
			</header>
		<div id="wrapper">
			
			<div id="contact">
					<div><?php $feedback ?></div>
						
					   <form action="" method="post" id="formpadding">
			            		
				        		<label>Naam</label><br />
				        		<input name="Naam" type="text" placeholder="Naam" class="invoegenReg" autocomplete="off" /><br />
				        		<div class='pixel'></div>
				        		<label>Prijs Tournee</label><br />
				        		<input name="Prijs" type="text" placeholder="Prijs" class="invoegenReg" autocomplete="off" /><br />
				        		<div class='pixel'></div>
				       			<input id="btnRegistreer" value="zet er 1" type="submit" class="button" />
			        		</form>	  
				    </div>
					
				
		
		
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
