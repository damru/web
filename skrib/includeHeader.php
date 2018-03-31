<?php
if(isset($_SESSION['idUser'])) { ?>		
<header>
	<div id="menu">
		<ul id="top-menu">
			<li class="lightblue rond20"><a href="<?php echo $_BASEURL?>">Feeds</a></li>
			<li class="lightblue rond20"><a href="<?php echo $_BASEURL?>#">Mes lieux favoris</a></li>
			<li class="lightblue rond20"><a href="<?php echo $_BASEURL?>#">Mon compte</a></li>
			<li class="lightblue rond20"><a href="<?php echo $_BASEURL?>/logout">Déconnexion</a></li>
		</ul>
		<span id="vr"></span>
		<div class="clear"></div>
	</div>
</header>
<?php
 }
?>