<?php



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
						
					        <div  id="splitForm">
					        	<br />
					        	<br />
					      		<label>Personen:</label><br />
					 			<input name="personen" id="val1" type="text" class="invoegenReg" autocomplete="off" placeholder="aantal Personen" /><br />
					 			<br />
					 				
					 			<label>prijs:</label><br />
					 			
					       		<input name="aantal" id="val2" type="text" class="invoegenReg" autocomplete="off" placeholder="prijs"   /><br />
					       		 <br />
					       		 <p>prijst per persoon:</p>
					   		<br />
					   		<input name="aantal" id="total" type="text" class="invoegenReg" autocomplete="off" placeholder="prijs" value="" /><br />
					   
					        </div>
				
					   
					  
				    </div>
					
				
		
		
	 </div>
	<footer id="footer"></footer>	
		
	</body>		
	
	
</html>
