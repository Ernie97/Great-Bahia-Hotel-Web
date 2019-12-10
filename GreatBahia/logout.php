<?php 
	session_start(); 

	unset($_SESSION);

	session_destroy(); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GREAT BAHIA</title>
	<link rel="stylesheet" type="text/css" href="hotel.css" />
</head>

<body background= "loginImage.jpg">


	<?php 
		require("cabecera.php");
	?>

	<div class = "topCabecera">
		<font color = "white">
			<h1 style =" text-align: center">¡HASTA PRONTO!</h1>
		</font>

	</div>



</body>
</html>