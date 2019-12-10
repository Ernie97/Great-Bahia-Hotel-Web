
<?php
require_once "includes/config.php";

class procesarHabitaciones{

	public $listaHabitaciones = array();
	public $listaTipo_hab = array();

	public function getHabitaciones() {
		$app = Aplicacion::getSingleton();
    	$mysqli = $app->conexionBd();
		$i = 0;
		$sql = "SELECT * FROM habitaciones";
		$resultado = $mysqli->query($sql) or die ($mysqli->error. " en la línea ".(__LINE__‐1));

		while($fila = mysqli_fetch_assoc($resultado)) { 
			$this->listaHabitaciones[$i] = $fila;
			$i = $i + 1;
		}

		$sql = "SELECT * from tipohabitacion";
		$resultado = $mysqli->query($sql) or die ($mysqli->error. " en la línea ".(__LINE__‐1));

		$i = 0;
		while($fila = mysqli_fetch_assoc($resultado)) { 
			$this->listaTipo_hab[$i] = $fila;
			$i = $i + 1;
		}


	}
}

?>
