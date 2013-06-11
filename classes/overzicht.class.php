<?php

class overzicht {

	
	public function Toon() {

		include_once('classes/Connection.php');


		$sql="select beschrijving, prijs from betaling where naam ='". $_GET['naam'] . "';";
		$sq= $link-> query($sql);
		return($sq);

		}

	}
	

	
	
	
	

?>