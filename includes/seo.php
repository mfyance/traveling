<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Interconsult">
<meta name="description" content="Interconsult's Website">
<meta name="keywords" content="Interconsult">
<meta name="robots" content="all, index, follow">
<meta name="googlebot" content="all, index, follow">
<meta property="og:title" content="" /> 
<meta property="og:type" content="website" /> 
<meta property="og:url" content="" /> 
<meta property="og:site_name" content="Interconsult" /> 
<meta property="og:image" content="" />
<meta property="og:description" content="" />      	
<meta name="google-site-verification" content="" />
<link href="imagenes/general/favicon.ico" rel="shortcut icon" type="image/x-icon">
<link rel="stylesheet" href="css/general/normalize.css">
<link rel="stylesheet" href="css/general/fuentes.css">
<link rel="stylesheet" href="css/general/myicons.css">
<link rel="stylesheet" href="css/general/icon.effects.css">
<link rel="stylesheet" href="css/general/animate.min.css">
<link rel="stylesheet" href="css/general/estilos.css">
<link rel="stylesheet" href="css/general/bootstrap.css">
<link rel="stylesheet" href="css/general/each.validate.css">
<!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.css" rel="stylesheet"> -->
<script>
	function initialize() {
		var styles = [
		    {
		      stylers: [
		        { "saturation": -100 },
					{ "lightness": 6 }
		      ]
		    },{
		      featureType: "road",
		      elementType: "geometry",
		      stylers: [
		        { lightness: 100 },
		        { visibility: "simplified" }
		      ]
		    },{
		      featureType: "road",
		      elementType: "labels",
		      stylers: [
		        { visibility: "off" }
		      ]
		    }
	  	];
	  	var styledMap = new google.maps.StyledMapType(styles, {name: "Interconsult"});

		// Edit Ubication
		var miUbicacion = new google.maps.LatLng(-12.1284832,-77.0328897);
		// End Edit
	  
	  	var mapOptions = {
			zoom: 16,
			center: miUbicacion,
			scrollwheel: false,
			mapTypeControlOptions: {
				mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
			}
	  	};
	  	var map = new google.maps.Map(document.getElementById('load-gmap'), mapOptions);
	  	
	  	

		var contentString = '<div id="content">'+
			'Interconsult'+
			'</div>'+
			'<h1">Interconsult</h1>'+
			'<div id="bodyContent">'+
			'<p><b>Uluru</b></p>'+
			'</div>'+
			'</div>';

		var infowindow = new google.maps.InfoWindow({
		    content: contentString,
		    Width: 300
		});

		var marker = new google.maps.Marker({
			position: miUbicacion,
			map: map,
			title:"Interconsult",
			icon: 'imagenes/general/place.png',				
			animation: google.maps.Animation.DROP
		});

		google.maps.event.addListener(marker, 'click', function() {
	    	infowindow.open(map,marker);
	  	});


		map.mapTypes.set('map_style', styledMap);
		map.setMapTypeId('map_style');
	}

	function loadGmaps() {
		var script = document.createElement('script');
		script.type = 'text/javascript';
		script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
		  'callback=initialize';
		document.body.appendChild(script);
	}
</script>