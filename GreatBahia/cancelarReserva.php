<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Great Bahia</title>
	<link rel="stylesheet" type="text/css" href="hotel.css" />
	<link rel="stylesheet" type="text/css" href="reserva.css" />
</head>

<body style="background-image: url('hab.jpg'); background-position: center center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;">
    <?php 
	require("cabecera.php");
	require("procesarCancelacion.php");
	$cancelacion = new procesarCancelacion();
	if($cancelacion->cancelar()){
		?>
		<div class = "topCabecera">
			<font color = "white">
				<h1 style =" text-align: center">RESERVA CANCELADA CON EXITO</h1>
			</font>

		</div>
		<?php
	}
	else{
		?>
		<div class = "topCabecera">
			<font color = "white">
				<h1 style =" text-align: center">LA RESERVA NO SE PUDO CANCELAR</h1>
			</font>

		</div>
		<?php
	}

	?>
</body>



