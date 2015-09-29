<?php

session_start();

$cine = $_SESSION['array'];

	//Avanzo tantas posiciones como indique la variable de puntero

	for($i=0;$i<=$_SESSION['i'];$i++){

		next($cine);

	}

	// Muestro el contenido


	echo  "<p class='listado'>Siguiente Valor: " . current(current($cine)) . "</p>";
	echo  "<p class='listado'>Siguiente Valor: ";

		foreach (current($cine) as $key => $value) {
			 
			 echo $value. " ";
		};

	echo "</p>";

	// Aumento la poscion si no llega al final del contenido del array

	if($_SESSION['i']<count($cine)-2){

		$_SESSION['i']++;

	}


