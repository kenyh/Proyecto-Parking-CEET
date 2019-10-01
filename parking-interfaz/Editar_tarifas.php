<?php

include("db.php");

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "SELECT * FROM tarifa WHERE id = $id";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) ==1) {
		$row = mysqli_fetch_array($result);
		$tipo= $row['tipo'];
		$costo_minuto = $row['costo_minuto'];
	}
}

if (isset($_POST['update'])) {
	$id = $_GET['id'];
	$costo_minuto = $_POST['costo_minuto'];

	$query = "UPDATE tarifa set costo_minuto ='$costo_minuto' WHERE id = $id";
	mysqli_query($conn, $query);

	$_SESSION['message'] = 'TARIFA ACTUALIZADA';
	$_SESSION['message_type'] = 'success';  
	header("Location: tarifas.php");

}
?>

<?php include ("apple.php")?>

<div class="container p-4">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card card-body">
				<form action="Editar_tarifas.php?id= <?php echo $_GET['id']; ?>" method="POST">
					<div class="form-group">
						<h4><p align="center"> <b>ACTUALIZACION TARIFAS PAR-KING</b></p></h4>
						<p><b>TIPO DE VEHICULO:<input type="text" name="tipo" value="<?php echo $tipo; ?>" class="form-control" placeholder="update title" disabled required></b></p>
					</div>
					<div class="form-group">
						<p><b>COSTO NUEVO TARIFA:<input type="number" name="costo_minuto" rows="2" required class="form-control" placeholder="ACTUALIZAR COSTO" <?php echo $costo_minuto; ?> ></b></p>
					</div>
					<button class="btn-sub" name="update" align="center">
						ACTUALIZAR
					</button>
				</form>
				
			</div>
		</div>
		
	</div>
	
</div>

<?php include ("includes_tarifas/footer_tarifas.php")?>