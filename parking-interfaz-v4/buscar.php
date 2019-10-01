<?php

include("db.php");

$where="";

if (!empty($_POST)){

	$valor=$_POST['´buscar'];
	if (empty($valor)){
		$where = "where placa='$nombre'";
	}
}

$sql = "SELECT * FROM ingresos $where";
$resultado = $mysqli->query($sql);
?>