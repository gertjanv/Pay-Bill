<?php 
		$sHost = "localhost";
		$sUser = "root";
		$sPassword = "";
		$sDatabase = "projectmobiele";
		$link = @mysqli_connect($sHost, $sUser, $sPassword, $sDatabase) or die("Oop, dbase is gone!");	
?>