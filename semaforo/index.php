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
	<form action="colorElegido.php" method="post">
	<?php
		if (isset($_SESSION['elegido'])) {
			switch ($_SESSION['elegido']) {
				case 'nada': echo "<h4>Por favor, eliga un color</h4>";
					break;

				case 'rojo': echo "<h2 class='r'>No tan rápido velocista. Espera a otro color</h2><input type='submit' name='fin' value='fin' class='fine'/>";
					break;

				case 'amarillo': echo "<h2 class='y'>¡Despasito por favor!</h2><input type='submit' name='fin' value='fin' class='fine'/>";
					break;

				case 'verde': echo "<h2 class='v'>Agarrate que viernen curvas</h2><h3 class='v'>180KM/H</h3><input type='submit' name='fin' value='fin' class='fine'/>";
					break;
				
				default:
					break;
			}
		}
	?>
	
		<input type="submit" value="¡Correr!" id="fin" /><br/><br>
		<fieldset>
			<div style='background-color:darkred'><input type="radio" name="color" id="rojo" value="rojo"/><label for="rojo">¡Preparados!</label></div>
			<div style='background-color:darkorange;'><input type="radio" name="color" id="amarillo" value="amarillo"/><label for="amarillo">¡Listos!</label></div>
			<div style='background-color:darkgreen'><input type="radio" name="color" id="verde" value="verde"/><label for="verde">¡Ya!</label></div>
		</fieldset>
	</form>
</body>
</html>