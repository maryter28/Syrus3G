<?php
$hostname="testdb.cgnwvpmwp6tr.us-east-2.rds.amazonaws.com";
$database="Test";
$username="Test";
$password="password";


$conexion = mysqli_connect($hostname,$username,$password,$database,"3306");

if(mysqli_connect_error())
{
	echo "Error de conexion: " . mysqli_connect_error();

}else{
	echo "Conectado";
}

?>
