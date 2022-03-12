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
	<img src="imagenes/adios.gif" alt="Gracias" />
	<h1>¡Esperamos que vuelva pronto!</h1>
	<?php
	session_destroy();
	unset($_SESSION);
?>
</body>
</html>
