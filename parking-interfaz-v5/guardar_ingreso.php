<?php 

include("db.php"); 

if (isset($_POST['guardar_ingreso'])){

	$tipo = $_POST['tipo'];
	$placa= $_POST['placa'];

	$query = "INSERT INTO ingresos(tipo, placa) VALUES ('$tipo', '$placa')";
	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("query failed");
	}

	$_SESSION['message'] = 'REGISTRO GUARDADO';
	$_SESSION['message_type'] = 'success';  

	header("Location: ingresos.php");	
}
?>

