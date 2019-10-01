<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parking-CEET</title>
	

</head>
<body>

<?php include ("apple.php")?>

<?php include ("db.php") ?>
<div class="container p-4">
	<div class="row contenedor">
		<div class="col-md-4">

			<?php if(isset($_SESSION['message'])) { ?>
				<div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
				<?= $_SESSION['message'] ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			    </div>
			    <?php session_unset(); } ?> 

			<div class="card card-body">

				<!-- formulario de consulta-->

				<form action="guardar_tarifas.php" method="POST">
					<div class="form-group" align="center">
						<p><b>INGRESAR NUEVA TARIFA</b></p>
						<input type="text" list="items" name="tipo" class="form-control" placeholder="TIPO DE VEHICULO" autofocus required>
						<datalist id="items">
							<option >MOTO</option>
							<option >CARRO</option>
						</datalist>
					</div>
					<div class="form-group">
						<input type="number" name="costo_minuto" class="form-control" placeholder="COSTO MINUTO" autofocus required>	
					</div>
					<input type="submit" class="btn btn-success btn-block" name="guardar" value="GUARDAR">
 				</form>

			</div>
		</div>

		<div class="col-md-8">

			<table class="table table-bordered">
				<thead>
					<tr align="center">
						<th>"#"</th>
						<th>TIPO DE VEHICULO</th>
						<th>COSTO DE SERVICIO</th>
						<th>FECHA ACTUALIZACION</th>
						<th>ACCIONES</th> 
					</tr>	
				</thead>
				<tbody>
					<?php 
					 $query = "SELECT * FROM tarifa";
					 $result_tarifas = mysqli_query($conn, $query);

					 while($row = mysqli_fetch_array($result_tarifas)){ ?>

					 	<tr>
					 		<td align="center"><b><?php echo $row['id']?></b></td>
					 		<td align="center"><?php echo $row['tipo']?></td>
					 		<td align="center"><?php echo $row['costo_minuto']?></td>
					 		<td align="center"><?php echo $row['fecha_modificacion']?></td>
					 		<td>
					 			<a href="Editar_tarifas.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
					 			<i class="far fa-edit"></i>
					 			</a>
					 			<!--<a href="Eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">
					 			<i class="far fa-trash-alt"></i>
					 			</a >-->
					 		</td>
					 	</tr>
					 <?php } ?>
				</tbody>
			</table>	
		</div>
	</div>
</div>
