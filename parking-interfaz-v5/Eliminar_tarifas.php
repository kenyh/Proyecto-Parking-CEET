<?php

include("db.php");

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "DELETE FROM tarifa WHERE id = $id";
	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("Query failed");
	}

	$_SESSION['message'] = 'La tarifa ha sido eliminada';
	$_SESSION['message_type'] = 'danger';
	header("Location: tarifas.php");
}
?>