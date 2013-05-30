<?php

/*
include_once 'classes/registreer.class.php';

//$feedback = "Gelieve u te registeren.";
if(!empty($_POST['Naam']) && !empty($_POST['Voornaam']) && !empty($_POST['Email']) && !empty($_POST['Paswoord']))
	{
		$obj_subscriber = new registreer();
		$obj_subscriber->Naam = $_POST['Naam'];
		
		
		try
		{
			$obj_subscriber->Save();
			
		}
		catch(Exception $e)
		{
			$feedback = $e->getMessage();	
		}	
	}
*/
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
				
		
		
			</header>
			<nav>
				</nav>
				
					<!--		<div id="feedback"><?php echo $feedback ?></div> -->
							<form action="" method="post" id="formpadding">
			            		
				        	
				       			<input name="Naam" type="text" placeholder="Naam" class="invoegenReg" autocomplete="off" /><br />
				       			<div class='pixel'></div>
				       			
				       		
				       			<input id="btnRegistreer" value="Voegpersoon toe" type="submit" class="button" />
			        		</form>
				  
			
		
		
		
	
	</div>
	</body>
		
</html>
