<?php

class drankje {


	

	private $m_sNaam;
	private $m_sPrijs;


	public function __set($p_sProperty, $p_vValue) {
		switch($p_sProperty) {
			case "Naam" :
				$this -> m_sNaam = $p_vValue;
				break;
			case "Prijs" :
				$this -> m_sPrijs = $p_vValue;
				break;
			
		}
	}

	public function __get($p_sProperty) {
		
		switch($p_sProperty) {
			case "Naam" :
				return ($this -> m_sNaam);
				break;
			case "Prijs" :
				return ($this -> m_sPrijs);
				break;
		
		}
		
	}
	

	
	
	
	
	public function Save() {

		include_once('classes/Connection.php');


		$sql = "INSERT INTO drank
				(drankje,
				prijs
				) 
				VALUES 
				(
				'" . $link -> real_escape_string($this -> m_sNaam) . "',
				'" . $link -> real_escape_string($this -> m_sPrijs) . "'
				);";

	
		if (!$link -> query($sql)) {
			throw new Exception("Fout bij registratie");
		}

	}
	
	public function Wis() {

		include_once('classes/Connection.php');


		$sql = "DELETE FROM `drank` WHERE `drankje` = 
				
				'" . $link -> real_escape_string($this -> m_sNaam) . "';";

	
		if (!$link -> query($sql)) {
			throw new Exception("Fout bij registratie");
		}

	}
	
	
	
	
	
}
?>