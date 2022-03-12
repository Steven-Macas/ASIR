<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tienda</title>
	<link rel="stylesheet" type="text/css" href="tienda.css"/>
	<style>
		h2{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Sección de Pantalones?</h1>
	<h2>¿Qué desea comprar?</h2>
	<form action="productos2.php" method='post'>
		<fieldset>
			<legend>Pantalones</legend>
			<table>	<?php 
	require_once ("datos_bd.php");
	require_once ("maneja_bd.php");
	require_once ("maneja_productos.php");

		conecta_bd ($basedatos, $serv, $baseD, $user, $key);
		$tipo='Abajo';
	$consulta="select * from articulos where tipoArt= :tipo";
						   //Hacemos el blindaje
	$sentencia=$basedatos->prepare($consulta);
	$sentencia->bindValue("tipo", $tipo);
	$sentencia->execute();
	if ($fila = $sentencia->fetch()) {
		echo "<tr><th>Tipo</th><th>Talla</th><th>Color</th><th>Precio</th></tr>";
		echo "<tr><td><input type='checkbox' name='pantalones[]' value='". $fila['nombreArticulo'] . "'/>".$fila['nombreArticulo']."</td><td>".$fila['talla']."</td><td>".$fila['color']."</td><td>".$fila['precio']."</td></tr>";
		while( $fila = $sentencia->fetch()){    
			echo "<tr><td><input type='checkbox' name='pantalones[]' value='". $fila['nombreArticulo'] . "'/>".$fila['nombreArticulo']."</td><td>".$fila['talla']."</td><td>".$fila['color']."</td><td>".$fila['precio']."</td></tr>";
		} 
	}else{
		echo "En este momento no hay pantalones disponibles";
	}
	$sentencia->closeCursor();
	cierra_bd($basedatos);
	?>
</table>
	</fieldset>
	<input type="submit" name="ropa" value="volver">
	<input type="submit" name="ropa" value="pagar">
	</form>
</body>
</html>