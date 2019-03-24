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
	  <a class="navbar-brand" href="#">Logo</a>

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
				<a class="dropdown-item" href="eliminar.php" role="button">eliminar</a>

	      </div>
	    </li>
	     <li class="nav-item">
			<a class="button" href="cerrar_sesion.php"><img src="https://img.icons8.com/metro/26/000000/exit.png"></a>
	    </li>
	  </ul>
</nav>

<div class="container mregister">
		<div id="login">
			<h3>Eliminar</h3><br/>
			<p>Ingrese numero de documento que desea eliminar</p>
			<form name="registerform" id="registerform" action="eliminar.php" method="post">
			<input class=""type="text" name="Documento"  placeholder="Documento de Identidad"></input><br /><br />


			<center>
				<input type="submit" value="eliminar" class="button" name="btn-eliminar"></input>
					<a href="menu.php" class="btn btn-info">Volver a menu</a>
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