<?php
require_once "includes/config.php";

    session_start();
    $app = Aplicacion::getSingleton();
    $mysqli = $app->conexionBd();
	$verificar = false;
	$username = $mysqli->real_escape_string($_REQUEST["username"]);
	$password = $mysqli->real_escape_string($_REQUEST["password"]);

	if (empty($username) or empty($password)) {
		$_SESSION["LogIn"] = FALSE;
		header("Location: errorLogin.php");
	}
	else{
		$sql = 'SELECT * FROM huesped'; 
		$consulta = $mysqli->query($sql) or die ($mysqli->error. " en la línea ".(__LINE__‐1));
		while ($result = mysqli_fetch_object($consulta)){
			if($result->Nick_Name == $username and $result->Contrasena == $password){
				$_SESSION["LogIn"] = TRUE;
				$_SESSION["username"] = $username;
				$_SESSION["Id_user"] = $result->Id_huesped;
				$verificar = true;
				if($result->Tiene_Reserva == '1') $_SESSION['reserva'] = true;
				else  $_SESSION['reserva'] = false;
			}
		}
		if ($verificar == false) {
			$_SESSION["LogIn"] = FALSE;
			header("Location: errorLogin.php");
		}
		else header("Location: index.php"); 
		
			
	}
?>