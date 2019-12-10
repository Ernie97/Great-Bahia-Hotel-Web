<?php
require_once "includes/config.php";

	session_start();
	$app = Aplicacion::getSingleton();
    $mysqli = $app->conexionBd();
	$nickName = $mysqli->real_escape_string($_POST["nickname"]);
	$contrasena = $mysqli->real_escape_string($_POST["password"]);
	$nombre = $mysqli->real_escape_string($_POST["nombre"]);
	$nacionalidad = $mysqli->real_escape_string($_POST["nacionalidad"]);
	$nif = $mysqli->real_escape_string($_POST["nif"]);
	$fechaNac = $mysqli->real_escape_string($_POST["birthdate"]);
	$correo = $mysqli->real_escape_string($_POST["mail"]);
	$telefono = $mysqli->real_escape_string($_POST["mobile"]);
	$cuenta = $mysqli->real_escape_string($_POST["cuenta"]);

	if(empty($nickName) or empty($contrasena) or empty($nombre) or empty($nif) or empty($fechaNac) or empty($correo))
		header("Location: errorRegistro.php");

	else{
	$sql = "SELECT * FROM huesped WHERE 'Nick_Name' = '$nombre' ";
	$result = $mysqli->query($sql) or die ($mysqli->error. " en la línea ".(__LINE__‐1));
	if(mysqli_num_rows($result) == 0){
	$sql = "INSERT INTO huesped (Contrasena, Correo, FechaNacimiento, Nacionalidad, Nick_Name, NIF, Nombre_Completo, TelefonoMovil, Tiene_Reserva, Cuenta_Bancaria) 
						VALUES ('$contrasena', '$correo', '$fechaNac', '$nacionalidad', '$nickName', '$nif', '$nombre', '$telefono', '0', '$cuenta') ";
	if(!$mysqli->query($sql)) {
		header("Location: errorRegistro.php");
	}
	else{
		$_SESSION["LogIn"] = TRUE;
		$_SESSION["username"] = $nickName;
		$_SESSION["reserva"] = false;
		$sql = "SELECT * from huesped where Nick_Name = '$nickName'";
		$consulta = $mysqli->query($sql) or die ($mysqli->error. " en la línea ".(__LINE__‐1));
		while ($result = mysqli_fetch_object($consulta)){
			$_SESSION["Id_user"] = $result->Id_huesped;
		}
		header("Location: index.php");
	}

	}
	else
		header("Location: errorRegistro.php");
			
	}

?>