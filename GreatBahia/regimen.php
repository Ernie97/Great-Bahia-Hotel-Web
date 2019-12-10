<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	  	<link rel="stylesheet" type="text/css" href="hotel.css" />
	  	<link rel="stylesheet" type="text/css" href="reserva.css" />
	  	<title>Great Bahia: Regimen</title>
	</head>

	<body>

		<div class = "topHabitaciones">
			<?php
			require("cabecera.php"); 
			?>
			<h1 class = "tituloHabitaciones">NUESTROS REGIMENES DE ESTANCIA</h1>

		</div>
		<div class = "mostrarHabs">
				<?php 
				require("procesarRegimen.php"); 
				$tipos = new procesarRegimen();
				$tipos->getRegimen('1', null);
				$listaRegimen = $tipos->listaRegimen;
				if (!empty(current($listaRegimen))) {
					for ($i=0; $i < count($listaRegimen); $i++) {
						
							$id = $listaRegimen[$i]['Id_Regimen'];
							$nombre = $listaRegimen[$i]['NombreRegimen'];
						    $descripcion = $listaRegimen[$i]['Descripcion'];
						    $precio = $listaRegimen[$i]['Precio_extra'];
						    $imagen = $listaRegimen[$i]['ImagenRegimen'];
					    	?>
					    	<br><br>
					    	<div class = "mostrarTipos"; style="background-image: url( <?php echo $imagen; ?> ); background-position: left; background-repeat: no-repeat;">
					    	<h3 class= "tituloTipo" ><?php echo $nombre; ?> </h3>
					   		 <div class = "infoTipos"> 
							    <br>
						    	<p>Descripcion: <?php echo $descripcion; ?> </p>
						    	<p>Precio extra (por noche): <?php echo $precio." euros noche."; ?> </p>
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