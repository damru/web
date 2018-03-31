<?php

function ago($time) {	
	global $DEBUG;
	//$DEBUG=true;
	$dateAgo ="";
	
	if($DEBUG) echo "param : ".$time."\n"; 	/* DEBUGGING */
	
	$time = strtotime($time);
	$year = strftime('%d %B %Y',$time) ;
	$month = strftime('%d %B',$time) ;
	$week = strftime('%A à %H:%M',$time) ;
	$yesterday = strftime('Hier à %H:%M', $time);
	$fulltime = strftime('%d %B %Y à %H:%M', $time);
	$delta = time() - $time ;

	if ($DEBUG) echo "time 	: ".$time."\n"; 	/* DEBUGGING */
	if ($DEBUG) echo "system 	: ".time()."\n"; 	/* DEBUGGING */
	if ($DEBUG) echo "delta 	: ".$delta."\n"; 	/* DEBUGGING */
	
	// Today
	if(date('d/m/Y', $time) == date('d/m/Y')) {
		if ($delta <= 10 ) { // <= 10 secondes
			$dateAgo = ' il y a quelques instants';
		} else if ($delta < 60) { // < 1 minute
			$dateAgo = 'il y a ' . floor($delta) . ' secondes';
		} else if ($delta < 120) { // < 2 minutes
			$dateAgo = 'il y a environ une minute';
		} else if ($delta <= (60 * 60)) { // < 60 minutes
			$dateAgo = 'il y a ' . floor($delta / 60) . ' minutes';
		} else if ($delta < (120 * 60)) { // < 2 heures
			$dateAgo = 'il y a environ une heure';		
		} else if ($delta < (24 * 60 * 60)) { // < 1 jour
			$dateAgo = 'il y a ' . floor($delta / 3600) . ' heures';	
		}
	} 
	// Yesterday
	else if( date('d/m/Y', $time) == (date('d/m/Y', (time('d/m/Y') - (24 * 60 * 60)))) ) {
		$dateAgo = $yesterday;
	}
	// Older
	else {
		if ($delta < (5 * 24 * 60 * 60)) { // < 5 jours
			$dateAgo = '' . $week . '';
		} else if ($delta < (12 * 30 * 24 * 60 * 60)) { // < 1 an
			$dateAgo = '' . $month . '';
		} else {
			$dateAgo = '' . $year . '';
		}
	}
	
	if($DEBUG) echo "Retour : ".$dateAgo."\n";
	return $dateAgo;
}

function isEmail($adresse) { 
	global $DEBUG;
	$Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
	if(preg_match($Syntaxe,$adresse)) 
		return true; 
	else 
		return false; 
}
?>