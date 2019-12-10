
<?php
require_once "includes/config.php";
class procesarRegimen{

	public $listaRegimen = array();

	public function getRegimen($modo, $tipoRegimen) {
		$app = Aplicacion::getSingleton();
        $mysqli = $app->conexionBd();
		if($modo == '1')
			$sql = "SELECT * from regimen_estancia";
		else $sql = "SELECT * from regimen_estancia where Id_Regimen = '$tipoRegimen'";
		$resultado = $mysqli->query($sql) or die ($mysqli->error. " en la línea ".(__LINE__‐1));

		$i = 0;
		while($fila = mysqli_fetch_assoc($resultado)) { 
			$this->listaRegimen[$i] = $fila;
			$i = $i + 1;
		}
		
	}
}

?>
