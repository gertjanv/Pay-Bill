<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "projectmobiele";

mysql_connect($host, $user, $password) or die ('Kan niet verbinden met de database'); 	//Verbinding met database
mysql_select_db($db_name) or die ('Database kan niet worden geselecteerd');		//Selectie database




?>