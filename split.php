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
		function split() {
			    var wtStr =document.form.personen.value;
			    if (!wtStr)
			        wtStr = '0';
			    var htStr = document.form.prijs.value;
			    if (!htStr)
			        htStr = '0';
			    var personen = parseFloat(wtStr);
			    var prijs = parseFloat(htStr);
			    document.form.kosten.value = personen / prijs;
			    
			    if(document.form.kosten.value==Infinity){
			    	 document.form.kosten.value="";
			    }
		}
		
		
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
			<br />
			<br />
			
			<form  name="form" id="form">
				<label>Personen:</label><br />
				<input type="Text" name="personen" size="4" onkeyup="split()" class="invoegenReg" autocomplete="off" />
				<br />
			
				<br />			 				
	 			<label>prijs:</label><br />
				
				<input type="Text" name="prijs" size="4" onkeyup="split()" class="invoegenReg" autocomplete="off"/>
				<br />
				
				<br />
				<p>prijs per persoon:</p>
				
				<input type="Text" name="kosten" id="kosten" size="4" class="invoegenReg" autocomplete="off">     
			<!--	<input type="button" style="font-size: 8pt" value="Calculate" onClick="split()" name="button">-->
			</form>
			
				
				  
					
				
		
		
	 </div>
	<footer id="footer"></footer>	
		
	</body>		
	
	
</html>
