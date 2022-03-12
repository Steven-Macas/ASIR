<?php
	session_start();

	if (isset($_POST['iniciar'])) {
		if ($_POST['iniciar']=='Resgistrarse') {
			header('Location: registro.php');
		}else{
			header('Location: inicio.php');
		}
	}

?>