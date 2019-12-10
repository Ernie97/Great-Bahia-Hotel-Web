<?php
require_once "includes/config.php";

	class procesarAlquiler{

	public $fechaEntrada;
	public $fechaSalida;
	public $habitacion_Alquilada;
	public $tipo_hab;
	public $tipoPension;
	public $id_huesped;
	public $vistasMar;
	public $precio;

	function __construct($fechaEntrada, $fechaSalida, $Habitacion_Alquilada, $TipoPension, $tipo_hab, $vistasMar) {
    	$this->fechaEntrada = $fechaEntrada;
    	$this->fechaSalida = $fechaSalida;
    	$this->habitacion_Alquilada = $Habitacion_Alquilada;
    	$this->tipoPension = $TipoPension;
    	$this->id_huesped = $_SESSION['Id_user'];
    	$this->tipo_hab = $tipo_hab;
    	$this->vistasMar = $vistasMar;


   	}

   	public function getPrecioRegimen(){
   		require("procesarRegimen.php");
   		$regimen = new procesarRegimen();
   		$regimen->getRegimen('0', $this->tipoPension);
   		return $regimen->listaRegimen['0']['Precio_extra'];
		
   	}

   	   	public function getPrecioHabitacion(){
   		require("procesarTipos.php");
   		$tipo = new procesarTipos();
   		$tipo->getTipos('0', $this->tipo_hab);
   		$precioTotal = $tipo->listaTipos;
   		$precioTotal = $precioTotal['0']['Precio_Base'];
   		if($this->vistasMar == '1') $precioTotal = $precioTotal + 50;
   		return $precioTotal;
		
   	}

   	public function getPrecioTotal(){
   		return $this->precio = $this->getPrecioRegimen() + $this->getPrecioHabitacion(); 
   	}

	public function addAlquiler(){
		$app = Aplicacion::getSingleton();
    $mysqli = $app->conexionBd();
		 $this->precio = $this->getPrecioTotal();
		 $sql =  "INSERT INTO alquiler(fechaEntrada, fechaSalida, Habitacion_Alquilada, Huesped_Alquilado, Precio, TipoPension) VALUES 
		 ('$this->fechaEntrada', '$this->fechaSalida', '$this->habitacion_Alquilada', '$this->id_huesped', '$this->precio', '$this->tipoPension') ";
		 if(!$mysqli->query($sql)) {
        echo $this->fechaEntrada;
        echo $this->fechaSalida;
        echo $this->habitacion_Alquilada;
        echo $this->tipoPension;
        echo $this->id_huesped;
        echo $this->tipo_hab;
        echo $this->vistasMar;
       //header("Location: errorAlquiler.php");
			}
			else{
				$sql = "UPDATE huesped SET Tiene_Reserva = '1' where Id_huesped = '$this->id_huesped'";
				$mysqli->query($sql) or die ($mysqli->error. " en la línea ".(__LINE__‐1));
				$_SESSION["reserva"] = true;
			}
}

}
?>
