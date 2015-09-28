<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cartelera</title>
    <link rel="stylesheet" href="css/style.css">
	<script type='text/javascript' src='js/jquery-1.7.1.min.js'></script>
	<script type='text/javascript' src='js/cargar_div.js'></script>
</head>
<body>
	
	<div id="menu">
    	<h1>Menu Cartelera</h1>	

    	<div class='link white' onclick="cargarContenido('primer.php')">Ir al primero</div><br/>
    	<div class='link white' onclick="cargarContenido('siguiente.php')">Ir al siguiente</div><br/>
    	<div class='link white' onclick="cargarContenido('anterior.php')">Ir al anterior</div><br/>
    	<div class='link white' onclick="cargarContenido('ultimo.php')">Ir al ultimo</div><br/>
    	<div class='link white' onclick="cargarContenido('listado.php')">Mostrar listado</div><br/>

    </div>
        
    <div id='contenido'></div>
    

</body>
</html>