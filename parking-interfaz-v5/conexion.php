<?php
	$host_db ="localhost";
	$user_db ="root";
	$pass_db ="";
	$basename ="parking ceet";
	$table_ingresos = "ingresos";

	$conexion = new mysqli($host_db, $user_db, $pass_db, $basename);

	if ($conexion) {
		//echo "conexion exitosa";
	}
	else
	{
		echo "error de conexion";
	}
?>