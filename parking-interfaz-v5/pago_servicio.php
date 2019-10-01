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
		$tiempo_total = $row['tiempo_total'];
		$costo_servicio = $row['costo_servicio'];


		echo $id;
		echo $tipo;
		echo $placa;
		echo $fecha_hora_ingreso;
		echo $fecha_hora_salida;
		echo $tiempo_total;
		echo $costo_servicio;
	} 

}

?>

<?php include ("includes_tarifas/header_tarifas.php")?>

<div class="container p-4">
	<div class="row">
		<div class="col-md-7 mx-auto">
			<div class="card card-body">
				<form action="pago_servicio.php?id=<?php echo $_GET['id']; ?>" method="POST">
					<div class="form-group">
						<p>No.FACTURA:<input type="text" name="id" value="<?php echo $id; ?>" class="form-control" disabled></p>
					</div>
					<div class="form-group">
						<p>TIPO VEHICULO:<input type="text" name="tipo" value="<?php echo $tipo; ?>" class="form-control" disabled></p>
					</div>
					<div class="form-group">
						<p>PLACA:<input type="text" name="placa" value="<?php echo $placa; ?>" class="form-control" disabled></p>
					</div>
					<div class="form-group">
						<p>FECHA/HORA INGRESO:<input type="text" name="fecha_hora_ingreso" value="<?php echo $fecha_hora_ingreso; ?>" class="form-control" disabled></p>
					</div>
					<div class="form-group">
						<p>FECHA/HORA SALIDA:<input type="text" name="fecha_hora_salida" value="<?php echo $fecha_hora_salida; ?>" class="form-control" disabled></p>
					</div>
					<div class="form-group">
						<p>TIEMPO TOTAL:<input type="text" name="tiempo_total" value="<?php echo $tiempo_total; ?>" class="form-control" disabled></p>
					</div>
					<div class="form-group">
						<p>COSTO SERVICIO:<input type="text" name="costo_servicio" value="<?php echo $costo_servicio; ?>" class="form-control" disabled></p>
					</div>
					<button class="btn btn-success" name="cancelar">
						CANCELAR SERVICIO
					</button>
				</form>
			</div>
			
		</div>
		
	</div>
	
</div>

<?php include ("includes_tarifas/footer_tarifas.php")?>

