<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zacfrix</title>
	<link rel="stylesheet" type="text/css" href="tienda.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.png" />
</head>
<body>

	<h1>¡Gracias <?php echo $_SESSION['nombre']; ?> por visitar nuestra tienda!</h1><hr/>

	<div>
		<h2>Todos los productos</h2>
		<ul>
			<?php
			//He creado el array para ir comprobando que ropa ha escogido el usuario pero me ha dado varios errores así que he preferido hacer un switch
			$precios= array('top' => 5, 'polo' => 10, 'nike' => 15, 'adidas' => 8, 'bermudas' => 7, 'vaqueros' => 9, 'mallas' => 12, 'skinny' => 18, 'cr7' => 60, 'tacones' => 40, 'botas' => 20, 'alpargatas' => 10);
			$total=0;
			if (isset($_SESSION['camisetas'])) {
				echo "<h3>camisetas</h3>";
				foreach($_SESSION['camisetas'] as $value){
					echo "<li>" . $value ."</li>";
					switch ($value) {
						case 'top': $total=$total+5;
							break; 
						case 'polo': $total=$total+10;
							break;
						case 'nike': $total=$total+15;
							break;
						case 'adidas': $total=$total+8;
							break;
						
						default:
							// code...
							break;
					}
				}
				echo "<br/>Total camisetas " . $total . "€";
			}
			if (isset($_SESSION['pantalones'])) {
				
				echo "<h3>Pantalones</h3>";
				foreach($_SESSION['pantalones'] as $value){
					echo "<li>" . $value ."</li>";
					switch ($value) {
						case 'bermudas': $total=$total+7;
							break; 
						case 'vaqueros': $total=$total+9;
							break;
						case 'mallas': $total=$total+12;
							break;
						case 'skinny': $total=$total+18;
							break;
						
						default:
							// code...
							break;
					}
				}
				echo "<br/>Total pantalones " . $total . "€";
			}
			if (isset($_SESSION['zapatos'])) {
				
				echo "<h3>Zapatos</h3>";
				foreach($_SESSION['zapatos'] as $value){
					echo "<li>" . $value ."</li>";
					switch ($value) {
						case 'cr7': $total=$total+60;
							break; 
						case 'tacones': $total=$total+40;
							break;
						case 'botas': $total=$total+20;
							break;
						case 'alpargatas': $total=$total+10;
							break;
						
						default:
							// code...
							break;
					}
				}
				echo "<br/>Total zapatos " . $total . "€";
			}
			echo "<br/>El precio total es " . $total . " €";
			$total=$total*1.21;
			echo "<br>Con IVA : " . $total;
			?>
		</ul>
	</div>
	<a href="index.php">Seguir Comprando</a>
	<a href="fin.php" class="derecha">Pagar</a>
</body>
</html>

