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
	?>
    <h1 class = topCabecera style = "text-align: center; color: white">TIENE LAS SIGUIENTES HABITACIONES DISPONIBLES:</h1>
	<?php
	require("procesarReserva.php");
	$habitaciones = new procesarReserva();
	$habitaciones->getHabitaciones();
	$lista_habitaciones = $habitaciones->array_habitaciones;
	$fechaEntrada = $habitaciones->fechaEntrada;
	$fechaSalida = $habitaciones->fechaSalida;
	$regimen = $habitaciones->regimenEstancia;


	for ($i = 0; $i < count($lista_habitaciones); $i++){

		$numero = $lista_habitaciones[$i]['num_habitacion'];
		$tipo =  $lista_habitaciones[$i]['Tipo_habitacion'];
		$vistasMar = $lista_habitaciones[$i]['Vistas_Mar'];
		?>
		<div class = topCabecera>
			<h1 style = "text-align: left; color: white">Habitación nº   <?php echo $numero ?></h1>
			<?php
			echo "<a href = 'alquiler.php?fechaEntrada=$fechaEntrada&fechaSalida=$fechaSalida&numero=$numero&tipo=$tipo&regimen=$regimen&vistasMar=$vistasMar' style= 'color: white'>¡RESERVA YA!</a>"
			?>
		</div><br><br>


		<?php
	}
	?>
</body>



