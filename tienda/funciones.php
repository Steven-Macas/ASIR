<?php

	function guardarCamisetas($camisetas){
		foreach ($camisetas as $tipo) {
			$_SESSION['camisetas'][]=$tipo;
		}
	}

	function guardarPantalones($pantalones){
		foreach ($pantalones as $tipo) {
			$_SESSION['pantalones'][]=$tipo;
		}
	}

	function guardarZapatos($zapatos){
		foreach ($zapatos as $tipo) {
			$_SESSION['zapatos'][]=$tipo;
		}
	}
?>