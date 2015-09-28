<?php

include('cartelera.php');

// Muestro la posicion actual

echo  "<p class='listado'>Ultimo Valor: " . current(end($cine)) . "</p>";

echo  "<p class='listado'>Contenido Fila: ";

foreach (end($cine) as $key => $value) {
	 
	 echo $value. " ";
}

echo "</p>";