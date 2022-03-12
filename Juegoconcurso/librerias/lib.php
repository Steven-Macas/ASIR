<?php
	function identificaPeli($elegido,$opciones){
		//Esta funcion sirve para averiguar la pelicula que ha elegido el usuario y sus protagonistas
		for($i=0; $i<10; $i++){
			if($opciones[$i]["Titulo"]=="$elegido"){
				$_SESSION['Actor']=$opciones[$i]["Actor"];
				$_SESSION['Actriz']=$opciones[$i]["Actriz"];
				$_SESSION['Puntuacion']=0;
			}
		}
	}
	function opcionesProtas($opciones){
		//Esta funcion sirve para hacer los checkbox de los personajes
		echo "<form action='puntuacion.php' method='post'>";
		for($i=0; $i<10; $i++){
			echo "<input type='checkbox' name='Actor[]' id='" . $opciones[$i]['Actor'] . "' value='" . $opciones[$i]['Actor'] . "'/>";
			echo "<label for='" . $opciones[$i]['Actor'] . "'>" . $opciones[$i]['Actor'] . "</label><br/>";

			echo "<input type='checkbox' name='Actriz[]' id='" . $opciones[$i]['Actriz'] . "' value='" . $opciones[$i]['Actriz'] . "'/>";
			echo "<label for='" . $opciones[$i]['Actriz'] . "'>" . $opciones[$i]['Actriz'] . "</label><br/>";
		}
		echo "<input type='submit' value='Enviar'/>";
		echo "</form>";
	}
?>