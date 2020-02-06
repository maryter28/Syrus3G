
	$(document).ready(function(){
		$('#TABLA').load('tabla.php');
		setInterval(
				function(){
					$('#TABLA').load('tabla.php');
				},1000
			);
	});

	$(document).ready(function(){
		$('#pinicial').load('pinicial.php');
	});

	$(document).ready(function(){
		$('#MAPA').load('mapa.php');
		setInterval(
				function(){
					$('#MAPA').load('mapa.php');
				},1000
			);
	});	

	var polylineH;
	var polylineH2;

	var p = [];
		polylineH = L.polyline(p, {color: 'blue'}).addTo(mymap);
		polylineH2 = L.polyline(p, {color: 'black'}).addTo(mymap);

	polylineH();
	polylineH2();
	

	function polylineH() {
		polylineH.setLatLngs(p);
	}
	function polylineH2() {
		polylineH2.setLatLngs(p);
	}

	function mostrarH() {
		polylineH.setLatLngs(latlngH);
	}
	function mostrarH2() {
		polylineH2.setLatLngs(latlngH2);

	}


	function centrar(){
		mymap.panTo(latlng);
	}


	function polyline() {
	    latlngs.push(latlng);
		var polyline = L.polyline(latlngs, {color: 'red'}).addTo(mymap);
		latlngs2.push(latlng2);
		var polyline2 = L.polyline(latlngs2, {color: 'green'}).addTo(mymap);
	}

	

	function satelite(){
		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
							maxZoom: 18,
							id: 'mapbox.satellite'
						}).addTo(mymap);
	}
	function street(){
		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
							maxZoom: 18,
							id: 'mapbox.streets'
						}).addTo(mymap);
	}


