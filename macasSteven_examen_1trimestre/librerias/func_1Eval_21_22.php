<?php

//Pregunta2: Crear una función llamada calcular_precio que devuelva el precio de una pizza. Se le ha de pasar como parámetro un string que me diga el tamaño de la pizza. Si es grande, hay que incrementar el precio un 10%, si es mediana un 5% y si es pequeña un 2%. 2 puntos
	function precio($tamanno,$ingredientes,$selecionado){

		$resul=0;
		$tama=count($selecionado);
		foreach($ingredientes as $indice => $precio){
			for($i=0;$i<$tama;$i++){
				if($indice == $selecionado[$i]){
					$resul=$resul+$precio;
				}
			}
		}
		if($tamanno=='Grande'){
			$precio=$resul*1.1;
		}elseif($tamanno=='Mediano'){
			$precio=$resul*1.05;
		}elseif($tamanno=='Pequenno'){
			$precio=$resul*1.02;
		}
		echo "<br/>El precio es " . round($precio,2);
	}
	//Funcion muestra_pizza
	function muestra_pizza($tamanno,$ingredientes,$selecionado){
		$tama=count($selecionado);
		$limi=$tama-2;
		$ulti=$tama-1;
		$i=1;
		$resul=0;
		echo "<br/>La pizza " . $tamanno . " contiene " . $tama . " ingredientes: " ;
		foreach($selecionado as $valor){
			if($i<=$limi){
				echo $valor . ", ";
			}elseif($i==$ulti){
				echo $valor . " y ";
			}else{
				echo $valor . ". ";
			}
			$i++;
		}
		
		foreach($ingredientes as $ingrediente => $precio){
			for($d=0;$d<$tama;$d++){
				if($ingrediente == $selecionado[$d]){
					$resul=$resul+$precio;
				}
			}
		}
		
		//Precio grande
			$precioG=$resul*1.1;
		//Precio mediano
			$precioM=$resul*1.05;
		//Precio pequeño
			$precioP=$resul*1.02;
		
		echo "Su precio es " . round($precioG,2);
		
		echo "<br/>La pizza Mediana contiene " . $tama . " ingredientes: " ;
		foreach($selecionado as $valor){
			if($i<=$limi){
				echo $valor . ", ";
			}elseif($i==$ulti){
				echo $valor . " y ";
			}else{
				echo $valor . ". ";
			}
			$i++;
		}
		echo "Su precio es " . round($precioM,2);
		
		echo "<br/>La pizza Pequeña contiene " . $tama . " ingredientes: " ;
		foreach($selecionado as $valor){
			if($i<=$limi){
				echo $valor . ", ";
			}elseif($i==$ulti){
				echo $valor . " y ";
			}else{
				echo $valor . ". ";
			}
			$i++;
		}
		echo "Su precio es " . round($precioP,2);
		
		$total=$precioG+$precioM+$precioP;
		echo "<h3>Y el precio total de la factura asciende a " . round($total,2) ."</h3>";
	}
// Pregunta 4: Crear una función llamada muestra_pizza que muestre los ingredientes de la pizza, su tamaño y precio total
// 2 puntos
	

?>