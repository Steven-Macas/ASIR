<?php
 	//Funcion para devolver una carta
 function fantasyRider($personaje){
	if(is_array($personaje)){
		$cartaArray["Nombre"]=$personaje[mt_rand(0,14)];
		$cartaArray["Ataque"]=mt_rand(1,10);
		$cartaArray["Defensa"]=mt_rand(1,10);
	}
	return $cartaArray;
 }
 //Funcion para que luchen
 function luchaFantasy($cartaPC,$cartaUser){
	 $key=array_keys($cartaPC);
	 echo "<div class='p5'>";
	 if($cartaPC[$key[1]]>$cartaUser[$key[1]]){
		echo "Ataca primero " . $cartaPC[$key[0]] . "<br/>";
		while($cartaPC[$key[2]]>0 && $cartaUser[$key[2]]>0){
		$cartaUser[$key[2]]=$cartaUser[$key[2]]-$cartaPC[$key[1]];
		if($cartaUser[$key[2]]<=0){
			echo $cartaUser[$key[0]] . " ha perdido todos sus puntos de defensa, ¡" . $cartaPC[$key[0]] . " es el ganador!<br/>";
		}elseif($cartaUser[$key[2]]>0){
			echo $cartaUser[$key[0]] . " ha recibido el ataque de " . $cartaPC[$key[0]] . ". Solo le quedan " . $cartaUser[$key[2]] . " de defensa<br/>";
			echo "Ahora ataca " . $cartaUser[$key[0]] . "<br/>";
			$cartaPC[$key[2]]=$cartaPC[$key[2]]-$cartaUser[$key[1]];
			if($cartaPC[$key[2]]<=0){
				echo $cartaPC[$key[0]] . " ha perdido todos sus puntos de defensa, ¡" . $cartaUser[$key[0]] . " es el ganador!<br/>";
			}elseif($cartaPC[$key[2]]>0){
			echo $cartaPC[$key[0]] . " ha recibido el ataque de " . $cartaUser[$key[0]] . ". Solo le quedan " . $cartaPC[$key[2]] . " de defensa<br/>";
			echo "Vuelve atacar " . $cartaPC[$key[0]]. "<br/>";
			}
		}
	}
	}elseif($cartaUser[$key[1]]>$cartaPC[$key[1]]){
		echo "Ataca primero " . $cartaUser[$key[0]] . "<br/>";
		while($cartaUser[$key[2]]>0 && $cartaPC[$key[2]]>0){
		$cartaPC[$key[2]]=$cartaPC[$key[2]]-$cartaUser[$key[1]];
		if($cartaPC[$key[2]]<=0){
			echo $cartaPC[$key[0]] . " ha perdido todos sus puntos de defensa, ¡" . $cartaUser[$key[0]] . " es el ganador!<br/>";
		}elseif($cartaPC[$key[2]]>0){
			echo $cartaPC[$key[0]] . " ha recibido el ataque de " . $cartaUser[$key[0]] . ". Solo le quedan " . $cartaPC[$key[2]] . " de defensa<br/>";
			echo "Ahora ataca " . $cartaPC[$key[0]] . "<br/>";
			$cartaUser[$key[2]]=$cartaUser[$key[2]]-$cartaPC[$key[1]];
			if($cartaUser[$key[2]]<=0){
				echo $cartaUser[$key[0]] . " ha perdido todos sus puntos de defensa, ¡" . $cartaPC[$key[0]] . " es el ganador!<br/>";
			}elseif($cartaUser[$key[2]]>0){
			echo $cartaUser[$key[0]] . " ha recibido el ataque de " . $cartaPC[$key[0]] . ". Solo le quedan " . $cartaUser[$key[2]] . " de defensa<br/>";
			echo "Vuelve atacar " . $cartaUser[$key[0]] . "<br/>";
			}
		}
	}
	}else echo "Tienen el mismo nivel de ataque, !Hay empate¡";
	echo "</div>";
 }
?>