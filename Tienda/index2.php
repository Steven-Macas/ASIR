<?php
	session_start();

	require_once("funciones.php");
	
	if (isset($_POST['nombre'])) {
		$_SESSION['nombre']=$_POST['nombre'];
	}
	if(isset($_POST['ropa'])){
		if ($_POST['ropa']=='camisetas') {
		$_SESSION['comprar']="mas";
		header("Location: camisetas.php");
		}elseif ($_POST['ropa']=='pantalones') {
			$_SESSION['comprar']="mas";
			header("Location: pantalones.php");
		}elseif($_POST['ropa']=='zapatos'){
			$_SESSION['comprar']="mas";
			header("Location: zapatos.php");
		}elseif($_POST['acabar']=='fin'){
			header("Location: total.php");
		}
	}
	if (!isset($_POST['ropa'])) {
		$_SESSION['error']='si';
		header('Location: index.php');
	}
	if (isset($_POST['volverCamisetas'])) {
		guardarCamisetas($_POST['camisetas']);
		if ($_POST['volverCamisetas']=='Volver') {
			header('Location: index.php');
		}elseif($_POST['volverCamisetas']=='Pagar'){
			header('Location: total.php');
		}
	}

	if (isset($_POST['volverPantalones'])) {
		guardarPantalones($_POST['pantalones']);
		if ($_POST['volverPantalones']=='Volver') {
			header('Location: index.php');
		}elseif($_POST['volverPantalones']=='Pagar'){
			header('Location: total.php');
		}
	}

	if (isset($_POST['volverZapatos'])) {
		guardarZapatos($_POST['zapatos']);
		if ($_POST['volverZapatos']=='Volver') {
			header('Location: index.php');
		}elseif($_POST['volverZapatos']=='Pagar'){
			header('Location: total.php');
		}
	}
	
?>