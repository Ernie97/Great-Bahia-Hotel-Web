<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	  	<link rel="stylesheet" type="text/css" href="hotel.css" />
	  	<link rel="stylesheet" type="text/css" href="reserva.css" />
	  	<title>Great Bahia: Habitaciones</title>
	</head>

	<body>

		
		<div class = "topHabitaciones">
			<?php
				require("cabecera.php"); 
			?>

			<h1 class = "tituloHabitaciones">HABITACIONES PARA TODOS LOS GUSTOS</h1>

		</div>
		<div class = "mostrarHabs">
				<?php 
				require("procesarTipos.php"); 
				$tipos = new procesarTipos();
				$tipos->getTipos('1', null);
				$listaTipos = $tipos->listaTipos;
				if (!empty(current($listaTipos))) {
					for ($i=0; $i < count($listaTipos); $i++) {
						
							$id = $listaTipos[$i]['Id_Tipo'];
							$nombre = $listaTipos[$i]['Nombre'];
						    $descripcion = $listaTipos[$i]['Descripcion'];
						    $precio = $listaTipos[$i]['Precio_Base'];
						    $imagen = $listaTipos[$i]['ImagenTipo'];
					    	?>
					    	<br><br>
					    	<div class = "mostrarTipos"; style="background-image: url( <?php echo $imagen; ?> ); background-position: left; background-repeat: no-repeat;">
					    	<h3 class= "tituloTipo" ><?php echo $nombre; ?> </h3>
					   		 <div class = "infoTipos"> 
							    <br>
						    	<p>Descripcion de la habitacion: <?php echo $descripcion; ?> </p>
						    	<p>Precio de la habitacion (por noche): <?php echo $precio." euros noche."; ?> </p>
						    	<hr>
						    	<br><br>
					    	</div>
					    </div>

				    	
				    <?php	
					}
				} else {
				    echo "<p>No hemos encontrado resultados</p>";
				}
			?>
		

		</div>

	</body>
</html>