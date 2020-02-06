<?php
	$servidor="elecktonikdesign.c3pjjbmaxpef.us-east-1.rds.amazonaws.com";
	$dbusuario="NhikoHerz";
	$dbpass="taliana123!";
	$dbnombre="location";

	$conex=new mysqli($servidor,$dbusuario,$dbpass,$dbnombre);

	if($conex ->connect_errno>0){

		die("imposible conectarse".$conex ->connect_error);

		
	}
?>

