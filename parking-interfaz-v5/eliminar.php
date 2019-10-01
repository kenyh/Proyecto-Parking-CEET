<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parking-CEET</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>

<?php include ("apple.php")?>

<div class="container mregister">
		<div id="login">
			<h3>Eliminar</h3><br/>
			<p>Ingrese numero de documento que desea eliminar</p>
			<form name="registerform" id="registerform" action="eliminar.php" method="post">
			<input class=""type="text" name="Documento"  placeholder="Documento de Identidad"></input><br /><br />


			<center>
				<input type="submit" value="eliminar" class="button" name="btn-eliminar"></input>
					<a href="menu-ejemplo.php" class="btn btn-info">Volver a menu</a>
			</center>

			</form>
		</div>
	</div>

	<?php
		include("conexion.php");
		if (isset($_POST['btn-eliminar']))
	{
		$Documento = $_POST['Documento'];
		$existe=0;

		if ($Documento =="")
		{
			echo "el Documento es un campo obligatorio";
		}
		else
		{
			//CONSULTAR
			$resultados = mysqli_query($conexion,"SELECT * FROM $table_name WHERE Documento = '$Documento'");
			while($consulta = mysqli_fetch_array($resultados))
			{
				echo $consulta['Documento']. "<br>";
				echo $consulta['Nombres']. "<br>";
				echo $consulta['Correo']. "<br>";
				echo $consulta['Direccion']. "<br>";
				$existe++;
			}

			if ($existe==0) {
					echo "el documento no existe";
			}

			else
			{
				//ELIMINAR
				$_DELETE_SQL =  "DELETE FROM $table_name WHERE Documento = '$Documento'";
  				mysqli_query($conexion,$_DELETE_SQL);
  				echo "el documento fue eliminado";
			}
		}
	}

	?>