<?php include("env.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>		
		<meta name="designer" content="DR">
		<meta name="description" content="Skrib, read nearby">
		<meta name="keywords" content="location,geolocation,network,skrib,nearby,around,autour,social,messages,message">
		<meta name="copyright" content="DR">
		<link rel="shortcut icon" href="<?php echo $_BASEURL?>/favicon.ico" />
		<link href="<?php echo $_CSSURL?>reset.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $_CSSURL?>soon.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript" src="<?php echo $_JSURL?>jquery-color.js"></script>
		<script type="text/javascript" src="<?php echo $_JSURL?>soon.js"></script>
		<title>skrib</title>
	</head>
	<body>
		<div id="changecolor">
			<div id="topicon"></div>
			<div id="panel-color">
				<h1 id="panel-color-title">logo</h1>
				<a style="background-color:#22beeb;" class="soon-img-mini" id="blue" href="#blue"></a>
				<a style="background-color:#ea7f20;" class="soon-img-mini" id="orange" href="#orange"></a>
				<a style="background-color:#e14746;" class="soon-img-mini" id="red" href="#red"></a>
				<a style="background-color:#74d72c;" class="soon-img-mini" id="green" href="#green"></a>
				<a style="background-color:#b047e1;" class="soon-img-mini" id="purple" href="#purple"></a>
				<a style="background-color:#ebd622;" class="soon-img-mini" id="yellow" href="#yellow"></a>
				<a style="background-color:#bebebe;" class="soon-img-mini" id="grey" href="#grey"></a>
			</div>
			<div id="panel-bgcolor">
				<h1 id="panel-bgcolor-title">thème</h1>
				<a style="background-color:#e7dbcd" class="soon-img-mini" id="light" href="#light"></a>
				<a style="background-color:#2d2d2d" class="soon-img-mini" id="dark" href="#dark"></a>
			</div>
		</div>
		
		<div id="changecolor2">
			<div id="panel-color2">
				<h1 id="panel-color-title">logo</h1>
				<a style="background-color:#22beeb;" class="soon-img-mini" id="blue" href="#blue"></a>
				<a style="background-color:#ea7f20;" class="soon-img-mini" id="orange" href="#orange"></a>
				<a style="background-color:#e14746;" class="soon-img-mini" id="red" href="#red"></a>
				<a style="background-color:#74d72c;" class="soon-img-mini" id="green" href="#green"></a>
				<a style="background-color:#b047e1;" class="soon-img-mini" id="purple" href="#purple"></a>
				<a style="background-color:#ebd622;" class="soon-img-mini" id="yellow" href="#yellow"></a>
				<a style="background-color:#bebebe;" class="soon-img-mini" id="grey" href="#grey"></a>
			</div>
			<div id="panel-bgcolor2">
				<h1 id="panel-bgcolor-title">thème</h1>
				<a style="background-color:#e7dbcd" class="soon-img-mini" id="light" href="#light"></a>
				<a style="background-color:#2d2d2d" class="soon-img-mini" id="dark" href="#dark"></a>
			</div>
		</div>
		<div id="main">
			<img class="soon-img" id="logotmp" src="" />
			<img class="soon-img" id="logoimg" src="<?php echo $_BASEURL?>/img/soon-red.png" />
		</div>
	</body>
</html>