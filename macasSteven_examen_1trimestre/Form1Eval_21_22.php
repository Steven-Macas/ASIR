<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title> Formulario de prueba </title>
	<meta charset="UTF-8" />
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/scripticon.ico" />

</head>


<body style="background-color: #25FAC4">

	<div align="center"><h1>FORMULARIO PARA PIZZA </div>
	<hr />
	<table border="1" align="center" cellpadding="15">
	<tr><th><h2>PIDA SU PIZZA!!</h2></th></tr>
	<tr><td>
		<!-- Pregunta 1: crear un formulario con los checkbox de cada uno de los ingredientes -->
			
		<form action="Primera_eval_21_22.php" method="post">
		<label for="ing">INGREDIENTES</label><br/>
		<?php
			
			$ingredientes = array ("Base" => 5, "Tomate" => 1, "Atún" => 1.5, "Aceitunas" => 2 , 
				"Pimientos" => 2.5, "Salchicas" => 2, "Gambas" => 6, "Caviar" => 7, "Cebolla" => 0.75, 
				"Ajo" => 0.75, "Pimienta" => 0.75, "Alcaparras" => 3, "Anchoas" => 1.5, "Maíz" => 2, 
				"Berenjenas" => 2.5, "Guisantes" => 1, "Salchichón" => 4, "Chorizo" => 4, "Carne" => 5 );
			foreach($ingredientes as $indice => $valor){
				if($indice=='Base'){
					echo "<input type='checkbox' name='ingredientes[]' checked='checked' value='" . $indice . "'/>";
					echo "<label>". $indice . "-->" . $valor . "</label><br/>";
				}elseif($indice=='Tomate'){
					echo "<input type='checkbox' name='ingredientes[]' checked='checked' value='" . $indice . "'/>";
					echo "<label>". $indice . "-->" . $valor . "</label><br/>";
				}elseif($indice != 'Base' && $indice!= 'Tomate'){
					echo "<input type='checkbox' name='ingredientes[]' value='" . $indice . "'/>";
					echo "<label>". $indice . "-->" . $valor . "</label><br/>";
				}
			}

		?><hr />
		<label for="tam">TAMAÑO</label><br/>
		<input type="radio" name="tamanno" id="grande" value="Grande"/><label for="grande">Grande</label><br/>
		<input type="radio" name="tamanno" id="mediano" value="Mediano"/><label for="mediano">Mediano</label><br/>
		<input type="radio" name="tamanno" id="pequeño" value="Pequenno"/><label for="pequeño">Pequeño</label><br/>
		

		<input type="submit" name="submit" value="Enviar" />
		<input type="reset" name="reset" value="Reset" /> 
		</form>
		</td>
	</tr>
	</fieldset>
	</form> 
	</td></tr>
	</table> 
	
	<p align="right">
      <a href="http://validator.w3.org/check?uri=referer"><img
          src="http://www.w3.org/Icons/valid-xhtml10"
          alt="Valid XHTML 1.0!" height="31" width="88" /></a>
    </p>
  
</body>

</html>