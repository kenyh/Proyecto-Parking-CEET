<?php 

include("db.php"); 

if (isset($_POST['detener_tiempo'])){

	$fecha_hora_salida = $_POST['fecha_hora_salida'];

	$query = "INSERT INTO ingresos (fecha_hora_salida) VALUES (CURDATE())";
	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("query failed");
	}

	header("Location: pago_servicio.php");	
}
?>