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
		h2{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Bienvenid@ a nuestra tienda <?php echo $_SESSION['nombre']; ?></h1>
	<h2>¿Qué quiere comprar?</h2>
	<form action="productos2.php" method="post">
		<fieldset>
			<legend>Ropa</legend>
			<label for="arriba">Camisetas</label>
			<input type="radio" name="ropa" value="camisetas" id="arriba" /><br>

			<label for="abajo">Pantalones</label>
			<input type="radio" name="ropa" value="pantalones" id="abajo" /><br>

			<label for="zapatos">Zapatos</label>
			<input type="radio" name="ropa" value="zapatos" id="zapatos" /><br>
		</fieldset>
		<input type="submit" value="Comprar"/>
	</form>
	<?php
		if (isset($_SESSION['errorRopa'])) {
			if ($_SESSION['errorRopa']=='nada') {
				echo "<br><h4>Por favor escoge una opción</h4>";
				$_SESSION['errorRopa']='algo';
			}
		}
	?>
</body>
</html>