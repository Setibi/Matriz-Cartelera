
<?php

include('cartelera.php');

// Resetea el puntero, empieza otra vez en paso uno

reset($cine);

// Muestro la posicion actual

echo  "<p class='listado'>Primer Valor: " . current(current($cine)) . "</p>";

echo  "<p class='listado'>Contenido Fila: ";

foreach (current($cine) as $key => $value) {
	 
	 echo $value. " ";
}

echo "</p>";