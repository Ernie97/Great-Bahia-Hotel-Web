<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<!--<link rel="stylesheet" type="text/css" href="estilo.css" />-->
	<meta charset="utf-8">
	<title>Great Bahia: Reserva</title>
	<link rel="stylesheet" type="text/css" href="hotel.css" />
	<link rel="stylesheet" type="text/css" href="reserva.css" />
</head>

<body style="background-image: url('hab.jpg'); background-position: center center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;">

	<?php
	
	require("cabecera.php");
	$vistasMar = $_GET['vistasMar'];
	$numero = $_GET['numero'];
	$fechaEntrada = $_GET['fechaEntrada'];
	$fechaSalida = $_GET['fechaSalida'];
	$fecha1 = new DateTime($fechaEntrada);
	$fecha2 = new DateTime($fechaSalida);
	$interval = date_diff($fecha1, $fecha2);
	$numDias = $interval->format('%R%a días');
	$tipo = $_GET['tipo'];
	$regimen = $_GET['regimen'];
	require("procesarAlquiler.php");
	$alquiler = new procesarAlquiler($fechaEntrada, $fechaSalida, $numero, $regimen, $tipo, $vistasMar);
	$alquiler->addAlquiler();
	$precio = $alquiler->precio;
	$precioTotal = $precio * $numDias['1'];


	?>
	<div class = "tituloTipo">
		<h1 style ="text-align: center">TODO LISTO!</h1><br>
		<h3 style ="text-align: center"> HA RESERVADO LA HABITACIÓN Nº <?php echo $numero ?></h3>
		<h3 style ="text-align: center"> DEL DIA <?php echo $fechaEntrada."    "?></h3>
		<h3 style ="text-align: center"> AL DIA <?php echo $fechaSalida ?></h3>
		<h3 style ="text-align: center"> CON UN IMPORTE DE <?php echo $precioTotal ?> EUROS</h3>
		<h1 style ="text-align: center"> GRACIAS POR SU CONFIANZA</h3><br>
	</h1>

</body>
</html>