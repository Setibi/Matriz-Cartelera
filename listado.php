<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Listado</title>
	<link rel="stylesheet" href="css/style.css">
	<script type='text/javascript' src='js/jquery-1.7.1.min.js'></script>
	<script>
		$(document).ready(function(){

    		$("#cine").click(function(){
        		$("#peliculas").hide();
        		$("#cines").show();
    		});


    		$("#peli").click(function(){
    			$("#cines").hide();
        		$("#peliculas").show();
    		});

    	});
	</script>

</head>
<body>

	<?php

		session_start();

		$cine = $_SESSION['array'];

	?>

	<div class='link white' id="cine" >Listar Cine y Sala</div><br/>
    <div class='link white' id="peli" >Listar por Peliculas</div><br/>
	
	<div id="cines" style="display:none">

		<?php

		// Recorro todo el array para mostrar sus valores

		// Listar Cine y Sala 

		for($i=0;$i<count($cine);$i++){

			echo "<p class='listado'>";

				for($j=0;$j<2;$j++){

					if($j==0){

						echo " Cine: ";

					}elseif($j==1){

						echo " ==> ";
					}

					echo $cine[$i][$j] ;

				}

			echo "</p>";
		}

		?>

	

	</div>


	<div id="peliculas" style="display:none">

		<?php

		// Recorro todo el array para mostrar sus valores

		// Listar Cine y Sala o Pelicula 

		for($i=0;$i<count($cine);$i++){

			echo "<p class='listado'>";

					echo " Pelicula: ";

					echo $cine[$i][2] ;

			echo "</p>";
		}

		?>
		
	</div>


</body>
</html>