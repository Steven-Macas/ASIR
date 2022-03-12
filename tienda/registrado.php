<?php

	require_once ("datos_bd.php");
	require_once ("maneja_bd.php");
	require_once ("maneja_productos.php");
	//Para conectar la base de datos
				//mysql:host=localhost,prueba,root,""
	conecta_bd ($basedatos, $serv, $baseD, $user, $key);

	$nombre=$_POST['nombre'];
	$contrasena=$_POST['contrasena'];

	$consulta="insert into usuarios values (:nombreUsuario, :contrasena)";
	$sentencia=$basedatos->prepare($consulta);
	$sentencia->bindValue("nombreUsuario", $nombre);
	$sentencia->bindValue("contrasena", $contrasena);
	$sentencia->execute();

	header('Location: inicio.php');

?>