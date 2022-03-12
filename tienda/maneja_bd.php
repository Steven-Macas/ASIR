<?php

// Inicializamos variables
function conecta_bd(&$bd, $servidor, $baseDatos, $usuario, $clave){

//Realizamos la conexión a la base de datos
	try{
	$bd =  new PDO('mysql:host=' . $servidor . ';dbname=' . $baseDatos,   
						$usuario, $clave,   
						array(PDO::ATTR_PERSISTENT => true,     
							  PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8') ); 
	} catch (PDOException $e) {   
		die ("ERROR: <br />".$e->getMessage()."<br />");
	}
}


function cierra_bd (&$bd){ 
	$bd = null;
}
?>