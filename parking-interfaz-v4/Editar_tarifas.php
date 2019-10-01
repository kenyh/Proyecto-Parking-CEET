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
	$tipo = $_POST['tipo'];
	$costo_minuto = $_POST['costo_minuto'];

	$query = "UPDATE tarifa set tipo='$tipo', costo_minuto='$costo_minuto' WHERE id = $id";
	mysqli_query($conn, $query);

	$_SESSION['message'] = 'tarifa actualizada';
	header("Location: tarifas.php");

}
?>

<?php include ("includes_tarifas/header_tarifas.php")?>

<div class="container p-4">
	<div class="row">
		<div class="col-md-4 mx-auto">
			<div class="card card-body">
				<form action="Editar_tarifas.php?id= <?php echo $_GET['id']; ?>" method="POST">
					<div class="form-group">
						<input type="text" name="tipo" value="<?php echo $tipo; ?>" class="form-control" placeholder="update title">
					</div>
					<div class="form-group">
						<input type="text" name="costo_minuto" rows="2" class="form-control" placeholder="actualizar costo" <?php echo $costo_minuto; ?> >
					</div>
					<button class="btn btn-success" name="update">
						actualizar
					</button>
				</form>
				
			</div>
		</div>
		
	</div>
	
</div>

<?php include ("includes_tarifas/footer_tarifas.php")?>