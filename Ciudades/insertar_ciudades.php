<?php
	session_start();

	if (isset($_SESSION['insertar'])){
		echo '<div align="center" style="color:red">';
		echo "<p>Seleccione una opción</p></div>";
	}

	session_destroy();
	unset($_SESSION);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title> Ejercicio completo de Ciudades </title>
	<meta charset="UTF-8" />
	<!-- Ruta absoluta, icono dinámico -->
	<link rel="shortcut icon" type="image/x-icon" href="Zowi Skull.ico" />
	<style type="text/css">
		body {
			background-color: #25FAC4
		}
		h1{
			width: 40%;
			margin: auto;
		}
		table, th, td {
			border: solid blue;
			border-collapse: collapse;	
			text-align: center;	
		}
		td {
			padding: 15px;
		}
		.padre {
	 		display: flex;
	  		justify-content: center;
		}
		form{
			width: 50%;
			margin: auto;
			font-size: 30px;
		}

		

	</style>
<body style="background-color: #25FAC4">
 <h1>Selecciona las ciudades que quieres insertar: </h1><hr/>
 <form action="insertando.php" method="post">
  <fieldset>
  	<legend>Insertar</legend>
  	<input type="checkbox" name="Ciudades[]" value="granada" id="granada" /><label for="granada">Granada</label><br>
  	<input type="checkbox" name="Ciudades[]" value="malaga" id="malaga" /><label for="malaga">Málaga</label><br>
  	<input type="checkbox" name="Ciudades[]" value="sevilla" id="sevilla" /><label for="sevilla">Sevilla</label><br>
  	<input type="checkbox" name="Ciudades[]" value="madrid" id="madrid" /><label for="madrid">Madrid</label><br>
  	<input type="checkbox" name="Ciudades[]" value="cordoba" id="cordoba" /><label for="cordoba">Córdoba</label><br>
  	<input type="checkbox" name="Ciudades[]" value="jaen" id="jaen" /><label for="jaen">Jaén</label><br>
  	<input type="checkbox" name="Ciudades[]" value="huelva" id="huelva" /><label for="huelva">Huelva</label><br>
  	<input type="checkbox" name="Ciudades[]" value="cadiz" id="cadiz" /><label for="cadiz">Cádiz</label><br>
  	<input type="checkbox" name="Ciudades[]" value="barcelona" id="barcelona" /><label for="barcelona">Barcelona</label><br>
  	<input type="checkbox" name="Ciudades[]" value="leon" id="leon" /><label for="leon">León</label><br>
  </fieldset>
  <input type="submit" value="Enviar"/>
 </form>

	</table><br /><br />
	<div width="50%" align="center">
	<a href="formulario_bd.php" >Volver a la página principal </a>
	</div>
	<br /><br />
	  
</body>

</html>