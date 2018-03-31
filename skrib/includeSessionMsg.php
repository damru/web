<div class="error"><div>
<?php
if(isset($_SESSION['comm']['error'])) { 
	echo $_SESSION['comm']['error'];
	unset($_SESSION['comm']['error']);
}
?>
</div></div>
<div class="valid"><div>
<?php
if(isset($_SESSION['comm']['valid'])) { 
	echo $_SESSION['comm']['valid']; 
	unset($_SESSION['comm']['valid']);
}
?>
</div></div>
<div class="comm"><div>
<?php
if(isset($_SESSION['comm']['valid'])) { 
	echo $_SESSION['comm']['valid']; 
	unset($_SESSION['comm']['valid']);
}
?>
</div></div>