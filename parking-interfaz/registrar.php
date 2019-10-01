<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parking-CEET</title>
	<!-- <link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
	<script src="js/validate.js"></script>

</head>
<body>

<?php include('apple.php') ?>

	<div class="contenedor">
		<div id="login">
			<h3>REGISTRAR USUARIO</h3><br/>
			<form name="registerform" id="registerform" action="registrar.php" method="post">
			<input class=""type="text" name="Documento" pattern="[0-9]*" placeholder="Documento de Identidad"><br /><br />
			<input class=""type="text" name="Nombres"  placeholder="Nombre Completo"><br /><br />
			<input class=""type="text" name="Correo"  placeholder="E-mail"><br /><br />
			<input class=""type="text" name="Direccion"  placeholder="Direccion"><br /><br />
			<input class=""type="text" name="Telefono"  placeholder="Telefono"><br /><br />
			<input class=""type="text" name="username" placeholder="Nombre de Usuario"><br /><br />
			<input class=""type="password" name="password" placeholder="Contraseña"><br /><br />
			<div>
				<input type="submit" value="Registrar" class="button btn-sub" name="btn-registrar">
				<input type="button" class="btn-home" value="Volver al menú"  onclick="location.href = 'apple.php'"></button>
			</div>

		</div>
	</div>

<?php
	include("conexion_PK.php");
	$Documento = "";
	$Nombres = "";
	$Correo = "";
	$Direccion ="";


	if (isset($_POST['btn-registrar']))
	{
		$Documento =$_POST['Documento'];
		$Nombres =$_POST['Nombres'];
		$Correo =$_POST['Correo'];
		$Direccion =$_POST['Direccion'];
		$Telefono =$_POST['Telefono'];
		$username =$_POST['username'];
		$pass =$_POST['password'];
		$_SESSION['sesion_exito']=0;

			if($Documento=="" or $Nombres=="" or $Correo=="" or $Direccion=="" or $Telefono=="" or $username=="" or $pass=="")
				//Error de campos vacios
				{
					$_SESSION['sesion_exito']=1;
					echo "
					<div class='cont-mg'>
						<p class='alert-error'>
							<strong>Los campos se encuentran vacios, es necesario que los complete todos para completar el regitro</strong>
						</p>
					</div>";
				}
				else{
					$res=mysqli_query($conexion,"SELECT * FROM $table_name WHERE Documento='$Documento'");
					while($consulta= mysqli_fetch_array($res))
						{

						if($Documento=$consulta['Documento'])
							{
								$_SESSION['sesion_exito']=2;
							echo"
							<div class='cont-mg'>
								<p class='alert-error'> <strong>El documento ".$Documento." ya se encuentra registrado con el nombre '".$consulta['Nombres']."'</strong></p>
							</div>";
							}
						}
					}
					if ($_SESSION['sesion_exito']<>2 and $_SESSION['sesion_exito']<>1)
						{
							mysqli_query($conexion,"INSERT INTO pk (Documento,Nombres,Correo,Direccion,Telefono,usuario,pass,rol) values ('$Documento','$Nombres','$Correo','$Direccion','$Telefono','$username','$pass')");
									echo"
									<div class='cont-mg'>
										<p class='alert-bien'><strong>Usuario  " .$username. "  a sido registrado correctamente</strong></p>
									</div>";
						}
		}

?>
<script src="js/validate.js"></script>
</body>
</html>