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
</head>
<body>
	<form action="iniciando.php" method="post">
		<fieldset>
			<legend>Iniciar Sesión</legend>
			<label for="nombre">Usuario</label>
			<input type="text" name="nombre" required id="nombre"/><br><br>
			<label for="contraseña">Contraseña</label>
			<input type="password" name="contrasena" id="contraseña" required/><br>
		</fieldset>
		<input type="submit" value="Entrar">
	</form>
	<?php
		if (isset($_SESSION['error'])) {
			if ($_SESSION['error']=='incorrectos') {
				echo "<br><h4>Los datos son incorrectos</h4>";
				$_SESSION['error']='nada';
			}
		}

	?>
</body>
</html>