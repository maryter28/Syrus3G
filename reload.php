<!DOCTYPE html>
<html>
  <head>
    <title>Syrus 3G</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <title>Quick Start - Leaflet</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
    
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <link rel="stylesheet" type="text/css" href="Css/background.css">
      
    
    
  </head>
  <body>

       
	
	<div>
        
				<h1><a href="">Las Coordenadas obtenidas Por El Dispositivo SYRUS 3G</a></h1>
            </div>
			<p>La siguiente página Web mostrará los resultados de la geolocalización por medio del dispositivo Syrus para 
				   la obtención de la ubicación en tiempo real de un automóvil. </p>
                <h2><a href="">Posici&oacuten </a></h2>
				
				<p>Aquí se mostrarán las coordenadas de la ubicación de la Syrus 3G.</p>
<div id="mapid" style="width: 100%; height: 400px;"></div>
<script>

	var mymap = L.map('mapid').setView([11.008, -74.83731], 15);

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);
		    	    
</script>

  <div id="seccionRecarga"></div>

</body>
</html>


<script type="text/javascript">
  $(document).ready(function(){
    setInterval(
        function(){
            $('#seccionRecarga').load('index4.php')
        },10000


      );





  });

</script>