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
	<h1>Camisetas</h1><hr/>
	<form action="index2.php" method="post">
		<fieldset>
			<legend>Tipo</legend>
			<input type="checkbox" name="camisetas[]" value="top" id="top"/><label for="top">Top -> 5€</label><br/>

			<input type="checkbox" name="camisetas[]" value="polo" id="polo"/><label for="polo">Polo -> 10€</label><br/>

			<input type="checkbox" name="camisetas[]" value="nike" id="nike"/><label for="nike">Nike -> 15€</label><br/>

			<input type="checkbox" name="camisetas[]" value="adidas" id="adidas"/><label for="adidas">Adidas -> 8€</label><br/>
		</fieldset>
		<input type="submit" name="volverCamisetas" value="Volver"/>
		<input type="submit" name="volverCamisetas" value="Pagar"/>
		<input type="hidden" name="ropa" value="vuelta"/>
	</form>
</body>
</html>