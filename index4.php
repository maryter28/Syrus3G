<?php
  include("conexion.php");
  $sql_consulta="SELECT * FROM gps";
  $resultados=$conex ->query($sql_consulta);
?>

 
<?php 
  #header("Refresh:10");
  foreach ($resultados as $fila) {
    $id= array($fila['id']);  

    }
  $max=max($id);
  echo "El maximo es: ".$max."<br />";

  $consulta_datos= "SELECT id,Latitud,Longitud,Hora FROM gps ORDER BY id DESC LIMIT 1"; 
  $resultados_datos=$conex ->query($consulta_datos);
  foreach ($resultados_datos as $fila_dato) {
    $Latitud= $fila_dato['Latitud'];
    $Longitud= $fila_dato['Longitud'];
    $Hora= $fila_dato['Hora'];
  }

  $POST['mi_latitud']=$Latitud;
  $POST['mi_longitud']=$Longitud;
  echo "<script>\n";
  echo "Reg1=".$POST['mi_latitud']."\n";
  echo "Reg2=".$POST['mi_longitud']."\n";
  echo "</script>\n";
  echo "Latitud: ".$Latitud."<br />";
  echo "Longitud: ".$Longitud."<br />";
  echo "Hora: ".$Hora."<br />";

?>

<script>


  var lat=Reg1;//+Math.random()*10;
  var long=Reg2;//+Math.random()*10
	//.bindPopup("<b>Latitud: "+lat+"</b>"+"<br />Longitud: "+long+"</b>").openPopup();
		//			var popup = L.popup();
  mymap.panTo(new L.LatLng(lat, long));
  marker.setLatLng({lat: lat, lng:long})
  .bindPopup("<b>Latitud: "+lat+"</b>"+"<br />Longitud: "+long+"</b>").openPopup();
          var popup = L.popup();




</script>








