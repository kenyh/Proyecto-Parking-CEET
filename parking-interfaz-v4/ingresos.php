<?php include("db.php")?>
<?php include ("includes_ingresos/header_ingresos.php")?>

<div class="container p-4">
	<div class="row">
		<div class="col-md-3">


			<div class="card card-body">
				<form action="guardar_ingreso.php" method="POST">
					<div class="form-group">
						<input type="text" list="items" name="tipo" class="form-control" placeholder="tipo vehiculo" style="text-transform:uppercase;" autofocus required>
						<datalist id="items">
							<option >MOTO</option>
							<option >CARRO</option>
						</datalist>
					</div>
					<div class="form-group">
						<input type="text" name="placa" class="form-control" placeholder="ingrese placa" style="text-transform:uppercase;" maxlength="6" autofocus required>
					</div>
					<input type="submit" class="btn btn-success btn-block" name="guardar_ingreso" value="REGISTRAR">
				</form>
			</div>
		</div>

	<div class="col-md-9">
		<table class="table table-borderer">
			<form action="buscar.php" method="POST">
			<b>UBICAR-SERVICIO</b> <br> <input type="text" id="campo" name="placa" placeholder="INGRESE PLACA">
			<input type="submit" class="btn btn-info" id="buscar" name="buscar" value="BUSCAR">
			<br><br>
		</form>

		<form action="pago_servicio.php" method="POST">
			<thead>
				<tr>
					<th>TIPO DE VEHICULO</th>
					<th>PLACA</th>
					<th>FECHA Y HORA INGRESO</th>
					<th>ACCIONES</th>
				</tr>
			</thead>
			<tbody>
				<?php
					 $query = "SELECT * FROM ingresos";
					 $result_ingresos = mysqli_query($conn, $query);

					 while($row = mysqli_fetch_array($result_ingresos)){ ?>
					 	<tr>
					 		<td><?php echo $row['tipo']?></td>
					 		<td><?php echo $row['placa']?></td>
					 		<td><?php echo $row['fecha_hora_ingreso']?></td>
					 		<td>
					 			<a href="pago_servicio.php?id=<?php echo $row['id']?>" class="btn btn-secondary" type="submit" name="detener_tiempo">
					 			<i class="fas fa-stopwatch"></i>
					 			</a>
					 		</td>
					 	</tr>
					 <?php } ?>
			</tbody>
		</table>
	</div>
 </div>
</form>


<?php include ("includes_tarifas/footer_tarifas.php")?>

