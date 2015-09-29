
<?php

session_start();

$cine = $_SESSION['array'];

	// Resetea el puntero, empieza otra vez en paso uno

	reset($cine);

	// Muestro el contenido

	echo  "<p class='listado'>Primer Valor: " . current(current($cine)) . "</p>";

	echo  "<p class='listado'>Contenido Fila: ";

		foreach (current($cine) as $key => $value) {
			 
			 echo $value. " ";
		};

	echo "</p>";

	// Pongo a 0 el valor de la variable de puntero

	$_SESSION['i'] = key(current($cine));

