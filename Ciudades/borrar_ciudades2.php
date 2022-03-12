<?php
	session_start();

	if(!isset($_POST['ciudad'])){
		$_SESSION['borrar']="NO";
		header ("Location: borrar_ciudades.php");
	}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title> Ejercicio completo de Ciudades </title>
	<meta charset="UTF-8" />
	<link rel="shortcut icon" type="image/x-icon" href="Zowi Skull.ico" />
	<style type="text/css">
		body {margin-left: auto;
			  margin-right: auto;}
	</style>
	
</head>

<body style="background-color: #25FAC4">

<?php
	require_once ("maneja_ciudades.php");
	require_once ("maneja_bd.php");
	require_once ("datos_bd.php");

	conecta_bd($basedatos, $serv, $baseD, $user, $key);
	
	foreach ($_POST['ciudad'] as $nombre) {
		borra_ciudad($basedatos, $nombre);
		echo "<p align='center'>Se borró ".$nombre." adecuadamente<p><br/>";
	}

	cierra_bd($basedatos);
?>

	<div align= "center">
		<a href="formulario_bd.php">Volver a la página principal</a> 
	</div>	

</body>
</html>