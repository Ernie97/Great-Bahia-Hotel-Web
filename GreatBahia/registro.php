<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Great Bahia: Registro</title>
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

  <font color = "white">
    <h1 class = "tituloTipo" font >RELLENE TODOS LOS CAMPOS:</h1>
  </font>

	<div class = "topCabecera">
    <font color = "white">

      <form action="procesarRegistro.php" method="POST">
        NickName:<br><br>
        <input type="text" name="nickname">
        <br><br><br>
        Contraseña:<br><br>
        <input type="password" name="password">
        <br><br><br>
        Nombre Completo:<br><br>
        <input type="text" name="nombre">
        <br><br>
        NIF:<br><br>
        <input type="text" name="nif">
        <br><br><br>
        Nacionalidad:<br><br>
        <input type="text" name="nacionalidad">
        <br><br><br>
        Fecha de nacimiento:<br><br>
        <input type="date" name="birthdate">
        <br><br><br>
        Correo:<br><br>
        <input type="email" name="mail">
        <br><br><br>
        Teléfono:<br><br>
        <input type="number" name="mobile">
        <br><br><br>
        Cuenta Bancaria:<br><br>
        <input type="text" name="cuenta">
        <br><br><br>
        <button type="submit">Registrarse</button>
    </form>
  </font> 


</div>
</body>
</html>
