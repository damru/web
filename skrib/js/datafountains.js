pb_connec = "Problème de connexion...<br />Essayez de rafraichir la page";

if(((window.location.hostname).substr(0,2)=='f.') || ((window.location.hostname).indexOf('skrib')>-1)) {
	HOME = "http://"+window.location.hostname+"";
} else {
	HOME = "http://"+window.location.hostname+"/df";
}
FUNCTIONS=HOME+"/functions.php";

function userLogin(params, callback) {
	var json = '';
	var login = '';
	var password = '';
	var rememberMe = '';
	
	if(params.login)		login = params.login;
	if(params.password)		password = params.password;
	if(params.rememberMe)	rememberMe = params.rememberMe;
	
	json = '';
	json = jsonAdd(json, "verbose", 1);
	json = jsonAdd(json, "login", login);
	json = jsonAdd(json, "password", password);
	json = jsonAdd(json, "rememberMe", rememberMe);

	requete(FUNCTIONS, 'POST', {userLogin: jsonPackage(json)},
		function(retour) {
			//console.log(JSON.stringify(retour));
			if("success" in retour) {
				valid("Connexion en cours");
				setTimeout(function() {
					document.location = HOME;
				}, 1200);
							
			} else {
				error("Identifiants incorrects");
				callback.call(this);
			}
		},
		function(code, text, data) {
			error(pb_connec);
			callback.call(this);
		}
	);
}
function register(params, callback) {
	var ok = new Boolean();
	ok = false;

	var nom = '';
	var prenom = '';
	var email = '';
	var login = '';
	var password = '';
	
	if(params.nom && params.prenom && params.email && params.login && params.password && params.password2) {
		nom = params.nom;
		prenom = params.prenom;
		email = params.email;
		login = params.login;
		password = params.password;
		password2 = params.password2;

		if(password==password2 && isEmail(email)) {
			ok = true;
		} else {
			var msg = "";
			if(password!=password2) {
				msg += "Les mots de passe doivent être identiques";
				callback.call(this);
			}
			if(!isEmail(email)) {
				if(msg!="") msg += "<br />"; 
				msg += "Email invalide";
				callback.call(this);
			}
			error(msg);
			ok = false;
		}
		
	} else {
		error("Veuillez remplir tous les champs");
		callback.call(this);
		ok = false;
	}
	
	if(ok) {
		json = '';
		json = jsonAdd(json, "verbose", 1);
		json = jsonAdd(json, "nom", nom);
		json = jsonAdd(json, "prenom", prenom);
		json = jsonAdd(json, "email", email);
		json = jsonAdd(json, "login", login);
		json = jsonAdd(json, "password", password);
		json = jsonAdd(json, "password2", password2);
	
		requete(FUNCTIONS, 'POST', {register: jsonPackage(json)},
			function(retour) {
				if("success" in retour) {
					document.location = HOME+"/tour";
					valid("Bienvenue chez toi ! Tu peux maintenant écrire ce que tu veux, où que tu sois");
				} else {
					error("L'enregistrement a echoué.<br />Essayez de renvoyer le formulaire");
					callback.call(this);
				}
			},
			function(code, text, data) {
				error(pb_connec);
				callback.call(this);
			}
		);
	}	
}

