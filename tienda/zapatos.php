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
	<h1>Zapatos</h1><hr/>
	<form action="index2.php" method="post">
		<fieldset>
			<legend>Tipo</legend>
			<input type="checkbox" name="zapatos[]" value="cr7" id="cr7"/><label for="cr7">CR7 -> 60€</label><br/>

			<input type="checkbox" name="zapatos[]" value="tacones" id="tacones"/><label for="tacones">Tacones -> 40€</label><br/>

			<input type="checkbox" name="zapatos[]" value="botas" id="botas"/><label for="botas">Botas -> 20€</label><br/>

			<input type="checkbox" name="zapatos[]" value="alpargatas" id="alpargatas"/><label for="alpargatas">Alpargatas -> 10€</label><br/>
		</fieldset>
		<input type="submit" name="volverZapatos" value="Volver"/>
		<input type="submit" name="volverZapatos" value="Pagar"/>
		<input type="hidden" name="ropa" value="vuelta"/>

	</form>
</body>
</html>