<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title> EXAMEN A</title>
	<meta charset="UTF-8" />
	<!-- Ruta absoluta, icono dinámico -->
	<link rel="shortcut icon" type="image/x-icon" href="Zowi Skull.ico" />
	<style type="text/css">
		
		body{
			background-color:#25FAC4;
			color:
		}
		h1{
			text-align:center;
		}
		h2{
			background-color: blue;
			text-align:center;
			color:white;
			width:70%;
			margin:auto;
			padding:10px;
		}
		.prim1{
			color:blue;
			border:solid 5px;
			border-color:green;
			padding:20px;
			width:80%;
			margin:auto;
			margin-top:20px;
			font-size:25px;
		}
		/* 1,3 ptos */



	</style>


</head>


<body >
	<br><br><br><br>
	<h1> EXAMEN PRIMERA EVALUACIÓN CURSO 20-21. PIZZERÍA</h1><br />
	<br />

	<!-- Aquí puedo poner slashes a titulos y azul y puntuar por ponerlos bien -->
	<hr /><h2>CREAR PIZZA</h2> <hr />

	<div class="prim1">
	<?php		

		require_once("librerias/func_1Eval_21_22.php");

		$ingredientes = array ("Base" => 5, "Tomate" => 1, "Atún" => 1.5, "Aceitunas" => 2 , "Pimientos" => 2.5, 
								"Salchicas" => 2, "Gambas" => 6, "Caviar" => 7, "Cebolla" => 0.75, "Ajo" => 0.75, 
								"Pimienta" => 0.75, "Alcaparras" => 3, "Anchoas" => 1.5, "Maíz" => 2, "Berenjenas" => 2.5, 
								"Guisantes" => 1, "Salchichón" => 4, "Chorizo" => 4, "Carne" => 5 );
		
		
		$selecionado=$_POST['ingredientes'];
		$tamanno=$_POST['tamanno'];
		// Pregunta 2: mostrar los ingredientes de la pizza elegida (0,6 ptos)
		if(isset($_POST['ingredientes'])){
		echo "Los ingredientes elegidos son: ";
		print_r($_POST['ingredientes']);
		echo "<br/>El tamaño es ";
		print_r($_POST['tamanno']);
		}
		//Pregunta3: Crear una función llamada calcular_precio que devuelva el precio de una pizza. Se le ha de pasar como parámetro un string que me diga el tamaño de la pizza. Si es grande, hay que incrementar el precio un 10%, si es mediana un 5% y si es pequeña un 2%.
		if(isset($_POST['tamanno'])){
			precio($tamanno,$ingredientes,$selecionado);
		}else echo "Por favor diga el tamaño que desea";
		
		//Funcion muestra_pizza
		echo "</div>";
		echo "<div class='prim1'>";
		muestra_pizza($tamanno,$ingredientes,$selecionado);
		
		//Pregunta5: Mostrar por pantalla la factura de una pizza grande, otra mediana y otra pequeña. 
		// 1 punto
		
		
		
		

?>
	</div>

</body>

</html> 
