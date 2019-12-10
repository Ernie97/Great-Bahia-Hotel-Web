<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
	  	<meta charset="UTF-8">
	  	<link rel="stylesheet" type="text/css" href="hotel.css"/>
	  	<link rel="stylesheet" type="text/css" href="reserva.css"/>
	  	<title>Great Bahia</title>

	</head>

	<body style = "background-image: url('mar3.jpg'); font-family: Arial";>
 
		<div id="contenedor">

			<?php 
			require("cabecera.php");
			?>

			<div id="contenido" class = topCabecera>
				<h1 class = "tituloPagina" style="font-size: 44px !important">BIENVENIDO A GREAT BAHIA HOTEL</h1>
				<h3 class = "subtituloPagina"> ¡Disfruta de nuestros servicios! </h2><br>

			</div>
			<div class = "navegacion">
				<a href="tipos.php">HABITACIONES PARA TODOS LOS GUSTOS</a></li><br><br>
				<a href="regimen.php">NUESTROS REGIMENES DE ESTANCIA</a></li><br><br>
				
				<?php
				if(isset($_SESSION["reserva"]) and isset($_SESSION["LogIn"])){
	 				if($_SESSION["reserva"] == true and $_SESSION["LogIn"] == true){
						echo "<div id='cancelarReserva' style = 'text-align: center'>";
						echo "<a href = 'cancelarReserva.php'>CANCELA TU RESERVA!</a>";
					}
					else echo "<strong><a href='formularioHabs.php'>HAZ TU RESERVA</a></strong></li><br><br>";
				}
				else echo "<strong><a href='formularioHabs.php'>HAZ TU RESERVA</a></strong></li><br><br>";
				?>
			</div>

		</div> <!-- Fin del contenedor -->

	</body>
</html>