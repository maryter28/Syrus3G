
<?php
require "conexion.php";	
	
$consulta="SELECT * FROM Datos WHERE Carro = 1 ORDER BY id DESC LIMIT 1";
$resultado=mysqli_query($conexion,$consulta);
$registro = mysqli_fetch_array($resultado);

$consulta2="SELECT * FROM Datos WHERE Carro= 2 ORDER BY id DESC LIMIT 1";
$resultado2=mysqli_query($conexion,$consulta2);
$registro2 = mysqli_fetch_array($resultado2);

$coord="";

$coord .= "<script>";
$coord .= "var latlng = [ " . $registro['Latitud'] . ", " . $registro['Longitud'] . " ] ;";//$coord .= "var latlng = [ 11.01".rand(0,500) . ", -74.82".rand(0,500) . " ] ;";
$coord .= " mark.setLatLng(latlng);";
$coord .= "var latlng2 = [ " . $registro2['Latitud'] . ", " . $registro2['Longitud'] . " ] ;";
$coord .= " mark2.setLatLng(latlng2);";
$coord .= " polyline()";
$coord .= "</script>";

echo $coord;
echo "



";
mysqli_close($conexion);


?>