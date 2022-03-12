<!DOCTYPE html>
<html lang="es">
 <head>
	<title>Fantasy Riders</title>
	<meta charset="utf-8"/>
	<meta name="author" content="Roberth Steven Macas Ordóñez"/>
	<meta name="description" content="En esta página se jugará al juego de fantasy rider donde el jugador crea su carta y jugará contra el ordenador"/>
	<meta name="keywords" content="fantasy rider, juegos,php"/>
	<link href="fantasy.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="imagenes/logo.png" />
 </head>
 <body>
 <h1>¡Que empiece el duelo!</h1>
<?php

 //Creamos la carta del ordenador
 require_once("funcionesFantasy.php");
 $nombreFantasy= array("Chatarrero", "Huago", "Amazona", "Sherezade", "Grantrasgo", "Conjurador", "Dragón", "Halito", "Lanza", "Elfo", "Hoplita", "Gnomo", "Rakasha", "Valquiria", "NoVida");
 $cartaPC=fantasyRider($nombreFantasy);
 echo "<div class='p1'>" . $cartaPC['Nombre'] . "</div>";
 //crear carta de usuario
 		$cartaUser["Nombre"]=$_POST['personaje'];
		$cartaUser["Ataque"]=$_POST['ataque'];
		$cartaUser["Defensa"]=$_POST['defensa'];
		
 echo "<div class='p2'>" . $cartaUser['Nombre'] . "</div>";
 
 echo "<div class='p3'><dl><dt>Ataque " . $cartaPC['Ataque']. "</dt>";
 echo "<dl><dt>Defensa " . $cartaPC['Defensa']. "</dt></dl></div>";
 
 echo "<div class='p4'><dl><dt>Ataque " . $cartaUser['Ataque']. "</dt>";
 echo "<dl><dt>Defensa " . $cartaUser['Defensa']. "</dt></dl></div>";
 
 //Empiezan a luchar
 luchaFantasy($cartaPC,$cartaUser);
 //Tras esta lucha se decide quién es el ganador
 ?>
 <a href='index.php'>Volver a jugar</a>
 </body>
</html>