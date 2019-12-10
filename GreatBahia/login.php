<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Great Bahia: Login</title>
	<link rel="stylesheet" type="text/css" href="hotel.css" />
	<link rel="stylesheet" type="text/css" href="reserva.css" />
</head>

<body style = "background-image: url('loginImage.jpg'); background-position: center center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;">

	<?php
		require("cabecera.php"); 
	?>

	<div>
	<font color = "white">
		<h1 class = "tituloTipo" font >INTRODUZCA SUS DATOS:</h1>
	</font>
		<form action="procesarLogin.php" method="POST">
			<fieldset>
				<legend>Usuario y contraseña</legend>
				<p><label>Name:</label> <input type="text" name="username" /></p>
				<p><label>Password:</label> <input type="password" name="password" /></p>
				<button type="submit">Entrar</button>
			</fieldset>
		</form>

	</div>

</body>
</html>