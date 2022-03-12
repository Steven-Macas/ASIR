<?php
session_start();

if(empty($_POST['color'])){

	$_SESSION['elegido']="nada";
	header("Location: index.php");

}	
if(isset($_POST['fin'])){
	if($_POST['fin']=="fin"){
		header("Location: fin.php");
	}
}

if ($_POST['color']=="rojo") {

	$_SESSION['elegido']="rojo";
	header("Location: index.php");

}elseif($_POST['color']=="amarillo"){

	$_SESSION['elegido']="amarillo";
	header("Location: index.php");

}elseif($_POST['color']=="verde"){
	$_SESSION['elegido']="verde";
	header("Location: index.php");
}
	
?>