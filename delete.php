<?php	
	session_start();

	$temp=$_SESSION['array'];

	// CAPTURO LA VARIABLE QUE SE ENVIA DESDE EL FORMULARIO

	echo $_POST['peliculas'];

	// ELIMINO EL ARRAY DE DICHA POSICION

	unset($temp[$_POST['peliculas']]);

	// REORDENO LOS INDICES DEL ARRAY

	sort($temp);

	// ENVIO EL NUEVO ARRAY A LA VARIABLE DE SESION

	$_SESSION['array']=$temp;

	// VUELVO AL INDEX

	header('location:index.php');


?>