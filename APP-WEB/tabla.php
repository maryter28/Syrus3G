<?php
require "conexion.php";	
		
$consulta="SELECT * FROM Datos WHERE Carro = 1 ORDER BY id DESC LIMIT 1";
$resultado=mysqli_query($conexion,$consulta);
$registro = mysqli_fetch_array($resultado);
$consulta2="SELECT * FROM Datos WHERE Carro= 2 ORDER BY id DESC LIMIT 1";
$resultado2=mysqli_query($conexion,$consulta2);
$registro2 = mysqli_fetch_array($resultado2);
mysqli_close($conexion);

echo "<table border=\"1\" style=\"text-align:center;\">
	<tr>		
		<td>Carro</td>			
		<td>Latitud</td>			
		<td>Longitud</td>			
		<td>Fecha-Hora</td>
		<td>Km/h</td>
	</tr>
				
	<tr>		
 		<td>" . $registro['Carro'] . "</td>			
		<td>" . $registro['Latitud'] . "</td>			
		<td>" . $registro['Longitud'] . "</td>			
		<td>" . $registro['Fecha'] .  "</td>
		<td>" . $registro['Parametro'] .  "</td>
	</tr>	
	<tr>		
 		<td>" . $registro2['Carro'] . "</td>			
		<td>" . $registro2['Latitud'] . "</td>			
		<td>" . $registro2['Longitud'] . "</td>			
		<td>" . $registro2['Fecha'] . " </td>
		<td> - </td>
	</tr>
 </table>

 

<script>	
	var Parametro = " . $registro['Parametro'] .";
	var Parametro2 = 100 ;
</script>	
 ";		

?>