<?php
	session_start();

	if(!isset($_POST['Ciudades'])){
		$_SESSION['insertar']="NO";
		header ("Location: insertar_ciudades.php");
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
	
	$nom=$_POST["Ciudades"];
	
	$numero=ultimo_id($basedatos);
	$identity=$numero+1;
	inserta_ciudad($basedatos, $identity ,$nom);

	echo "<br/><p align='center'>Se ha completado la orden correctamente</p>";

	cierra_bd($basedatos);
?>

	<div align= "center">
		<a href="formulario_bd.php">Volver a la página principal</a> 
	</div>	

</body>
</html>