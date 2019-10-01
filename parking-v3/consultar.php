<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parking-CEET</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>


	<div class="container mregister">
		<div id="login">
			<h3>Consultar</h3><br/>
			<form name="registerform" id="registerform" action="consultar.php" method="post">
			<input class=""type="text" name="Documento"  placeholder="Documento de Identidad"></input><br /><br />


			<center>
				<input type="submit" value="Consultar" class="button" name="btn-consultar"></input>
					<a href="menu.php" class="btn btn-info">Volver a menu</a>
			</center>

			</form>
		</div>
	</div>

	<?php
	include("conexion.php");
	$Documento = "";
	$Nombres = "";
	$Correo = "";
	$Direccion ="";

	if (isset($_POST['btn-consultar']))
	{

		$Documento = $_POST['Documento'];
		$_SESSION['sesion_exito']=0;

		if ($Documento =="")
		{
			$_SESSION['sesion_exito']=2;//Error de campos vacio
			echo "
			<p style=\"color:red\" align=\"center\"><strong>
				campos vacios, es necesario que ingrese un numero de documento
			</strong></p>
			";
		}
		else
		{
			//CONSULTAR
			$resultados = mysqli_query($conexion,"SELECT * FROM $table_name WHERE Documento = '$Documento'");
			while($consulta = mysqli_fetch_array($resultados))
			{
					$_SESSION['sesion_exito']=1;//ingreso a base de datos izo la cosulta
					echo"
						<table class=\"table table table-striped\" >
							<tr>
								<td>
									<lavel for=\"documento\"><b>Documento:</b></lavel>
								</td>
								<td>
									".$consulta['Documento']."</td>
								</td>
							</tr>
							<tr>
								<td>
									<lavel for=\"nombre\"><b>Nombres:</b></lavel>
								</td>
								<td>
									".$consulta['Nombres']."
								</td>
							</tr>
							<tr>
								<td>
									<lavel for=\"apellido\"><b>Correo:</b></lavel>
								</td>
								<td>
									".$consulta['Correo']."
								</td>
							</tr>
							<tr>
								<td>
									<lavel for=\"telefono\"><b>Direccion:</b></lavel>
								</td>
								<td>
									".$consulta['Direccion']."</td>
								</td>
							</tr>
						</table>
						";
				}
			}

			if($_SESSION['sesion_exito']<>1 AND $_SESSION['sesion_exito']<>2)
					{
						echo"
							<p style=\"color:red\" align=\"center\" ><strong>
								Los datos son incorrectos, o no existen en la base de datos. Vuelva a intentarlo nuevamente.
							</strong></p>
							";
					}
				}


?>