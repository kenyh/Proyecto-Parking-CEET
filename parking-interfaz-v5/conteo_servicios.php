<?php 

include("db.php"); 

$conteocarro = $_POST['conteocarro'];

	$query = "SELECT count tipo FROM ingresos where tipo='CARRO'";
	$result = mysqli_query($conn, $query);

	$conteoservicios=$result;

	echo $conteoservicios;
	
?>