<?php
require_once "includes/config.php";

	class procesarCancelacion{


   	public function cancelar(){
   		$app = Aplicacion::getSingleton();
    	$mysqli = $app->conexionBd();
		 $i = 0;
		 $id_user = $_SESSION['Id_user'];
		 $sql = "SELECT * from alquiler inner join huesped on alquiler.Huesped_Alquilado = huesped.id_huesped where id_huesped = '$id_user'";
		 $result = $mysqli->query($sql) or die ($mysqli->error. " en la línea ".(__LINE__‐1));
		 	
		 while($fila = mysqli_fetch_assoc($result)){
			$id_huesped[$i] = $fila;
			$i = $i+1;
				
		}
		$id_huesped = $id_huesped['0']['Huesped_Alquilado'];
		 $sql = "DELETE FROM alquiler  WHERE Huesped_Alquilado = '$id_huesped'";
		 if(!$mysqli->query($sql)) 
			return false;
			
		else{
			$sql = "UPDATE huesped SET Tiene_Reserva = '0' where Id_huesped = '$id_huesped'";
			$mysqli->query($sql) or die ($mysqli->error. " en la línea ".(__LINE__‐1));
			$_SESSION["reserva"] = false;
			return true;
		}
		
   	}

}
?>
