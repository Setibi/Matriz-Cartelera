<?php

session_start();

$cine = $_SESSION['array'];

	// Muestro el contenido del ultimo valor de la matriz

	echo  "<p class='listado'>Ultimo Valor: " . current(end($cine)) . "</p>";

	echo  "<p class='listado'>Contenido Fila: ";

		foreach (end($cine) as $key => $value) {
			 
			 echo $value. " ";
		};

	echo "</p>";

	// Indico a la variable de puntero que estoy en la ultima posicion

	$_SESSION['i'] = count($cine)-2;