function getPosition(callback) {
	var retourPosition = new Array();
	var geocoder = new google.maps.Geocoder();
	
	// Try W3C Geolocation (Preferred)
	if(navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
			/* Récupération des coordonnees gps */
			retourPosition.latitude = position.coords.latitude;
			retourPosition.longitude = position.coords.longitude;

			var adresse = new google.maps.LatLng(retourPosition.latitude, retourPosition.longitude);
			geocoder.geocode( { 'latLng': adresse}, function(results, status) {
				if(status==google.maps.GeocoderStatus.OK) {
					callback.call(this, retourPosition, results[0].formatted_address);						
				} else {
					error("Nous ne pouvons pas récupérer votre position actuelle<br />Vérifiez votre connexion internet")
				}
			});
		});
	}	
	// Try Google Gears Geolocation
	else if (google.gears) {
		var geo = google.gears.factory.create('beta.geolocation');
		geo.getCurrentPosition(function(position) {
			/* Récupération des coordonnees gps */
			retourPosition.latitude = position.coords.latitude;
			retourPosition.longitude = position.coords.longitude;

			var adresse = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
			geocoder.geocode( { 'latLng': adresse}, function(results, status) {
				if(status==google.maps.GeocoderStatus.OK) {
					callback.call(this, retourPosition, results[0].formatted_address);						
				} else {
					error("Nous ne pouvons pas récupérer votre position actuelle<br />Vérifiez votre connexion internet")
				}
			});
		});
	}
	// Browser doesn't support Geolocation
	else {    
		error("Votre navigateur ne permet pas la geolocalisation");  
	}	
}
function getMessages(params, callback) {
	var json = '';
	var latitude = '';
	var longitude = '';
	var rayon = '';
	
	if(params.latitude)		latitude = params.latitude;
	if(params.longitude)	longitude = params.longitude;
	if(params.rayon)		rayon = params.rayon;

	json = jsonAdd(json, "verbose", 1);
	json = jsonAdd(json, "latitude", latitude);
	json = jsonAdd(json, "longitude", longitude);
	json = jsonAdd(json, "rayon", rayon);

	requete(FUNCTIONS, 'POST', {getMessages: jsonPackage(json)},
		function(retour) {
			var messages = $("#messages");
			messages.empty();
			if("success" in retour) {
				var msgArray = retour['results'];
				var options = {};
				for(var i=0;i<msgArray.length;i++) {
					var idMessage = msgArray[i]['idMessage'];
					if(i>0) { $("#messages").append('<div class="separator"></div>') }
					$("#messages").append('<div class="message" id="msg'+idMessage+'"></div>');
					$("#msg"+idMessage).append('<div class="msg-content">'+msgArray[i]['body']+'</div>');
					$("#msg"+idMessage).append('<div class="msg-portrait"></div>');
					$("#msg"+idMessage).append('<div class="msg-distance">['+msgArray[i]['distance']+'m]</div>');
					$("#msg"+idMessage).append('<div class="msg-date"><i>'+msgArray[i]['date']+'</i></div>');
					$("#msg"+idMessage).append('<div class="msg-auteur">par '+msgArray[i]['login']+'</div>');
				}
			}
			else if("error" in retour) {
				$("#messages").append('<div">'+retour['error']+'</div>');
			}	
			else {
				error(pb_connec);
			}
			callback.call(this);	
		},
		function(code, text, data) { 
			error(pb_connec);
			callback.call(this);	
		}
	);
}
function saveMessage(params, callback) {
	var json = '';
	var body = '';
	var latitude = '';
	var longitude = '';

	if(params.body)			body = params.body;
	if(params.latitude)		latitude = params.latitude;
	if(params.longitude)	longitude = params.longitude;

	json = '';
	json = jsonAdd(json, "verbose", 1);
	json = jsonAdd(json, "body", body);
	json = jsonAdd(json, "latitude", latitude);
	json = jsonAdd(json, "longitude", longitude);

	requete(FUNCTIONS, 'POST', {saveMessage: jsonPackage(json)},
		function(retour) {
			if("success" in retour) {
				valid("Votre message a bien été déposé");
				callback.call(this, params.position, true);
			} else {
				error("L'envoi du message a echoué<br />Essayez de le renvoyer");
				callback.call(this, params.position, false);
			}
		},
		function(code, text, data) {
			error(pb_connec);
			callback.call(this, params.position, false);
		}
	);
}

function isEmail(field) {
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if((field == undefined) || (field == "") || (!filter.test(field)))
		return false;
	else
		return true;
}
function isUrl(field) {
	var filter = /^([a-zA-Z0-9_\.\-])+$/;
	if((field == undefined) || (field == "") || (!filter.test(field)))
		return false;
	else
		return true;
}

function error(message) {
	$(".error div").html(message);
	$(".error").stop(true,true).fadeIn(1000).delay(1500).fadeOut(1500, function() {
		$(".error div").html("");							
	});;
}
function valid(message) {
	$(".valid div").html(message);
	$(".valid").stop(true,true).fadeIn(1000).delay(1500).fadeOut(1500, function() {
		$(".valid div").html("");							
	});;
}

function htmlspecialchars(ch) {
	ch = ch.replace(/\n/g,"\\n");
	ch = ch.replace(/&/g,"&amp;");
	ch = ch.replace(/\"/g,"&quot;");
	ch = ch.replace(/\'/g,"&#039;");
	ch = ch.replace(/</g,"&lt;");
	ch = ch.replace(/>/g,"&gt;");
	return ch;
}
function requete(api, type, data, okFct, errorFct, debug) {
	var url = api;
	$.ajax({
		url: url,
		data: data,
		type: type,
		timeout : 4500,
		success: function(response) {
			var jsonData;
			try {
				jsonData = $.parseJSON(response);
			}
			catch(err) {
				errorFct.call(this, "0", "Flux JSON invalide", response);
			}
			okFct.call(this, jsonData);
		},
		error: function(request, text, data) {
			errorFct.call(this, request.status, text, data);
		}
	});
}
function jsonAdd(json, fieldName, field) {
	if(field == undefined)
		return json
	else {
		if(isNaN(field))
			field = htmlspecialchars(field);
		return json + '"' + fieldName + '":"' + field + '",';
	}
}
function jsonAddArray(json, fieldName, field) {
	if(field.length > 0)
		field = field.substring(0, field.length - 1);
	if(field == undefined)
		return json
	else
		return json + '"' + fieldName + '":[{' + field + '}],';
}
function jsonPackage(json) {
	if(json.length > 0)
		json = json.substring(0, json.length - 1);
	return '{' + json + '}';
}