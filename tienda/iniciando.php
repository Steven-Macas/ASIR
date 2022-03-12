<?php
	session_start();

	require_once ("datos_bd.php");
	require_once ("maneja_bd.php");
	require_once ("maneja_productos.php");
	//Para conectar la base de datos
				//mysql:host=localhost,prueba2,root,
	conecta_bd ($basedatos, $serv, $baseD, $user, $key);

	$nombre=$_POST['nombre'];
	$contrasena=$_POST['contrasena'];

	$consulta="select * from usuarios where nombreUsuario= :nombreUsuario";
						   //Hacemos el blindaje
	$sentencia=$basedatos->prepare($consulta);
	$sentencia->bindValue("nombreUsuario", $nombre);
	$sentencia->execute();
	if ($fila = $sentencia->fetch()) {
		if ($fila['contraseña']==$contrasena) {
			$_SESSION['nombre']=$nombre;
			header('Location: productos.php');
		}else{
			$_SESSION['error']='incorrectos';
			header('Location: inicio.php');
		}
	}else{
		$_SESSION['error']='incorrectos';
			header('Location: inicio.php');
	}
	$sentencia->closeCursor();
	cierra_bd($basedatos);

?>