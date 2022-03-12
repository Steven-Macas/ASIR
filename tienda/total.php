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
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.png" />
	<style>
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h1>Gracias <?php echo $_SESSION['nombre']; ?> por visitar nuestra tienda</h1><hr>
	<div>
	<h2>Ropa Elegida</h2>
	<?php 
	require_once ("datos_bd.php");
	require_once ("maneja_bd.php");
	require_once ("maneja_productos.php");
	$total=0;
		conecta_bd ($basedatos, $serv, $baseD, $user, $key);
//Mostrar camisetas

if (isset($_SESSION['camisetas'])) {
			$tipo='Arriba';
	$consulta="select * from articulos where tipoArt= :tipo";
	$sentencia=$basedatos->prepare($consulta);
	$sentencia->bindValue("tipo", $tipo);
	$sentencia->execute();
	if ($fila = $sentencia->fetch()) {
		echo "<table>";
		echo "<capion>Camisetas</caption>";
		echo "<tr><th>Tipo</th><th>Talla</th><th>Color</th><th>Precio</th></tr>";
		foreach($_SESSION['camisetas'] as $value){
			if($value==$fila['nombreArticulo']){
				echo "<tr><td>" . $value ."</td><td>".$fila['talla']."</td><td>".$fila['color']."</td><td>".$fila['precio']."</td></tr>";
				switch ($value) {
					case 'Sudadera': $total=$total+7;
							break; 
					case 'Polo': $total=$total+10;
							break;
					case 'Top': $total=$total+5;
							break;
						
					default:
					// code...
					break;
				}
			}
		}
		while($fila = $sentencia->fetch()){
			foreach($_SESSION['camisetas'] as $value){
				if($value==$fila['nombreArticulo']){
					echo "<tr><td>" . $value ."</td><td>".$fila['talla']."</td><td>".$fila['color']."</td><td>".$fila['precio']."</td></tr>";
					switch ($value) {
						case 'Sudadera': $total=$total+7;
								break; 
						case 'Polo': $total=$total+10;
								break;
						case 'Top': $total=$total+5;
								break;
							
						default:
						// code...
						break;
					}
				}
			}
		}
		echo "</table><br>";
	}else{
		echo "En este momento no se puede acceder a la base de datos";
	}
	$sentencia->closeCursor();
}

	echo "<br>";
	
//Mostrar pantalones
if (isset($_SESSION['pantalones'])) {
			$tipo='Abajo';
	$consulta="select * from articulos where tipoArt= :tipo";
	$sentencia=$basedatos->prepare($consulta);
	$sentencia->bindValue("tipo", $tipo);
	$sentencia->execute();
	if ($fila = $sentencia->fetch()) {
		echo "<table>";
		echo "<capion>Pantalones</caption>";
		echo "<tr><th>Tipo</th><th>Talla</th><th>Color</th><th>Precio</th></tr>";
		foreach($_SESSION['pantalones'] as $value){
			if($value==$fila['nombreArticulo']){
				echo "<tr><td>" . $value ."</td><td>".$fila['talla']."</td><td>".$fila['color']."</td><td>".$fila['precio']."</td></tr>";
				switch ($value) {
					case 'Mallas': $total=$total+12;
							break; 
					case 'Bermudas': $total=$total+7;
							break;
					case 'Vaqueros': $total=$total+15.97;
							break;
						
					default:
					// code...
					break;
				}
			}
		}
		while($fila = $sentencia->fetch()){
			foreach($_SESSION['pantalones'] as $value){
				if($value==$fila['nombreArticulo']){
					echo "<tr><td>" . $value ."</td><td>".$fila['talla']."</td><td>".$fila['color']."</td><td>".$fila['precio']."</td></tr>";
					switch ($value) {
						case 'Mallas': $total=$total+12;
								break; 
						case 'Bermudas': $total=$total+7;
								break;
						case 'Vaqueros': $total=$total+15.97;
								break;
							
						default:
						// code...
						break;
					}
				}
			}
		}
		echo "</table><br>";
	}else{
		echo "En este momento no se puede acceder a la base de datos";
	}
	$sentencia->closeCursor();
}
echo "<br>";
//Mostrar zapatos
if (isset($_SESSION['zapatos'])) {
			$tipo='Zapatos';
	$consulta="select * from articulos where tipoArt= :tipo";
	$sentencia=$basedatos->prepare($consulta);
	$sentencia->bindValue("tipo", $tipo);
	$sentencia->execute();
	if ($fila = $sentencia->fetch()) {
		echo "<table>";
		echo "<capion>Zapatos</caption>";
		echo "<tr><th>Tipo</th><th>Talla</th><th>Color</th><th>Precio</th></tr>";
		foreach($_SESSION['zapatos'] as $value){
			if($value==$fila['nombreArticulo']){
				echo "<tr><td>" . $value ."</td><td>".$fila['talla']."</td><td>".$fila['color']."</td><td>".$fila['precio']."</td></tr>";
				switch ($value) {
					case 'Tacones': $total=$total+39.90;
							break; 
					case 'Sandalias': $total=$total+8;
							break;
					case 'Botas': $total=$total+20;
							break;
					case 'Alpargatas': $total=$total+10;
							break;
						
					default:
					// code...
					break;
				}
			}
		}
		while($fila = $sentencia->fetch()){
			foreach($_SESSION['zapatos'] as $value){
				if($value==$fila['nombreArticulo']){
					echo "<tr><td>" . $value ."</td><td>".$fila['talla']."</td><td>".$fila['color']."</td><td>".$fila['precio']."</td></tr>";
					switch ($value) {
						case 'Tacones': $total=$total+39.90;
								break; 
						case 'Sandalias': $total=$total+8;
								break;
						case 'Botas': $total=$total+20;
								break;
						case 'Alpargatas': $total=$total+10;
								break;
							
						default:
						// code...
						break;
					}
				}
			}
		}
		echo "</table><br><br>";
	}else{
		echo "En este momento no se puede acceder a la base de datos";
	}
	$sentencia->closeCursor();
}
	if (!isset($_SESSION['camisetas'])) {
		if (!isset($_SESSION['pantalones'])) {
			if (!isset($_SESSION['zapatos'])) {
				echo "No ha escogido ninguna producto<br><br>";
			}
		}
	}else{
		echo "<br/>El precio total es " . $total . " €";
				$total=$total*1.21;
				$total=round($total,2);
				echo "<br/><br/>Con IVA : " . $total . " €";
	}


			cierra_bd($basedatos);
	?>
	</div>
	<br/><a href="productos.php">Seguir Comprando</a>
	<a href="fin.php">Pagar</a>
</body>
</html>