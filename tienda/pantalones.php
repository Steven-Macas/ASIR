<?php
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zacfrix</title>
	<link rel="stylesheet" type="text/css" href="tienda.css">
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.png" />
</head>
<body>
	<h1>Pantalones</h1><hr/>
	<form action="index2.php" method="post">
		<fieldset>
			<legend>Tipo</legend>
			<input type="checkbox" name="pantalones[]" value="bermudas" id="bermudas"/><label for="bermudas">Bermudas -> 7€</label><br/>

			<input type="checkbox" name="pantalones[]" value="vaqueros" id="vaqueros"/><label for="vaqueros">Vaqueros -> 9€</label><br/>

			<input type="checkbox" name="pantalones[]" value="mallas" id="mallas"/><label for="mallas">Mallas -> 12€</label><br/>

			<input type="checkbox" name="pantalones[]" value="skinny" id="skinny"/><label for="skinny">Skinny -> 18€</label><br/>
		</fieldset>
		<input type="submit" name="volverPantalones" value="Volver"/>
		<input type="submit" name="volverPantalones" value="Pagar"/>
		<input type="hidden" name="ropa" value="vuelta"/>
	</form>
</body>
</html>