<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zacfrix</title>
	<link rel="stylesheet" type="text/css" href="tienda.css">
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.png" />
</head>
<body>
	<form action="index2.php" method="post">
		<fieldset>
			<legend>Usuario</legend>
			<?php
			if(isset($_SESSION['nombre'])){
				echo "<label>" . $_SESSION['nombre'] . " está comprando</label>";
			}else{
				echo "<label for='nombre'>Nombre</label>";
				echo "<input type='text' name='nombre' id='nombre' required />";
			}
			?>
		</fieldset>
		<br>
		<input type="radio" name="ropa" value="camisetas" id="camisetas"/><label for="camisetas">Camisetas</label><br/>

		<input type="radio" name="ropa" value="pantalones" id="pantalones"/><label for="pantalones">Pantalones</label><br/>

		<input type="radio" name="ropa" value="zapatos" id="zapatos"/><label for="zapatos">Zapatos</label><br/>

		<input type="submit" value ="Comprar"/>
	</form>
	<?php
	if (isset($_SESSION['error'])) {
		if ($_SESSION['error']=='si') {
			echo "<h4>Por favor seleccione que ropa desea comprar</h4>";
			$_SESSION['error']='no';
		}	
	}
	?>
</body>
</html>