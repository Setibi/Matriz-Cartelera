<?php

session_start();

$cine = $_SESSION['array'];

	//Avanzo tantas posiciones como indique la variable de puntero

	for($i=0;$i<=$_SESSION['i'];$i++){

		next($cine);

	}

	// Retrocedo una posicion

	prev($cine);

	//Muestro el contenido


	echo  "<p class='listado'>Valor Anterior: " . current(current($cine)) . "</p>";

	echo  "<p class='listado'>Siguiente Valor: ";

		foreach (current($cine) as $key => $value) {
			 
			 echo $value. " ";
		};

	echo "</p>";

	// Reduzco una poscion el valor de la variable de puntero

	if($_SESSION['i']>0){

		$_SESSION['i']--;

	}