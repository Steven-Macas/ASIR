<?php

// Este archivo es para intentar la conexión con requires o includes por dos veces


function inserta_ciudad(&$bd, $identity, $nom){
 $sql = "insert into Ciudades values (:ident_ciu, :nombre)"; 
 $sentencia = $bd->prepare($sql); 
 foreach ($nom as $value) {
 	$sentencia->bindValue("ident_ciu", $identity);
 	$sentencia->bindValue("nombre", $value);
 	$identity++;
	
	$sentencia->execute();
 }
  
 

// Al insertar en las bases de datos, si la llave primaria está duplicada no muestra ningún fallo ni nada.
 // Hay que usar la funcion errorInfo() para saber si ha habido algún error o no
 // O tal vez usar un try-catch ESTUDIAR ESTAS POSIBILIDADES!!!!!!!!!!!!!!!

 $error = $sentencia->errorInfo();
 return $error;
}



function borra_ciudad(&$bd, $nom){
 $sql = "delete from Ciudades where nombre=:nombre"; 
 $sentencia = $bd->prepare($sql);  
 $sentencia->bindValue("nombre", $nom); 
 $sentencia->execute(); 

 $error = $sentencia->errorInfo();
 return $error;


}


function cambia_ciudad(&$bd, $ideciudad, $nom){
 $sql = "update Ciudades set nombre=:nombre where idCiudad = :identCiudad"; 
 $sentencia = $bd->prepare($sql);  
 $sentencia->bindValue("nombre", $nom);
 $sentencia->bindValue("identCiudad", $ideciudad); 
 $sentencia->execute(); 
}

 
function imprime_ciudades (&$bd){
	$consulta = "Select * from Ciudades";
	$resultado = $bd->prepare($consulta); 
	$resultado->execute(); 
	echo "<br />";
	while( $fila = $resultado->fetch() ) {    
		echo "El id es ".$fila['idCiudad']." y el nombre es ".$fila['nombre']."<br />";
	}
	$resultado->closeCursor(); 
}

function ultimo_id (&$bd){
	// OTRA CONSULTA SERÍA LA SIGUIENTE
	//$consulta = "Select * from Ciudades ORDER BY idCiudad DESC";

	$consulta = "Select Max(idCiudad) from Ciudades";
	$resultado = $bd->prepare($consulta); 
	$resultado->execute();

	$fila = $resultado->fetch();
	//var_dump ($fila);
	$numero = $fila["Max(idCiudad)"];
	$resultado->closeCursor(); 

	return ($numero);
}
function falta_id(&$bd){
	$consulta = "Select idCiudad from Ciudades";
	$resultado = $bd->prepare($consulta); 
	$resultado->execute();

	print_r($consulta);
}


?>