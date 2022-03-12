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
 </head>
 <body>
 	<form action="muestraActores.php" method="post">
 		<fieldset>
 			<legend>Películas</legend>
 			<label for="nombre">Nombre de jugador</label>
 			<input type="text" name="nombre" id="nombre" required /><br/>
 			<label for="titulo">Escoge una película</label><br/>
		 	<select name="titulo" id="titulo">
				<option value="Los Juegos del Hambre">Los Juegos del Hambre</option>
				<option value="Titanic">Titanic</option>
				<option value="Spider-Man">Spider-Man</option>
				<option value="Sharknado">Sharknado</option>
				<option value="Jumanji">Jumanji</option>
				<option value="Supercool">Supercool</option>
				<option value="Uncharted">Uncharted</option>
				<option value="Harry Potter">Harry Potter</option>
				<option value="Eternals">Eternals</option>
				<option value="Arcane">Arcane</option>
			</select> 			
 		</fieldset>
 		<input type="submit" name="enviar" value="Enviar" class="envi" />
 		<?php
 			//$_SESSION['Suma']=0;
 		?>
	</form>
 </body>
</html>