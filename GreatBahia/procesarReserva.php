<?php
require_once "includes/config.php";

	class procesarReserva{

	public $array_habitaciones = array(); 
	public $fechaEntrada;
	public $fechaSalida;
	public $regimenEstancia;

	public function getHabitaciones(){
		$app = Aplicacion::getSingleton();
        $mysqli = $app->conexionBd();
		$vistasMar = $mysqli->real_escape_string($_POST["vistasMar"]);
		$this->fechaEntrada = $mysqli->real_escape_string($_POST["fechaEntrada"]);
		$this->fechaSalida = $mysqli->real_escape_string($_POST["fechaSalida"]);
		$fumador = $mysqli->real_escape_string($_POST["fumador"]);
		$tipoHabitacion = $mysqli->real_escape_string($_POST["tipoHabitacion"]);
		$this->regimenEstancia = $mysqli->real_escape_string($_POST["regimenEstancia"]);


		if(empty($this->fechaEntrada) or empty($this->fechaSalida))
				header("Location: errorReserva.php");

		else{
			$i = 0;
				$sql = "SELECT * FROM habitaciones inner join alquiler on habitaciones.Id_Habitacion= alquiler.Habitacion_Alquilada where  Vistas_Mar  = '$vistasMar' and Fumador = '$fumador' and Tipo_habitacion = '$tipoHabitacion' and alquiler.fechaSalida < '$this->fechaEntrada'";
					 
				$resultReserva = $mysqli->query($sql) or die ($mysqli->error. " en la línea ".(__LINE__‐1));
				$sql = "SELECT  * FROM    habitaciones WHERE   Id_Habitacion NOT IN (SELECT Habitacion_Alquilada FROM alquiler) and Vistas_Mar = '$vistasMar' and Fumador = '$fumador' and Tipo_habitacion = '$tipoHabitacion'";

				$resultLibres = $mysqli->query($sql) or die ($mysqli->error. " en la línea ".(__LINE__‐1));
				if(mysqli_num_rows($resultLibres) == 0 and mysqli_num_rows($resultReserva) == 0){
					header("Location: noHabs.php");

				}
				else{
					while($fila = mysqli_fetch_assoc($resultReserva)) {
						$this->array_habitaciones[$i] = $fila;
						$i = $i + 1;
					}
					while($fila = mysqli_fetch_assoc($resultLibres)) {
						$this->array_habitaciones[$i] = $fila;
						$i = $i + 1;
					}
				}
		}
}

}
?>
