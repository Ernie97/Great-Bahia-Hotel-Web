<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	  		<link rel="stylesheet" type="text/css" href="hotel.css" />
	  	<link rel="stylesheet" type="text/css" href="reserva.css" />


	</head>

	<body style="background-image: url('hab.jpg'); background-position: center center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;">

		<?php 
		if($_SESSION["LogIn"] == TRUE){
		?>
		<div>
			<?php
			require("cabecera.php"); 
			?>

		</div>

		 <div class="container" style ="padding-top:400px;">
                        <!-- Reservation form -->
                        <form id="reservation-form" action = "mostrarHabs.php" method ="POST">

                            <div class="col-md-12">
                                <div class="form-inline reservation-horizontal clearfix" style="color: #2d4961; background-color: rgba(255,255,255,0.7); position: absolute; bottom: 20px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div>
                                                <span>Vistas al mar</span>
                                                <select name="vistasMar" class="form-control" style="border: 1px solid #2d4961;">
													<option selected="selected" value="1">Si</option>
													<option value="0">No</option>

												</select>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div>
                                                <span>Fecha de Entrada</span>
                                                <input name="fechaEntrada" type="date" class="form-control date-input" placeholder="Fecha de Entrada" style="border: 1px solid #2d4961;" />
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div>
                                                <span>Fecha de Salida</span>
                                                <input name="fechaSalida" type="date" class="form-control" placeholder="Check-out" style="border: 1px solid #2d4961;" />
                                                
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>
                                                <span>Fumador</span>
                                                <select name="fumador" class="form-control" style="border: 1px solid #2d4961;">
													<option selected="selected" value="1">Si</option>
													<option value="0">No</option>

												</select>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div>
                                                <span >Tipo de habitación</span>
                                                <select name="tipoHabitacion" class="form-control" style="border: 1px solid #2d4961;">
													<option selected="selected" value="1">individual (1 adultos)</option>
													<option value="2">Doble (2 adultos + 1 Ni&#241;o hasta 12 a&#241;os)</option>
													<option value="3">Triple ((2 adultos + 1 Ni&#241;o hasta 12 a&#241;os)</option>
													<option value="4">Suite (2 adultos + 3 Ni&#241;os hasta 12 a&#241;os)</option>
													<option value="5">Suite Nupcial(2 adultoss)</option>
													<option value="6">Familiar (2 adultos + 2 Ni&#241;os hasta 12 a&#241;os)</option>

												</select>
                                           </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>
                                                <span>Regimen de estancia</span>
                                                
                                                <select name="regimenEstancia"class="form-control" style="border: 1px solid #2d4961;">
													<option selected="selected" value="1">Solo alojamiento</option>
													<option value="2">Alojamiento y desayuno</option>
													<option value="3">Media pensión</option>
													<option value="4">Pensión completa</option>
													<option value="5">Todo incluido</option>


												</select>
                                            </div>
                                        </div>
             
                                        <div class="col-sm-2" style="padding-left: 30px; padding-bottom: 20px">
                                        	<button class = "btn  btn-warning btn-block ontop" type="submit" style = "background-color: #5cbcb2; border-color: #5cbcb2;"">RESERVAR</button>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 20px;">
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </form>
	<?php	
	}
	else header("Location: noRegistro.php");
	?>

	</body>
</html>