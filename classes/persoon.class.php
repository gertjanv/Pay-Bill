<?php

class registreer {


	

	private $m_sNaam;
	


	public function __set($p_sProperty, $p_vValue) {
		switch($p_sProperty) {
			case "Naam" :
				$this -> m_sNaam = $p_vValue;
				break;
			
		}
	}

	public function __get($p_sProperty) {
		
		switch($p_sProperty) {
			case "Naam" :
				return ($this -> m_sNaam);
				break;
		
		}
		
	}
	

	
	
	
	
	public function Save() {

		include_once('classes/Connection.php');


		$sql = "INSERT INTO user
				(naam
				) 
				VALUES 
				(
				'" . $link -> real_escape_string($this -> m_sNaam) . "'
				
				);";

	
		if (!$link -> query($sql)) {
			throw new Exception("Fout bij registratie");
		}

	}
	
}
?>