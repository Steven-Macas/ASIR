
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title> Ejercicio completo de Ciudades </title>
	<meta charset="UTF-8" />
	<!-- Ruta absoluta, icono dinámico -->
	<link rel="shortcut icon" type="image/x-icon" href="Zowi Skull.ico" />
	<style type="text/css">
		body {
			background-color: #25FAC4
		}
		table, th, td {
			border: solid blue;
			border-collapse: collapse;	
			text-align: center;	
		}
		td {
			padding: 15px;
		}
		.padre {
	 		display: flex;
	  		justify-content: center;
		}
		

	</style>
</head>


<body style="background-color: #25FAC4">

	<table border="1" align="center" cellpadding="15">
	<tr><th colspan="2"><h2>CIUDADES</h2></th></tr>
<?php
	require_once ("datos_bd.php");
	require_once ("maneja_bd.php");
	require_once ("maneja_ciudades.php");
	//Para conectar la base de datos
				//mysql:host=localhost,prueba,root,""
	conecta_bd ($basedatos, $serv, $baseD, $user, $key);
//CRUD -> Conect,Read,Update,Delete
	//Hago la consulta
	$consulta = "Select * from Ciudades";
	
							//brindaje
	$resultado = $basedatos->prepare($consulta); 
	$resultado->execute();

	//Miro los resultados con el cursor 
	if ($fila = $resultado->fetch()){
		echo "<tr><th>Identificador</th><th>Nombre</th></tr>";
		echo "<tr><td>".$fila['idCiudad']."</td><td>".$fila['nombre']."</td></tr>";
		while( $fila = $resultado->fetch() ) {    
			echo "<tr><td>".$fila['idCiudad']."</td><td>".$fila['nombre']."</td></tr>";
		} 
		$resultado->closeCursor(); 
	}
	else {
		echo "<tr><td>No hay Ciudades en la tabla</td></tr>";
	}

	cierra_bd($basedatos);
?>
	</table><br /><br />
	<div width="50%" align="center">
	<a href="formulario_bd.php" >Volver a la página principal </a>
	</div>
	<br /><br />
	  
</body>

</html>