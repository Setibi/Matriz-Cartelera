<!doctype html>
<html lang="es">
<head>
	<link rel="stylesheet" href="css/style.css">
	<meta charset="UTF-8">
	<title>Cartelera</title>
</head>
<body>
	
	

	<form action="anadir.php" method="post">
		<div id="enviar">
		<h2>Añadir Pelicula</h2>
		</div>
		<label for="cine">Cine: </label>
		<input type="text" name="cine" id="cine" placeholder="Cinesa" required="required"><br>
		<label for="sala">Sala:</label>
		<input type="text" name="sala" id="sala" placeholder="Sala 2" required="required"><br>
		<label for="peli">Pelicula:</label>
		<input type="text" name="pelicula" id="pelicula" placeholder="El Rey Leon" required="required"><br>
		<label for="horario">Hora:</label>
		<input type="text" name="horario" id="horario" placeholder="22:00" required="required"><br>
		<div id="opcion">
			<label for="posicion">Posición:</label>
				<input type="radio" name="opcion" value="inicio" checked>Inicio
				<input type="radio" name="opcion" value="final">Final
		</div>
		<div id="enviar">
			<input type="submit" value="Guardar">
		</div>
	</form>

</body>
</html>