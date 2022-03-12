<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrarse</title>
	<link rel="stylesheet" type="text/css" href="tienda.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.png" />
</head>
<body>
	<form action="registrado.php" method="post">
		<fieldset>
			<legend>Datos del usuario</legend>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" required /><br>
			<label for="contraseña">Contraseña</label>
			<input type="password" name="contrasena" id='contraseña' required minlength="8" />
		</fieldset>
		<input type="submit" value="Registrarse"/>
	</form>
</body>
</html>