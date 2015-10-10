<!doctype html>
<html lang="es">
<head>
	<link rel="stylesheet" href="css/style.css">
	<meta charset="UTF-8">
	<title>Cartelera</title>
</head>
<body>
	
	<form action="delete.php" method="post">
		
		<div id="opcion">

		<label for="peliculas"><h2>Elige la pelicula a eliminar:</h2></label>

			<?php

				session_start();

				$_SESSION['array'];

				$cont=0;

				foreach ($_SESSION['array'] as $key) {

									
					echo "<input type='radio' name='peliculas' value='".$cont."'>";

					foreach ($key as $indice => $value) {

						echo $value. " ";  

					}

					echo "<br>";

					$cont++;
				}

			?>
		</div>
		<div id="enviar">
			<input type="submit">
		</div>
	</form>




</body>
</html>