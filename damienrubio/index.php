<?php
$CURRENT_URL="http://".$_SERVER["HTTP_HOST"];
	
function scanDirectory($Directory){
	$MyDirectory = opendir($Directory) or die('Erreur');
	$results = array();
	while($Entry = @readdir($MyDirectory)) {
		if(is_dir($Directory.'/'.$Entry)&& $Entry != '.' && $Entry != '..') {
			ScanDirectory($Directory.'/'.$Entry);
		}
		else {
			if($Entry != "." && $Entry != "..") $results[]=$Entry;
		}
	}
	closedir($MyDirectory);
	return $results;
}

$bgDirectory="./backgrounds";
$backgrounds=scanDirectory($bgDirectory);
$i = rand(0, count($backgrounds)-1); // generate random number size of the array
$selectedBg[] = "$backgrounds[$i]";
array_splice($backgrounds,$i,1);
$i = rand(0, count($backgrounds)-1); // generate random number size of the array
$selectedBg[] = "$backgrounds[$i]";
array_splice($backgrounds,$i,1);
$i = rand(0, count($backgrounds)-1); // generate random number size of the array
$selectedBg[] = "$backgrounds[$i]";
$i=0;
?>
<html>
<head>
	<title>Damien Rubio</title>
	<link rel="stylesheet" href="reset.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
	<style type="text/css">
		div#ece{
			background: #BDBDBD url(<?php echo "$bgDirectory/$selectedBg[$i]";$i++;?>) no-repeat center fixed; 
			-webkit-background-size: cover; /* pour Chrome et Safari */
			-moz-background-size: cover; /* pour Firefox */
			-o-background-size: cover; /* pour Opera */
			background-size: cover; /* version standardisée */
		}
		div#skrib{
			background: #e7dbcd url(<?php echo "img/soon.png";?>) no-repeat center fixed;
			-webkit-background-size: cover; /* pour Chrome et Safari */
			-moz-background-size: cover; /* pour Firefox */
			-o-background-size: cover; /* pour Opera */
			background-size: cover; /* version standardisée */
		}
		div#plex{
			background: #404040 url(<?php echo "$bgDirectory/$selectedBg[$i]";$i++;?>) no-repeat center fixed; 
			-webkit-background-size: cover; /* pour Chrome et Safari */
			-moz-background-size: cover; /* pour Firefox */
			-o-background-size: cover; /* pour Opera */
			background-size: cover; /* version standardisée */
		}
	</style>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>		
	<script type="text/javascript" src="js/jquery-ui-1.8.12.custom.min.js"></script>		
	<script type="text/javascript">
		$(document).ready(function() {
			$(function() {
				$('nav a').bind('click',function(event){
					var $anchor = $(this);
					/* remove active classe from all nav links */
					$('nav a').removeClass("active");
					/* add active classe to clicked nav link*/
					$anchor.addClass("active");
					$('html, body').stop().animate({
						scrollLeft: $($anchor.attr('href')).offset().left
					}, 1500,'easeInOutExpo');
					/*
					if you don't want to use the easing effects:
					$('html, body').stop().animate({
						scrollTop: $($anchor.attr('href')).offset().top
					}, 1000);
					*/
					/* prevent click on link */
					event.preventDefault();
				});
			});
			/* 
			keep header and footer on the screen when scrolling horizontally 
			*/
			$(window).scroll(function(){
				$('header,nav,footer').css({
					'left': $(this).scrollLeft() + 0 //keep 0 for margin left
				});
			});
		});
	</script>
</head>
<body>
	<header>
		<div id="header">
			<a href="<?php echo $CURRENT_URL?>/cv/">@damienrubio</a>
		</div>
	</header>
	<nav>
		<div id="navbar">
			<ul id="top-menu">
				<li><a href="#plex">Plex</a></li>
				<li><a href="#skrib">Skrib.me</a></li>
				<li><a href="#ece">ECE</a></li>
			</ul>
		</div>
	</nav>
	<div id="page">
		<div class="section" id="plex">
			<div id="pushtop"></div>
			<div id="page-content">
				<a href="<?php echo $CURRENT_URL?>:32400/web/">Plex Multimedia</a>
			</div>
			<div id="pushbottom"></div>
		</div>
		<div class="section" id="skrib">
			<div id="pushtop"></div>
			<div id="page-content">
				<a href="http://www.skrib.me/">skrib.me</a>
			</div>
			<div id="pushbottom"></div>
		</div>
		<div class="section" id="ece">
			<div id="pushtop"></div>
			<div id="page-content">
				<a href="http://www.ece.Fr/~drubio/">ECE</a>
			</div>
			<div id="pushbottom"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	<footer>
		<div id="footer">
		</div>
	</footer>
</body>
</html>
