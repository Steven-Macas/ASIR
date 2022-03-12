<html>
 <head>
 <title>Fantasy Riders</title>
 <meta charset='utf-8'/>
 <meta name="author" content="Roberth Steven Macas Ordóñez"/>
 <meta name="description" content="En esta página se jugará al juego de fantasy rider donde el jugador crea su carta y jugará contra el ordenador"/>
 <meta name="keywords" content="fantasy rider, juegos,php"/>
 <link rel="shortcut icon" href="imagenes/logo.png" />
  <style>
	body{
	background-color: yellow;
	color:white;
	width:50%;
	margin: auto;
	}
	fieldset{
		padding-left:50px;
		width:35%;
		background-color:white;
		color: black;
	}
	legend.for1{
		background-color:black;
		color:white
	}

	div.pro1{
		background-color:orange;
		margin-top:100px;
		padding-top:5px;
		padding-bottom:40px;
	}
	form{
		margin-left	:250px;
		margin-bottom: 20px;
	}
	h1{
		text-align:center;
		margin:10%;
		font-family:Lucida Console;
	}
	<!--Soy muy malo haciendo el estilo-->

  </style>
 </head>
 <body>
	<!--Tenemos unas cartas cuyos nombres pueden ser:
	"Chatarrero", "Huago", "Amazona", "Sherezade", "Grantrasgo", "Conjurador", "Dragón", 
	"Halito", "Lanza", "Elfo", "Hoplita", "Gnomo", "Rakasha", "Valquiria", "NoVida".

	Bien, vamos a generar un formulario en el que vamos a mostrar mediante una lista desplegable todos los
	nombres posibles de los Fantasy Riders. También tendrá un campo numérico en el que vamos a seleccionar los
	puntos de ataque y otro que serán los puntos de defensa.

	A la hora de clickar en el submit vamos a irnos a un código php en el que genero una carta aleatoria y 
	muestro quién es el ganador, si el usuario o nosotros.-->
	
 <div class="pro1">
	 <h1>Fantasy Riders</h1>
	 <form action=mainfantasy.php method="post">
		<fieldset>
		 <legend class="for1">Characters</legend>
		 <label for="name">Character Name</label><br/>
		 <select id="name" name="personaje">
		 
			<?php
			//Aquí definimos el array con los personajes que vamos a usar para el juego
			 $nombreFantasy= array("Chatarrero", "Huago", "Amazona", "Sherezade", "Grantrasgo", "Conjurador", "Dragon", "Halito", "Lanza", "Elfo", "Hoplita", "Gnomo", "Rakasha", "Valquiria", "NoVida");
				foreach($nombreFantasy as $personaje){
					echo "<option value='$personaje'>". strtoupper($personaje) . "</option>";
				}
			?>
		 </select><br/> <br/>

		 <label for="attack">Attack</label>
		 <input type="number" id="attack" name="ataque" min="1" max="10" maxlength="2" required /> <br/><br/>

		 <label for="defense">Defense</label>
		 <input type="number" id="defense" name="defensa" min="1" max="10" required /><br/><br/>
		 
		 <input type="submit" value="Fight!"/><br/>
		</fieldset>
	 </form>
 </div>
 </body>
</html>