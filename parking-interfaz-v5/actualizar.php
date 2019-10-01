<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Par-king</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>

<?php include ("apple.php") ?>

<?php

if (isset($_GET['id'])){
	$id = $_GET['id'];
	$query = "SELECT * FROM pk 	 where id = $id";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) ==1) {
		$row = mysqli_fetch_array($result);

		$id =$row['id'];
		$Documento =$_POST['Documento'];
		$Nombres =$row['Nombres'];
		$Correo =$_POST['Correo'];
		$Direccion =$_POST['Direccion'];
		$Telefono =$_POST['Telefono'];
		$username =$_POST['username'];
		$pass =$_POST['password'];
		$rol =$_POST['rol'];


		echo $id;
		echo $Documento;
		echo $Nombres;
		echo $Correo;
		echo $Direccion;
		echo $Telefono;
		echo $username;
	}

}

?>



<div class="container p-4">
	<div class="row contenedor">
		<div class="col-md-7 mx-auto">
			<div class="card card-body">
				<form name="registerform" id="registerform" action="actualizar.php?id=<?php echo $_GET['id']; ?>" method="post">
					<div class="form-group">
						<p>Nombre completo<input type="text" name="Nombres"  value="<?php echo $row['Nombres'] ?>" class="form-control" disabled></p>
					</div>
					<div class="form-group">
						<p>Documento de identidad<input type="text" name="Documento de identidad" value="<?php echo $row['Documento'] ?>" class="form-control" disabled></p>
					</div>
					<div class="form-group">
						<p>Nombre de usuario<input type="text" name="NomUsuario" value=" <?php echo $row['Usuario'] ?> " class="form-control" disabled></p>
					</div>
					<div class="form-group">
						<p>Contraseña<input type="text" name="contraseño" value=" <?php echo $row['pass'] ?> " class="form-control" disabled></p>
					</div>
					<div class="form-group">
						<p>Correo<input type="text" name="E-mail" value=" <?php echo $row['Correo'] ?> " class="form-control"></p>
					</div>
					<div class="form-group">
						<p>Telefono<input type="text" name="Telefono" value=" <?php echo $row['Telefono'] ?> " class="form-control" disabled></p>
					</div>
					<div class="form-group">
						<p>Dirección<input type="text" name="Dirección" value=" <?php echo $row['Direccion'] ?> " class="form-control" disabled></p>
					</div>
					<center>
					<input type="submit" value="actualizar" class="button btn-sub" name="btn-actualizar">
					<a href="apple.php" class="btn btn-info">Volver a menu</a>
					</center>

				</form>
			</div>
		</div>
	</div>


<?php
	include("conexion.php");
	if (isset($_POST['btn-actualizar']))
	{
		$Documento =$_POST['Documento'];
		$Nombres =$_POST['Nombres'];
		$Correo =$_POST['Correo'];
		$Direccion =$_POST['Direccion'];
		$Placa =$_POST['Placa'];
		$Vehiculo =$_POST['Vehiculo'];
		//ACTUALIZAR
		$_UPDATE_SQL="UPDATE $table_name set Documento='$Documento', Nombres='$Nombres', Correo='$Correo', Direccion='$Direccion', Placa='$Placa',Vehiculo='$Vehiculo' WHERE Documento='$Documento'";
		mysqli_query($conexion,$_UPDATE_SQL);
		echo "el documento fue actualizado";

	}
?>
</body>


