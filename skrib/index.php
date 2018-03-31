<?php
	require_once("functions.php");
	userLogged();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php
			include_once("includeHead.php");
		?>
		
		<link href="<?php echo $_CSSURL?>index.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $_CSSURL?>message.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $_CSSURL?>formMessage.css" rel="stylesheet" type="text/css" />

		<!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> -->
		<!-- <script type="text/javascript" src="http://code.google.com/apis/gears/gears_init.js"></script> -->
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyD7QMC46IE8sKhQp-CeLxxYEec3USh6rWQ" type="text/javascript" ></script>
		<script type="text/javascript">
			$(document).ready(function() {
				myPosition = new Array();
				rayon = '';
				
				$("#post_message_submit").attr('disabled','disabled');

				$("#message_body").click(function() {
					$("#message_body").css('height', '4em');
				});
				$("#message_body").keyup(function() {
					if($("#message_body").val() == "")	{
						$("#post_message_submit").attr('disabled','disabled');
					}else {
						$("#post_message_submit").removeAttr('disabled');						
					}
				});
				$("#message_body").focusout(function() {
					if($("#message_body").val() == "")	{
						$("#message_body").css('height', '40px');
						$("#post_message_submit").attr('disabled','disabled');
					} else {
						$("#post_message_submit").removeAttr('disabled');						
					}
				});
				
				//Chargement : recuperer les messages
				$("#rayon").attr("disabled","disabled");
				rayon = <?= $_SESSION['userInfos']['rayon']?>;
				$(".loading:eq(0)").show();
				$("#updatePosition").hide();
				
				getPosition(function(position,formatted_address) {
					rayon = $("#rayon").val();
					rayon = rayon.substr(0,rayon.length-1);
					position.rayon = rayon;
					$("#adresse").html("("+formatted_address+")");
					myPosition.latitude = position.latitude;
					myPosition.longitude = position.longitude;
					myPosition.rayon = position.rayon;
					getMessages(position, function() {
						$("#updatePosition").show();						
						$(".loading:eq(0)").hide();
					});
				});

				//Evenement sur le slider
				$( "#slider" ).slider({
					range: "min",
					value: rayon,
					min: 1,
					max: 5000,
					slide: function( event, ui ) {
						$( "#rayon" ).val( ui.value + "m");
					},
					stop:  function() {
						$(".loading:eq(0)").show();
						$("#updatePosition").hide();

						rayon = $("#rayon").val();
						rayon = rayon.substr(0,rayon.length-1);
						myPosition.rayon = rayon;
						getMessages(myPosition, function() {
							$("#updatePosition").show();
							$(".loading:eq(0)").hide();
						});
					}
				});
				$( "#rayon" ).val( $( "#slider" ).slider( "value" ) + "m");
				
				//Clic sur le bouton refresh : rafraichir la position
				$("#updatePosition").click(function() {
					$("#updatePosition").hide();
					$(".loading:eq(0)").show();
					getPosition(function(position, formatted_address) {
						rayon = $("#rayon").val();
						rayon = rayon.substr(0,rayon.length-1);
						position.rayon = rayon;
						$("#adresse").html("("+formatted_address+")");
						myPosition.latitude = position.latitude;
						myPosition.longitude = position.longitude;
						myPosition.rayon = position.rayon;
						getMessages(position, function() {
							$("#updatePosition").show();
							$(".loading:eq(0)").hide();
						});
					});
					return false;
				});
				
				//Envoyer un message
				$("#post_message_submit").click(function() {
					$("#post_message_submit").hide();
					$(".loading:eq(1)").show();
					rayon = $("#rayon").val();
					rayon = rayon.substr(0,rayon.length-1);
					myPosition.rayon = rayon;
					var message = new Array();
					message.position = myPosition;
					message.latitude = myPosition.latitude;
					message.longitude = myPosition.longitude;
					message.body = $("#message_body").val();
					saveMessage(message, function(position, success) {
						$("#message_body").val("");
						$("#message_body").css('height', '40px');
						$("#post_message_submit").show();
						$(".loading:eq(1)").hide();
						$(".loading:eq(0)").show();
						$("#updatePosition").hide();
						if(success) {
							getMessages(myPosition, function() {
								$("#updatePosition").show();
								$(".loading:eq(0)").hide();
								$("#post_message_submit").attr('disabled','disabled');
							});	
						}
					});
					return false;
				});
			});
		</script>
		<title>DataFountains</title>
	</head>
	<body><?php include_once("includeSessionMsg.php"); ?>
		<div class="body" id="all_messages">
			<?php include_once("includeHeader.php"); ?>
			<div class="unbody rond10">  
				<div style="float: right; padding: 10px;"><img src="img/soon-red.png" style="width: 300px;" /></div>
				<div id="recherche_messages">
					<form method="POST" name="recherche_messages_form" id="recherche_messages_form" action="/" name="">
						<div style="text-align:center;">
							<label for="rayon" id="rayon_label">Proximité </label><input type="text" id="rayon" name="rayon" />
							<div id="adresse"></div>
						</div>
						<div id="slider">
							<input type="submit" class="withslider lightblue rond20" name="updatePosition" id="updatePosition" value="" style="padding: 9px 14px; margin: 7px 0px 0px 482px;"/>
							<div class="loading withslider" style="margin: 15px 0px 0px 490px;"></div>
						</div>
					</form>
				</div>
				<div id="post_message">
					<form name="postMessage_form" id="post_message_form" method="POST" action="/">
						<textarea name="message_body" id="message_body" class="rond10 large"></textarea>
						<input type="submit" class="blue" name="post_message_submit" id="post_message_submit" value="Drop"/>
						<div class="loading" style="margin: 15px 0px 0px 35px;"></div>
					</form>
				</div>
				<div id="messages"></div>
				<!--	<div id="map_canvas" style="position:absolute; top:100px; margin-left: 400px; width: 200px; height: 300px;"></div>	-->
				<div class="clear"></div>
			</div>
		</div>
		<?php include_once("includeFooter.php") ?>   
	</body>
</html>