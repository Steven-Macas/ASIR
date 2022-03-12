<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
 <head>
	<title>Mclovin</title>
	<meta charset="utf-8"/>
	<meta name="author" content="Roberth Steven Macas Ordóñez"/>
	<link type="text/css" rel="stylesheet" href="formulario.css"/>
	<style>
		img{
			width:400px;
			height: auto;
		}
	</style>
 </head>
 <body>
 	<h1>Fin del Juego</h1>
 	<?php
 		echo "¡Tu puntuación final es " . $_SESSION['Suma'] . "!";
 		echo "<h3>Gracias por haber jugado</h3>";
 		echo "<img src='imagenes/fin.gif'/>";
 		session_destroy();
 		unset($_SESSION);
 	?>
 </body>
</html>