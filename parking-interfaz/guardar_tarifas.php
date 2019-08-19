<?php 

include("db.php"); 

if (isset($_POST['guardar'])){

	$tipo = $_POST['tipo'];
	$costo_minuto = $_POST['costo_minuto'];

	$query = "INSERT INTO tarifa(tipo, costo_minuto) VALUES ('$tipo', '$costo_minuto')";
	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("query failed");
	}

	$_SESSION['message'] = 'tarifa guardada';
	$_SESSION['message_type'] = 'success';  

	header("Location: tarifas.php");	
}
?>
