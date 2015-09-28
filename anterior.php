<?php

include('siguiente.php');


echo  "<p class='listado'>Valor Anterior: " . current(prev($cine)) . "</p>";

foreach (prev($cine) as $key => $value) {
	 
	 echo $value. " ";
}
