<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html"/>
	<title>Semaforo</title>
	<link rel="shortcut icon" href="imagenes/logo.png" />
	<link href="semaforo.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1 align="center">Gracias por quemar ruedas con nosotros</h1>
	<img src="imagenes/coche.gif" alt="coche"/>
	<?php
		session_destroy();
		unset($_SESSION);
	?>
</body>
</html>