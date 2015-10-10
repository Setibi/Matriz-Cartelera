<?php

	session_start();

	$_SESSION['array'];

	$contenido = array($_POST['cine'],$_POST['sala'],$_POST['pelicula'],$_POST['horario']);

	if($_POST['opcion'] == 'inicio'){

		array_unshift($_SESSION['array'], $contenido);

	}else{


		array_push($_SESSION['array'], $contenido);

	}

	

	header('location:index.php');


?>