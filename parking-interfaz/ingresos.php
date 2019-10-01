<?php include("db.php"); 
$query = "SELECT count tipo FROM ingresos where tipo='CARRO'";
	$result = mysqli_query($conn, $query);

	echo $result;
?>

<?php include ("apple.php")?>

<div class="container p-4">
	<div class="row">
		<div class="col-md-3">

			<?php if(isset($_SESSION['message'])) { ?>
				<div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
				<?= $_SESSION['message'] ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			    </div>
			    <?php session_unset(); } ?> 

			<div class="">
				<form action="guardar_ingreso.php" method="POST">
					<div class="form-group">
						<p><b>INGRESE NUEVO SERVICIO</b></p>
						<input type="text" list="items" name="tipo" class="form-control" placeholder="tipo vehiculo" style="text-transform:uppercase;" autofocus required>
						<datalist id="items">
							<option >MOTO</option>
							<option >CARRO</option>
						</datalist>
					</div>
					<div class="form-group">
						<input type="text" name="placa" class="form-control" placeholder="ingrese placa" style="text-transform:uppercase;" minlenght="6" maxlength="6" autofocus required>
					</div>
					<input type="submit" class="btn btn-success btn-block" name="guardar_ingreso" value="REGISTRAR">
				</form>
			</div>
		</div>

	<div class="col-md-9">
		<table class="tbl table-bordered tbl01">
			<form action="buscar_ingresos.php" method="POST">
				<div class="form-01 form-group" align="center">
					<h5>BUSQUEDA DE SERVICIO: </h5>
					<input type="text" id="campo" name="placa" placeholder="INGRESE PLACA" style="text-transform:uppercase;" autofocus required  maxlength="6" minlenght="6">
					<br>
					<br>
					<input type="submit" class="btn-sub" id="buscar" name="buscar_ingresos" value="BUSCAR"><br>
				</div>
			</form>

		<form action="prefactura_servicio.php" method="POST">
			<thead>
				<tr align="center">
					<th>TIPO DE VEHICULO</th>
					<th>PLACA</th>
					<th>FECHA Y HORA INGRESO</th>
					<th>ACCIONES</th> 
				</tr>
			</thead>
			<tbody>
				<?php 
					 $query = "SELECT * FROM ingresos WHERE estado = 'ABIERTO' order by fecha_hora_ingreso desc ";	
					 $result_ingresos = mysqli_query($conn, $query);

					 while($row = mysqli_fetch_array($result_ingresos)){ ?>
					 	<tr align="center">
					 		<td align="center"><?php echo $row['tipo']?></td>
					 		<td align="center"><?php echo $row['placa']?></td>
					 		<td align="center"><?php echo $row['fecha_hora_ingreso']?></td>
					 		<td align="center">
					 			<!--<a href="prefactura_servicio.php?id=<?php echo $row['id']?>" class="btn btn-secondary" type="submit" name=" detener_tiempo">
					 			<i class="fas fa-stopwatch"></i>
					 			</a>-->	
					 			<a href="Eliminar_ingresos.php?id=<?php echo $row['id']?>" class="btn btn-danger">
					 			<i class="far fa-trash-alt"></i>	
					 			</a >
					 		</td>
					 	</tr>
					 <?php } ?>	
			</tbody>
		</table>
	</div>
 </div>
</form>

 