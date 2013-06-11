<?php

include_once 'classes/bestelling.class.php';

include_once 'classes/dropdown.class.php';

$result = mysql_query("SELECT naam FROM user");	//Resultaten in variabele steken

$combobox="<select class='invoegenCombo' name='Naam'>\n";
$combobox.="<option value=''>--- Naam ---</option>\n";
while($record=mysql_fetch_array($result)){
	$combobox.="<option value='".$record['naam']."'";	//Geeft het adres mee als waarde
	
	$combobox.=">".$record['naam']."</option>\n";	//Vul de namen in
}

$combobox.="</select>\n";


$res = mysql_query("SELECT drankje FROM drank");	//Resultaten in variabele steken

$combo="<select class='invoegenCombo' name='Drankje'>\n";
$combo.="<option value=''>--- Drankje ---</option>\n";	//Geeft het adres mee als waarde	

while($rec=mysql_fetch_array($res)){
	$combo.="<option value='".$rec['drankje']."'";	//Geeft het adres mee als waarde
	
	$combo.=">".$rec['drankje']."</option>\n";	//Vul de namen in
}

$combo.="</select>\n";


if(!empty($_POST['Naam']))
	{
		$obj_subscriber = new bestelling();
		$obj_subscriber->Naam = $_POST['Naam'];
		$obj_subscriber->Drankje = $_POST['Drankje'];
		
		
		try
		{
			$obj_subscriber->Save();
			
		}
		catch(Exception $e)
		{
			$feedback = $e->getMessage();	
		}	
	}




echo <<< EOPAGE
<!DOCTYPE html>
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
				
					<a href="lijst.php"><p id="log-out">Lijst</p></a>
					<p>split-T-bill</p>
				</div>
				</nav>
			</header>
		<div id="wrapper">
			<br />
			<br />
			<div id="contact">
				
						
					   <form action="" method="post" id="formpadding">
			            		
				        		<label>Naam</label><br />
						         
							    $combobox  
								 <br />       
								<div class='pixel'></div>
								 <br />
				        		<label>Drankje</label><br />
				        		  
								
								$combo
								 <br />
				        		<div class='pixel'></div>
				        		 <br />
				        		  
				       			<input id="btnRegistreer" value="Plaats bestelling" type="submit" class="button" />
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
EOPAGE
?>