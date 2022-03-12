<?php
session_start();
if(isset($_POST['Actor'])){
	if(isset($_POST['Actriz'])){
		$finalR=$_POST['Actor'];
		$finalZ=$_POST['Actriz'];
		$array1=count($finalR);
		$array2=count($finalZ);
		if ($array1>1) {
			if ($array2>1) {
				$_SESSION['error']='Ambos';
				header("Location: muestraActores.php");
			}else{
				$_SESSION['error']='Actor';
				header("Location: muestraActores.php");
			}
		}elseif($array2>1){
			$_SESSION['error']='Actriz';
			header("Location: muestraActores.php");
		}//elseif($array1<1 || $array2<1){
		//	$_SESSION['error']='Ninguno';
		//	header("Location: muestraActores.php");
		//}
	}
}
if(!isset($_POST['Actor']) || !isset($_POST['Actriz'])){
	$_SESSION['ninguno']='algo';
	header("Location: muestraActores.php");
}

?>
<!DOCTYPE html>
<html lang="es">
 <head>
	<title>Mclovin</title>
	<meta charset="utf-8"/>
	<meta name="author" content="Roberth Steven Macas Ordóñez"/>
	<link type="text/css" rel="stylesheet" href="formulario.css"/>
	<style>
		img{
			width:400px;
			height: auto;
		}
	</style>
 </head>
 <body>
 	<h1>Concurso</h1>
	<?php
	//ultima modificacion
	if ($array1==1 && $array2==1) {
		$finalR=$_POST['Actor'][0];
		$finalZ=$_POST['Actriz'][0];
		if(isset($finalR) && isset($finalZ)){
			if($finalZ==$_SESSION['Actriz'] && $finalR==$_SESSION['Actor']){
			$f=0;
			$_SESSION["Puntuacion"]=0;
			$_SESSION["Puntuacion"]=$_SESSION["Puntuacion"]+10;
		}elseif ($finalZ==$_SESSION['Actriz'] || $finalR==$_SESSION['Actor']) {
			$f=1;
			$_SESSION["Puntuacion"]=0;
			$_SESSION["Puntuacion"]=$_SESSION["Puntuacion"]+5;
		}else{
			$f=2;
			$_SESSION["Puntuacion"]=0;
			$_SESSION["Puntuacion"]=$_SESSION["Puntuacion"]+1;
		}

		if($f==0){
			echo "<h3>¡Enhorabuena! Has acertado a los dos protagonistas</h3>";
			echo "<img src='imagenes/enhorabuena.jpg'/>";
		}elseif($f==1){
			echo "<h3>¡Uff Casi! Has acertado un protagonista</h3>";
			echo "<img src='imagenes/casi.jpg'/>";
		}elseif($f==2){
			echo "<h3>¡Vaya...! No has acertado ninguno de los dos protagonistas</h3>";
			echo "<img src='imagenes/fallaste.jpg'/>";
			$_SESSION["Puntuacion"]=$_SESSION["Puntuacion"]-1;
		}
		$_SESSION['Suma']=$_SESSION['Suma']+$_SESSION['Puntuacion'];
		}
	}
		
	?>
	<div>
		<a href="login2.php">Siguiente Ronda</a>
		<a href="fin.php">Finalizar Juego</a>
	</div>
 </body>
</html>