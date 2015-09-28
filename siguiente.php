<?php

include('cartelera.php');


echo  "<p class='listado'>Siguiente Valor: " . current(next($cine)) . "</p>";

foreach (next($cine) as $key => $value) {
	 
	 echo $value. " ";
}
