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
	<script src="js/validate.js"></script>

</head>
<body>
<?php
		session_start();

			if(!isset($_SESSION["usuario"]))
			{
				header("location:index.php");
			}
	?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  <!-- Brand -->
	  <a class="" ><img style="width: 150px; height: 150px" src="images/Imagen1.png"></a>

	  <!-- Links -->
	  <ul class="navbar-nav">


	    <!-- Dropdown -->
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
	        Clientes
	      </a>
	      <div class="dropdown-menu">
				<a class="dropdown-item" href="consultar.php" role="button">Consultar</a><br>
				<a class="dropdown-item" href="registrar.php" role="button">Registrar</a><br>
				<a class="dropdown-item" href="actualizar.php" role="button">Actualizar </a><br>
				<a class="dropdown-item" href="eliminar.php" role="button">Eliminar</a>

	      </div>
	    </li>
	  </ul>
</nav>

	 <div class="col-md-2">
			  	<?php
			  	   echo "<br><br>Bienvenido: ".$_SESSION["usuario"]." ";
			  	?>
	  </div>



	<div class="container mregister">
		<div id="login">
			<h3>Registrarse</h3><br/>
			<form name="registerform" id="registerform" action="registrar.php" method="post">
			<input class=""type="text" name="Documento" pattern="[0-9]*" placeholder="Documento de Identidad"></input><br /><br />
			<input class=""type="text" name="Nombres"  placeholder="Nombre Completo"></input><br /><br />
			<input class=""type="text" name="Correo"  placeholder="E-mail"></input><br /><br />
			<input class=""type="text" name="Direccion"  placeholder="Direccion"></input><br /><br />
			<input class=""type="text" name="Placa"  placeholder="Placa"></input><br /><br /><br />

			<div class="form-group">
	            <select class="form-control"  type="text" name="Vehiculo">
	                <option>Carro</option>
	                <option>Moto</option>
	            </select>
	        </div>

			<center>
				<input type="submit" value="Regitrarse" class="button" id='validate' name="btn-registrar"></input>
					<a href="menu-ejemplo.php" class="btn btn-info">Volver a menu</a>
			</center>
			<form>
			<input id='email'>
			<button type='submit' id='validate'>Validar correo</button>
			</form>
			<h2 id='result'></h2>
			</form>
		</div>
	</div>

<?php
	include("conexion.php");
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
		$Placa =$_POST['Placa'];
		$Vehiculo =$_POST['Vehiculo'];
		$_SESSION['sesion_exito']=0;

		/*$buscarUsuario = "SELECT * FROM $table_name WHERE clientes = '$Documento' ";

		$resultado = $conexion -> query($buscarUsuario);

		/*$count = mysqli_num_rows($resultado);*/

		/*if ($Documento ='Documento') {
			echo "<br/> el nombre de usuario ya esta en uso <br/> ";
			echo "<a href='registrar.php'> por favor escoja un nombre de usuario diferente </a>";
		}else
		{
			$query = "INSERT INTO clientes VALUES ('$Documento','$Nombres','$Correo','$Direccion')";
			if ($conexion -> query($query) == true) {
				echo "<br>"."<h1>"."usuario creado correctamente"."</h1>";
				echo "<br>";
				echo "<h3>"."Bienvenido: ".$_POST['Nombres']."</h3>";
				echo "<br>";
			}else
			{
				echo "error al crear el usuario".$query."<br>".$conexion -> error;
			}
		}
	}*/

					if($Documento=="" or $Nombres=="" or $Correo=="" or $Direccion=="" or $Placa=="" or $Vehiculo=="")//Error de campos vacios
						{
							$_SESSION['sesion_exito']=1;
							echo "
							<p  style=\"color:red\"  >
								<strong>CAMPOS VACIOS, es necesario que rellene todos los campos</strong>
							</p>
							";
						}
						else{
							$res=mysqli_query($conexion,"SELECT * FROM $table_name WHERE Documento='$Documento'");
							while($consulta= mysqli_fetch_array($res))
								{

								if($Documento=$consulta['Documento'])
									{
										$_SESSION['sesion_exito']=2;
									echo"<p style=\"color:red\" align=\"center\"><strong>El documento ".$Documento." ya se encuentra registrado con el nombre '".$consulta['Nombres']."'</strong></p>";
									}
								}
							}
							if ($_SESSION['sesion_exito']<>2 and $_SESSION['sesion_exito']<>1)
								{
									mysqli_query($conexion,"INSERT INTO clientes (Documento,Nombres,Correo,Direccion,Placa,Vehiculo) values ('$Documento','$Nombres','$Correo','$Direccion','$Placa','$Vehiculo')");
											echo"<p style =\"color:blue;\"align=\"center\"><strong>Los datos ingresados se guardaron correctamente:</strong></p>
											&nbsp;<br>&nbsp;<br>&nbsp;<br>
												<table class=\"table table-hover table-dark\" >
												<tr>
													<td>
														<lavel for=\"documento\"><b>Documento:</b></lavel>
													</td>
													<td>
														".$Documento."
													</td>
												</tr>
												<tr>
												<td>
														<lavel for=\"nombre\"><b>Nombre:</b></lavel>
													</td>
													<td>
														".$Nombres."
													</td>
												</tr>
												<tr>
													<td>
														<lavel for=\"documento\"><b>Documento:</b></lavel>
													</td>
													<td>
														".$Correo."
													</td>
												</tr>
												<tr>
													<td>
														<lavel for=\"telefono\"><b>Telefono:</b></lavel>
													</td>
													<td>
														".$Direccion."
													</td>
												</tr>
													<tr>
													<td>
														<lavel for=\"telefono\"><b>Telefono:</b></lavel>
													</td>
													<td>
														".$Placa."
													</td>
												</tr>
													<tr>
													<td>
														<lavel for=\"telefono\"><b>Telefono:</b></lavel>
													</td>
													<td>
														".$Vehiculo."
													</td>
												</tr>
											</table>
											";
								}
				}

?>
<script src="js/validate.js"></script>
</body>
</html>