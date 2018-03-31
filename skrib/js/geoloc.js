var initialLocation;
var geocoder ;
var map ;
var markers ;
var i;

/* Intitialisation des variables */
function initializeMap() {
	i = 0;
	geocoder = new google.maps.Geocoder();
	markers = new Array();
	/* afficher carte du monde par defaut */
	myOptions = {
		zoom: 11,
		panControl : false,
		streetViewControl : false,
		mapTypeControl : false,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	var lat = 48.85;
	var lng = 2.3509870999999976;
	var latLng = new google.maps.LatLng(lat, lng);
	map.setCenter(latLng);
}

/* Récupérer la position (les coordonnées gps) actuelle de l'utilisateur */
function findMe() { 
	$("#findmeBtn").hide();
	$("#loadingFindme").show();
	// Try W3C Geolocation (Preferred)
	if(navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
			/* Récupération des coordonnees gps */
			var adresse = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
			/* Appel au service de geocodage avec les coordonnees en paramètre */
			geocoder.geocode( { 'latLng': adresse}, function(results, status) {refreshDOM(results,status);});
		});
	}	
	// Try Google Gears Geolocation
	else if (google.gears) {
		var geo = google.gears.factory.create('beta.geolocation');
		geo.getCurrentPosition(function(position) {
			/* Récupération des coordonnees gps */
			var adresse = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
			/* Appel au service de geocodage avec les coordonnees en paramètre */
			geocoder.geocode( { 'latLng': adresse}, function(results, status) {refreshDOM(results,status);});
		});
	}
	// Browser doesn't support Geolocation
	else {    
		alert("Votre navigateur ne permet pas la geolocalisation");  
		//alert("Votre navigateur ne supporte pas la geolocalisation.")
	}
}

/* Récupérer l'adresse saisie pour connaitre les coordonnees gps */
function geolocAdresse() {
	/* Récupération de la valeur de l'adresse saisie */
	var adresse = document.getElementById("creaSteAdresse").value;
	/* Appel au service de geocodage avec l'adresse en paramètre */
	geocoder.geocode( { 'address': adresse}, function(results, status) {refreshDOM(results,status);});
}

/* Mettre a jour les informations de geolocalisation */
function refreshDOM(results, status) {	
	/* Si l'adresse a pu être géolocalisée */
	if (status == google.maps.GeocoderStatus.OK) {
		var latLng = results[0].geometry.location;

		/* Mettre a jour la map */
		map.setCenter(latLng); 
		//Affichage du marker
		var marker = new google.maps.Marker({
			map: map,
			position: latLng
		});
		
		// Permet de supprimer le marker précédemment affiché 
		markers.push(marker);
		if(markers.length > 1) markers[(i-1)].setMap(null);
		i++;

		/* Mise a jour des messages */
	
		/* Messages mis a jour */
		
		$("#loadingFindme").hide(); 
		$("#findmeBtn").show();    
	} else { 
		alert("Nous n'avons pas réussi à de déterminer votre position");
		//alert("Le geocodage n\'a pu etre effectue pour la raison suivante: " + status);
	}
}

//--------------------------------------------------//
//--------------------------------------------------//
//--------------------------------------------------//

/* Parcourir le DOM pour récupérer les annonces.
 * Créer un marker par annonce.
 * Ajouter les ecouteurs sur annonce-marker
 */
function initializeMarkers() {
	$(".annonce").each(function() {
		var lat = $(this).attr("latitude");
		var lng = $(this).attr("longitude");
		var idAnnonce = $(this).attr("id");
		var marker = createMarker(lat,lng); //creer un nouveau marker
		
		/* Ajout de la fonction liée a l'annonce */

		$(this).click(eventOnMarker(marker.id));
		/* Ajout de l'écouteur sur le marker correspondant a l'annonce */
		google.maps.event.addListener(marker, 'click', function() {
			eventOnAnnonce(idAnnonce);
		});
	})
}

/* Creer un marker aux coordonnées passées en parametres */
function createMarker(lat,lng) {
	var latLng = new google.maps.LatLng(lat,lng);
	/* Centrer la map sur le marker */
	//map.setCenter(latLng); 

	/* Creation du marker et affichage dans la map */
	var marker = new google.maps.Marker({
		map: map,
		position: latLng,
		id: markers.length,
	});
	/* Ajout du marker a la liste des markers */
	markers.push(marker);
	return marker;
}

/* Clic sur une annonce = action sur le marker correspondant */
function eventOnMarker(indiceMarker) {
	/* centrer la map sur le marker correspondant a l'annonce */
	var marker = markers[indiceMarker];
	map.setCenter(marker.position);
}

/* Clic sur un marker = action sur l'annonce correspondante */
function eventOnAnnonce(idAnnonce) {
	/* Scroll jusqu'a l'annonce correspondante au marker */
	event.preventDefault();
	var target_offset = $("#"+idAnnonce).offset();
	var target_top = target_offset.top;
	$('html, body').animate({scrollTop:target_top}, 500);
}