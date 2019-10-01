<?php 

include("db.php"); 

if (isset($_POST['generarfactura'])) {
	$id = $_GET['id'];
	$tiempo_total = $_POST['tiempo_total'];

	$query = "UPDATE ingresos set tiempo_total ='$tiempo_total' WHERE id = $id";
	mysqli_query($conn, $query);

	header("Location: pago_servicio.php");

}
?>