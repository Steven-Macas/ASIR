<?php 
	session_start();

	require_once ("maneja_productos.php");

	if (!isset($_POST['ropa'])) {
		$_SESSION['errorRopa']='nada';
		header('Location: productos.php');
	}

	if (isset($_POST['camisetas'])) {
		$camisetas=$_POST['camisetas'];
		guardarCamisetas($camisetas);
	}elseif (isset($_POST['pantalones'])) {
		$pantalones=$_POST['pantalones'];
		guardarPantalones($pantalones);
	}elseif (isset($_POST['zapatos'])) {
		$zapatos=$_POST['zapatos'];
		guardarZapatos($zapatos);
	}

	if (isset($_POST['ropa'])) {
		if ($_POST['ropa']=='camisetas') {
			header('Location: camisetas.php');
		}elseif ($_POST['ropa']=='pantalones') {
			header('Location: pantalones.php');
		}elseif($_POST['ropa']=='zapatos'){
			header('Location: zapatos.php');
		}elseif($_POST['ropa']=='volver'){
			header('Location: productos.php');
		}elseif($_POST['ropa']=='pagar'){
			header('Location: total.php');
		}
	}
?>