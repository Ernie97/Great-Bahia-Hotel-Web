
<?php
require_once "includes/config.php";

class procesarTipos{

	public $listaTipos = array();

	public function getTipos($modo, $tipo_hab) {
		$app = Aplicacion::getSingleton();
        $mysqli = $app->conexionBd();
		if($modo == '1')
			$sql = "SELECT * from tipohabitacion";
		else $sql = "SELECT * from tipohabitacion where Id_Tipo = '$tipo_hab'";
		$resultado = $mysqli->query($sql) or die ($mysqli->error. " en la línea ".(__LINE__‐1));

		$i = 0;
		while($fila = mysqli_fetch_assoc($resultado)) { 
			$this->listaTipos[$i] = $fila;
			$i = $i + 1;
		}
	}
}

?>
