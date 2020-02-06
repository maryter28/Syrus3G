<?php
require "conexion.php";	
	
$consulta="SELECT * FROM Datos WHERE Carro = 1 ORDER BY id DESC LIMIT 1";
$resultado=mysqli_query($conexion,$consulta);
$registro = mysqli_fetch_array($resultado);

$consulta2="SELECT * FROM Datos WHERE Carro = 2 ORDER BY id DESC LIMIT 1";
$resultado2=mysqli_query($conexion,$consulta2);
$registro2 = mysqli_fetch_array($resultado2);
$coord="";

$coord .= "<script>";
$coord .= "var latlngs = [ [" . $registro['Latitud'] . ", " . $registro['Longitud'] . "] ] ;";
$coord .= "var mark = L.marker([" . $registro['Latitud'] . ", " . $registro['Longitud'] . "]).addTo(mymap).bindPopup(\"El Carro 01 Esta aqui\");";
$coord .= "</script>";

$coord .= "<script>";
$coord .= "var latlngs2 = [ [" . $registro2['Latitud'] . ", " . $registro2['Longitud'] . "] ] ;";
$coord .= "var mark2 = L.marker([" . $registro2['Latitud'] . ", " . $registro2['Longitud'] . "]).addTo(mymap).bindPopup(\"El Carro 02 Esta aqui\");";
$coord .= "</script>";


echo $coord;

mysqli_close($conexion);

?>