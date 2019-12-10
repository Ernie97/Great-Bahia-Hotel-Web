
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<!--<link rel="stylesheet" type="text/css" href="estilo.css" />-->
	<meta charset="utf-8">
	<title>GREAT BAHIA</title>
	<link rel="stylesheet" type="text/css" href="hotel.css" />
	<link rel="stylesheet" type="text/css" href="reserva.css" />
</head>

<body style="background-image: url('hab.jpg'); background-position: center center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;">


	<?php 
		require("cabecera.php");
	?>

	<div class = "topCabecera">
		<font color = "white">
			<h1 style =" text-align: center">HA OCURRIDO UN ERROR</h1>
			<a href = 'formularioHabs.php'>RESERVA DE NUEVO</a>
		</font>

	</div>


</body>
</html>