<?php
	session_start();
	
	if(isset($_SESSION['borrar'])){
		echo '<div align="center" style="color:red">';
		echo "<p>Elija una opción por favor</p></div>";
	}

	session_destroy();
	unset($_SESSION);
	
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
	require_once ("datos_bd.php");
	require_once ("maneja_bd.php");
	
	conecta_bd ($basedatos, $serv, $baseD, $user, $key);
	
	$consulta = "Select * from Ciudades";
	$resultado = $basedatos->prepare($consulta); //comprobacion y blindado de la consulta
	$resultado->execute();
?>

	<div align= "center"><h1>¿QUÉ CIUDAD QUIERES BORRAR?</div>
		<hr />
		<table border="2" align="center" cellpadding="15">
		<tr><td>
			<form action="borrar_ciudades2.php" method="post">
<?php
	while($fila = $resultado->fetch()){
		echo "<input type='checkbox' name='ciudad[]' value=".$fila['nombre'].">".$fila['nombre']."<br/>";
	}
?>			
				<input type='submit' value="Borrar"/>
			</form>	
		</tr></td>
		</table>

		<br/>
<?php
			$resultado->closeCursor(); 
?>

		<div align= "center">
		<a href="formulario_bd.php">Volver a la página principal</a> 
	</div>	
</body>
</html>
						
		