<?php
	session_start();
		if(isset($_POST['nombre'])){
		$_SESSION['concursante']=$_POST['nombre'];
	}
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
 	<h1>Bienvenid@ al juego <?php echo $_SESSION['concursante']; ?></h1>
 	<h2>Acierta los protagonistas</h2>
 	<h3>De la pelicula elegida, indica cuáles son sus protagonistas</h3>
	<?php
	require_once("librerias/lib.php");
	if(isset($_POST['titulo'])){
		$_SESSION['Pelicula']=$_POST['titulo'];
	}
	switch($_SESSION['Pelicula']){
			case 'Los Juegos del Hambre': echo "<img src='imagenes/juegosHambre.jpg'/>";
					break;
			case 'Titanic': echo "<img src='imagenes/titanic.jpeg'/>";
					break;
			case 'Spider-Man': echo "<img src='imagenes/spiderman.jpg'/>";
					break;
			case 'Sharknado': echo "<img src='imagenes/sharknado.jpg'/>";
					break;
			case 'Jumanji': echo "<img src='imagenes/jumanji.jfif'/>";
					break;
			case 'Supercool': echo "<img src='imagenes/supercool.jpg'/>";
					break;
			case 'Uncharted': echo "<img src='imagenes/uncharted.jpg'/>";
					break;
			case 'Harry Potter': echo "<img src='imagenes/harryPotter.jpg'/>";
					break;
			case 'Eternals': echo "<img src='imagenes/eternals.jpg'/>";
					break;
			case 'Arcane': echo "<img src='imagenes/arcane.jpg'/>";
					break;
			default: echo "Error en la pelicula";
				break;

	}
	$peliculas[0]= array("Titulo" => "Los Juegos del Hambre", "Actor" => "Josh Hutcherson", "Actriz" => "Jennifer Lawrence");
	$peliculas[1]= array("Titulo" => "Titanic", "Actor" => "Leonardo DiCaprio", "Actriz" => "Kate Winslet");
	$peliculas[2]= array("Titulo" => "Spider-Man", "Actor" => "Tobey Maguire", "Actriz" => "Kirsten Dunst");
	$peliculas[3]= array("Titulo" => "Sharknado", "Actor" => "Ian Ziering", "Actriz" => "Tara Reid");
	$peliculas[4]= array("Titulo" => "Jumanji", "Actor" => "Robin Williams", "Actriz" => "Bonnie Hunt");
	$peliculas[5]= array("Titulo" => "Supercool", "Actor" => "Christopher Mintz-Plasse", "Actriz" => "Aviva");
	$peliculas[6]= array("Titulo" => "Uncharted", "Actor" => "Tom Holland", "Actriz" => "Sophia Ali");
	$peliculas[7]= array("Titulo" => "Harry Potter", "Actor" => "Daniel Radcliffe", "Actriz" => "Emma Watson");
	$peliculas[8]= array("Titulo" => "Eternals", "Actor" => "Gemma Chan", "Actriz" => "Barry Keoghan");
	$peliculas[9]= array("Titulo" => "Arcane", "Actor" => "Jinx", "Actriz" => "Silco");
	opcionesProtas($peliculas);

	identificaPeli($_SESSION['Pelicula'],$peliculas);
	echo "<br/>";
	if(isset($_SESSION['error'])){
		switch($_SESSION['error']){
			case 'Actor': echo "<p>Escoge solo un actor</p>";
							break;
			case 'Actriz': echo "<p>Escoge solo una actriz</p1>";
							break;
			case 'Ambos': echo "<p>Elija solo un actor y una actriz</p>";
							break;
			//case 'Ninguno': echo "<p>Elija un actor y una actriz</p>";
							//break;
			default:
					break;
		}
	}
	if (isset($_SESSION['ninguno']) && $_SESSION['ninguno']=='algo') {
		echo "<p>Elija al menos un actor y actriz</p>";
	}
	?>
 </body>
</html>