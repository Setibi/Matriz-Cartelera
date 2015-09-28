<?php

include('cartelera.php');

for($i=0;$i<count($cine);$i++){

	echo "<p class='listado'>";

		for($j=0;$j<count($cine[$i]);$j++){

			

			if($j==1){

				echo " Pelicula: ";

			}elseif($j==2){

				echo " Hora: ";
			}

			echo $cine[$i][$j] ;

		}

	echo "</p>";
}

	
