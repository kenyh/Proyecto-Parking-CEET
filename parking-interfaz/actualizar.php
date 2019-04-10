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
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  <!-- Brand -->
	  <a class="" ><img style="width: 150px; height: 150px" src="images/Imagen1.png"></a>

	  <!-- Links -->
	  <ul class="navbar-nav">
	    <li class="nav-item">
	      <a class="nav-link" href="#">Link 1</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">Link 2</a>
	    </li>

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
	     <li class="nav-item">
			<a class="button" href="cerrar_sesion.php"><img src="https://img.icons8.com/metro/26/000000/exit.png"></a>
	    </li>
	  </ul>
</nav>


<div class="container mregister">
		<div id="login">
			<h3>Actualizar</h3><br/>
			<form name="registerform" id="registerform" action="actualizar.php" method="post">
			<input class=""type="text" name="Documento"  placeholder="Documento de Identidad"></input><br /><br />
			<input class=""type="text" name="Nombres"  placeholder="Nombre Completo"></input><br /><br />
			<input class=""type="text" name="Correo"  placeholder="E-mail"></input><br /><br />
			<input class=""type="text" name="Direccion"  placeholder="Direccion"></input><br /><br />
			<input class=""type="text" name="Placa"  placeholder="Placa"></input><br /><br />
			<input class=""type="text" name="Vehiculo"  placeholder="Tipo de vehiculo"></input><br /><br />
			<center>
				<input type="submit" value="actualizar" class="button" name="btn-actualizar"></input>
					<a href="menu.php" class="btn btn-info">Volver a menu</a>
			</center>

			</form>
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


