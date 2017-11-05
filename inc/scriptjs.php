<script> 

function whenClicked(e) {
	
	$('#tabinfo_contenido').html('');
	sidebar.open('tabinfo');
	
	var propiedades = e.target.feature.properties;

	for (var key in propiedades) {
		// check if the property/key is defined in the object itself, not in parent
		if (propiedades.hasOwnProperty(key)) {           
			$('#tabinfo_contenido').append(key + ' : ' + propiedades[key] + '<br>');
		}
	}
	
}


function onEachFeature(feature, layer) {
    layer.on({
        click: whenClicked
    });
}



	/* map */	
	var map = L.map('map', {
		center: [-34.614279029238546,-58.45138549804687],
		zoom: 12
	});

	
	/* layer basemap */
	L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}.png', {        maxZoom: 18, attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, &copy;        <a href="https://carto.com/attribution">CARTO</a>' }).addTo(map);

	
	/* layer escuelas geojson */
	$.getJSON('escuelas_musica_gcba.geojson', function (geojson) {
	  layerEscuelas = L.geoJson(geojson, {
		
		onEachFeature: onEachFeature,

		style: function (feature) {
			return {
			'weight': 0,
			'fillColor': 'yellow',
			'fillOpacity': 1
			}
		}
		
	  }).addTo(map);
	});

	
	/* sidebar */
	var sidebar = L.control.sidebar('sidebar').addTo(map);	
	sidebar.open('tabhome');

</script>


