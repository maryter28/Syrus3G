<?php

echo "<br> <b> -----> <b>VISUALIZAR POLILINEA:</b></b>  

	<form>
	------  <b>Carro 01:</b> <input type=\"checkbox\" name=\"carro1\" id=\"carro1\" checked >
	------  <b>Carro 02:</b> <input type=\"checkbox\" name=\"carro2\" id=\"carro2\" checked ><br>
	</form><br> ";

require "conexion.php";	

$tiempo1 = $_POST['time'];
$tiempo2 = $_POST['time2'];
$fecha1 = explode(" ", $tiempo1);
$fecha2 = explode(" ", $tiempo2);
$aux = explode("/", $fecha1[0]);
$date1 = $aux[2] . "-" . $aux[0] . "-" . $aux[1];
$aux = explode("/", $fecha2[0]);
$date2 = $aux[2] . "-" . $aux[0] . "-" . $aux[1];
$time = explode(":",$fecha1[1]);
if($time[0] == 12 && $fecha1[2] == 'AM'){
    $time1 = '0:' . $time[1] ;
}elseif($time[0] < 12 && $fecha1[2] == 'PM'){
    $time1 = strval($time[0] + 12).':' . $time[1];
}else{
    $time1 = $fecha1[1];
}
$time = explode(":", $fecha2[1]);
if ($time[0] == 12 && $fecha2[2] == 'AM') {
    $time2 = '0:' . $time[1];
} elseif ($time[0] < 12 && $fecha2[2] == 'PM') {
    $time2 = strval($time[0] + 12) . ':' . $time[1];
} else {
    $time2 = $fecha2[1];
}

$time1=$time1 . ":00";
$time2=$time2 . ":00";

echo "<script>
	var H=[];
	var latlngH = [];
	mostrarH();
	var latlngH2 = [];
	mostrarH2();
</script>
";


echo "<table id='tablaHistoricos' border=\"1\" style=\"text-align:center;\">";
echo "	<tr>";		
echo "		<td>Carro</td>
			<td>Latitud</td>";			
echo "		<td>Longitud</td>";			
echo "		<td>Fecha-Hora</td>";			
echo "		<td>Km/h</td>";			
echo "	</tr>";	

/*$consultaid1="SELECT * FROM Datos WHERE Fecha BETWEEN CAST('$date1' AS DATE) AND CAST('$date2' AS DATE) AND Hora BETWEEN CAST('$time1' AS TIME) AND CAST('$time2' AS TIME) ORDER BY id ASC LIMIT 1 ";
$idinicial=mysqli_query($conexion,$consultaid1);
$inicio = mysqli_fetch_array($idinicial);

$consultaid2="SELECT * FROM Datos WHERE Fecha BETWEEN CAST('$date1' AS DATE) AND CAST('$date2' AS DATE) AND Hora BETWEEN CAST('$time1' AS TIME) AND CAST('$time2' AS TIME) ORDER BY id DESC LIMIT 1 ";
$idfinal=mysqli_query($conexion,$consultaid2);
$fin = mysqli_fetch_array($idfinal);

$a= $inicio['ID'] ;
$b= $fin['ID'] ;*/
$a= $date1." ".$time1 ;
$b= $date2." ".$time2 ;
echo "<br>";
echo $a;
echo "<br>";
echo $b;

$consulta="SELECT * FROM Datos WHERE Fecha BETWEEN '$a' AND '$b' AND Carro = 1 ORDER BY id DESC " ;
$resultado=mysqli_query($conexion,$consulta);

$consulta2="SELECT * FROM Datos WHERE Fecha BETWEEN '$a' AND '$b' AND Carro = 2 ORDER BY id DESC " ;
$resultado2=mysqli_query($conexion,$consulta2);
mysqli_close($conexion);

$long = "long";
$lat = "lat";
$fecha = "fecha";
$carro = "carro";
$RPM = "rpm" ;

$pos = "1";

while($registro = mysqli_fetch_array($resultado)){

    echo "	<tr>";		
    echo '		<td id=' . $carro . $pos . '>'. $registro['Carro'] . '</td>';			
    echo '		<td id=' . $lat . $pos . '>'. $registro['Latitud'] . '</td>';			
    echo '		<td id=' . $long . $pos .'>' . $registro['Longitud'] . '</td>';			
    echo '		<td id=' . $fecha . $pos . '>'. $registro['Fecha'] . '</td>';			
    echo '		<td id=' . $RPM . $pos . '>'. $registro['Parametro'] . '</td>';			
    echo "	</tr>";		
    
    $pos = (string)((int) $pos + 1);	
echo "<script>
		latlngH.push([". $registro['Latitud'] .",". $registro['Longitud'] ."]);
		H.push([". $registro['Latitud'] .",". $registro['Longitud'] ."]);
</script>";

}
while($registro2 = mysqli_fetch_array($resultado2)){

    echo "	<tr>";		
    echo '		<td id=' . $carro . $pos . '>'. $registro2['Carro'] . '</td>';			
    echo '		<td id=' . $lat . $pos . '>'. $registro2['Latitud'] . '</td>';			
    echo '		<td id=' . $long . $pos .'>' . $registro2['Longitud'] . '</td>';			
    echo '		<td id=' . $fecha . $pos . '>'. $registro2['Fecha'] . '</td>';
    echo '		<td id=' . $RPM . $pos . '> - </td>';			
			
    echo "	</tr>";		
    
    $pos = (string)((int) $pos + 1);	
echo "<script>
		latlngH2.push([". $registro2['Latitud'] .",". $registro2['Longitud'] ."]);
		H.push([". $registro2['Latitud'] .",". $registro2['Longitud'] ."]);
</script>";

}

echo "</table>";


?>