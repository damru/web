<?php
	require_once("functions.php");
	if(isset($_SESSION['idUser'])) header("location:/");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php
			include_once("includeHead.php");
		?>
		<link href="<?php echo $_CSSURL?>login.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">
			$(document).ready(function() {
				$("#forms").css("overflow","hidden");
				//$("#register_form").css("display","none");
				var s = 0;
				$(".switch").click(function() {
					if(s==0) {
						//$("#register_form").css("display","block");
						$("#forms").animate(
							{height: 630},
							1500,
							'easeOutQuint',
							function() {
								$("#log_register_form").animate(
									{right: 500},
									1200,
									'easeOutBounce',
									function() {
										//$("#log_form").css("display","none");
									}
								);
							}
						);
						s=1;
					} else {
						//$("#log_form").css("display","block");
						$("#log_register_form").animate(
							{right: 0},
							1200,
							'easeOutBounce',
							function() {
								$("#forms").animate(
									{height: 330},
									1500,
									'easeOutQuint',
									function() {

									}
								);
							}
						);
						s=0;
					}
				});
				
				$("#log_submit").click(function() {
					$(".loading:eq(0)").show();
					$("#log_submit").hide();
														
					var login = $("#log_login").val();
					var password = $("#log_password").val();
					var rememberMe = false;
					
					var array = new Array();
					array.login=login;
					array.password=password;
					array.rememberMe=rememberMe;
					userLogin(array, function() {
						$("#log_submit").show();
						$(".loading:eq(0)").hide();
					});
					
					return false;
				});
				
				$("#register_submit").click(function() {
					$(".loading:eq(1)").show();
					$("#register_submit").hide();
					
					var nom = $("#register_nom").val();
					var prenom = $("#register_prenom").val();
					var email = $("#register_email").val();
					var login = $("#register_login").val();
					var password = $("#register_password").val();
					var password2 = $("#register_password2").val();
					
					var array = new Array();
					array.nom = nom;
					array.prenom = prenom;
					array.email = email;
					array.login = login;
					array.password = password;
					array.password2 = password2;

					register(array, function() {
						$("#register_submit").show();
						$(".loading:eq(1)").hide();
					});
					
					return false;
				});
			});
		</script>
		<title>DataFountains</title>
	</head>
	<body>
		<?php include_once("includeSessionMsg.php") ?>
		<div class="body" id="login">
			<?php include_once("includeHeader.php") ?>
			<div id="forms" class="rond10">
				<div id="log_register_form">
					<form method="POST" action="/login" name="log_form" id="log_form">
						<h4>Je me connecte à mon compte</h4>
						<span style="margin-left: 30px">Vous n'avez pas encore de compte ? <a href="#" class="switch">Inscrivez-vous !</a></span>
						<table id="log_table">
							<tbody>
								<tr>
									<td><label for="log_login">Login</label></td>
									<td><input type="text" name="log_login" id="log_login" class="rond10 large" /></td>
								</tr>
								<tr>
									<td><label for="log_password">Mot de Passe</label></td>
									<td><input type="password" name="log_password" id="log_password" class="rond10 large" /></td>
								</tr>
								<tr>
									<td colspan="2"><input type="submit" name="log_submit" id="log_submit" class="blue" value="Connexion" /><div class="loading" style="margin: 15px 0px 0px 55px;" ></div></td>
								</tr>
							</tbody>
						</table>
					</form>
					<form method="POST" action="/tour" name="register_form" id="register_form">
						<h4>Je me crée un nouveau compte</h4>
						<span style="margin-left: 30px">Vous avez déjà un compte ? <a href="#" class="switch">Connectez-vous !</a></span>
						<table id="register_table">
							<tbody>
								<tr>
									<td><label for="register_prenom">Prénom</label></td>
									<td><input type="text" name="register_prenom" id="register_prenom" class="rond10 large" /></td>
								</tr>
								<tr>
									<td><label for="register_nom">Nom</label></td>
									<td><input type="text" name="register_nom" id="register_nom" class="rond10 large" /></td>
								</tr>
								<tr>
									<td><label for="register_email">Adresse email</label></td>
									<td><input type="text" name="register_email" id="register_email" class="rond10 large" /></td>
								</tr>
								<tr>
									<td><label for="register_login">Login</label></td>
									<td><input type="text" name="register_login" id="register_login" class="rond10 large" /></td>
								</tr>							
								<tr>
									<td><label for="register_password">Mot de Passe</label></td>
									<td><input type="password" name="register_password" id="register_password" class="rond10 large" /></td>
								</tr>							
								<tr>
									<td class="td_left"><label for="register_password2">Confirmation du mot de passe</label></td>
									<td><input type="password" name="register_password2" id="register_password2" class="rond10 large" /></td>
								</tr>
								<tr>
									<td colspan="2"><input type="submit" name="register_submit" id="register_submit" class="blue" value="Créer mon compte" onclick="return false;" /><div class="loading" style="margin: 15px 0px 0px 55px;" ></div></td>
								</tr>
							</tbody>
						</table>
					</form>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<?php include_once("includeFooter.php") ?>   
	</body>
</html>