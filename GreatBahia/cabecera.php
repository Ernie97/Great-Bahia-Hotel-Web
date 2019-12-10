<div id="cabecera">

	<?php
	if (isset($_SESSION["LogIn"]) && ($_SESSION["LogIn"]===true)) {
	?>
	<div>
		<a href="index.php">Great Bahia-->   </a>
		Hola, <?php echo $_SESSION["username"]; ?> 
		<a href='logout.php'>(Salir)</a>	
	</div>

	<?php
	}
	 else {
	?>
	<div>
		<a href="index.php">Great Bahia-->    </a>    Usuario desconocido.<a href='login.php'>Login</a> <a href='registro.php'> Registrarse</a>	</div>
	<?php
	}
	?>
</div>














