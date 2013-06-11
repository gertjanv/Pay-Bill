<?php

class bestelling {

	private $m_sNaam;
	private $m_sDrankje;
	
	public function __set($p_sProperty, $p_vValue) {
		switch($p_sProperty) {
			case "Naam" :
				$this -> m_sNaam = $p_vValue;
				break;
			case "Drankje" :
				$this -> m_sDrankje = $p_vValue;
				break;
			
		}
	}

	public function __get($p_sProperty) {
		
		switch($p_sProperty) {
			case "Naam" :
				return ($this -> m_sNaam);
				break;
			case "Drankje" :
				return ($this -> m_sDrankje);
				break;
		
		}
		
	}
	
	public function Save() {

		include_once('classes/Connection.php');
	
		$prijs="select prijs from drank where drankje='". $link -> real_escape_string($this -> m_sDrankje) . "';";
		
		$result = mysql_query($prijs);
		while($row = mysql_fetch_array($result))
		  {
		  	  $prijs = $row['prijs'];
		  };
		
		$sql = "INSERT INTO betaling
				(naam,
				beschrijving,
				prijs
				) 
				VALUES 
				(
				'" . $link -> real_escape_string($this -> m_sNaam) . "',
				'" . $link -> real_escape_string($this -> m_sDrankje) . "',
				'". $prijs ."'			
				);";

		
	
		if (!$link -> query($sql)) {
			throw new Exception("Fout bij registratie");
		}
	
		
		
	}
	
	
	

	public function ToonBestelling()
	{
		include_once('classes/Connection.php');
		
	
		$s="select naam, sum(prijs) from betaling group by naam";
		
		
		$sq= $link-> query($s);
		return($sq);
		
	}	
	

	
}	
	
	



	

?>