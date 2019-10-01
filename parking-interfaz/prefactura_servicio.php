<?php include("db.php");

if (isset($_GET['id'])){
	$id = $_GET['id'];
	$query = "SELECT * FROM ingresos where id = $id";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) ==1) {
		$row = mysqli_fetch_array($result);
		
		$id =$row['id'];
		$tipo = $row['tipo'];
		$placa =$row['placa'];
		$fecha_hora_ingreso = $row['fecha_hora_ingreso'];
		$fecha_hora_salida = $row['fecha_hora_salida'];
		
		//echo $id;//
		//echo $tipo;//
		//echo $placa;//
		//echo $fecha_hora_ingreso;//
		//echo $fecha_hora_salida;//
		//echo $tiempo_total;
	
	} 

}

$query = "SELECT costo_minuto from tarifa inner join ingresos on tarifa.tipo = ingresos.tipo where ingresos.id = '$id'"; 
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) ==1) {
		$row = mysqli_fetch_array($result);
		$costo_minuto =$row['costo_minuto'];

		//echo $costo_minuto;	

}
	
	if (isset($_POST['cerrarservicio'])) {
	$id = $_GET['id'];
	$tiempo_total = $_POST['tiempo_total'];

	$query = "UPDATE ingresos set costo_servicio = '$costo_minuto' , estado = 'CERRADO'  WHERE id = $id";
	mysqli_query($conn, $query);

	header("Location: ingresos.php");

}


?>

<?php include ("includes_tarifas/header_tarifas.php")?>

<div class="container p-2">
	<div class="row">
		<div class="col-md-4 mx-auto">
			<div class="card card-body">
				<form action="prefactura_servicio.php?id=<?php echo $_GET['id']; ?>" method="POST">
					<div class="form-group">
						<p align="center"> <b>PARQUEADERO PAR_KING</b></p>
						<p align="center"><b> BARRIO EL TRIUNFO KR 12 BIS C # 42 B 10 SUR </b></p>
						<p align="center"> <b>NIT ********-*</b></p>
						<p align="center"><b >REGIMEN COMUN</b></p>
						<p align="center">NO SOMOS GRANDES CONTRIBUYENTES</p>
						<p align="center"> <?php  $fechaActual = date('d-M-Y'); echo $fechaActual; ?>	</p>
					</div>
					<div class="form-group">
						<p><b>No FACTURA: <input type="text" name="tipo" value="<?php echo $id; ?>" class="form-control" disabled></b></p>
					</div>
					<div class="form-group">
						<p><b> TIPO VEHICULO: <input type="text" name="tipo" value="<?php echo $tipo; ?>" class="form-control" disabled></b></p>
					</div>
					<div class="form-group">
						<p><b>PLACA:<input type="text" name="placa" value="<?php echo $placa; ?>" class="form-control" disabled></b></p>
					</div>
					<div class="form-group">
						<p><b>FECHA/HORA INGRESO:<input type="text" name="fecha_hora_ingreso" value="<?php echo $fecha_hora_ingreso; ?>" class="form-control" disabled></b></p>
					</div>
					<div class="form-group">
						<p><b>COSTO SERVICIO:<input type="text" name="costo_servicio" value="<?php echo $costo_minuto; ?>" class="form-control" disabled></b></p>
					</div>
					<button class="btn btn-success" name="cerrarservicio">
						CERRAR SERVICIO
					</button>
				</form>
			</div>
			
		</div>
		
	</div>
	
</div>