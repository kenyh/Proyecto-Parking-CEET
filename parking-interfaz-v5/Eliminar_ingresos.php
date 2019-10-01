<?php

include("db.php");

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "DELETE FROM ingresos WHERE id = $id";
	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("Query failed");
	}

	$_SESSION['message'] = 'SERVICIO ELIMINADO';
	$_SESSION['message_type'] = 'danger';
	header("Location: ingresos.php");
}
?>