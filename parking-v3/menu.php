
<!DOCTYPE html>

<html lang="es">

	<head>
		<meta charset="UTF-8">
		<title>Parking-CEET</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</head>

<body>

	<?php
		session_start();

			if(!isset($_SESSION["usuario"]))
			{
				header("location:login.php");
			}
	?>

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
	      <a class="nav-link" href="index.html">SALIR</a>
	    </li>
	  </ul>
	</nav>
	<br>

	<div class="container">
	  <h3>Navbar With Dropdown</h3>
	  <p>This example adds a dropdown menu in the navbar.</p>
	</div>

	<?php

		// Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada.
		$link = new PDO('mysql:host=localhost;dbname=parking ceet', 'root', ''); // el campo vaciío es para la password.

		?>

		<div class="table-striped">
		<table class="table">
			<thead>
				<tr>
					<th>Dcocumento</th>
					<th>Nombres</th>
					<th>Correo</th>
					<th>Direccion</th>
					<th>Placa</th>
					<th>Vehiculo</th>

				</tr>
			</thead>
		<?php foreach ($link->query('SELECT * from clientes') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
		<tr>
			<td><?php echo $row['Documento'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
		    <td><?php echo $row['Nombres'] ?></td>
		    <td><?php echo $row['Correo'] ?></td>
		    <td><?php echo $row['Direccion'] ?></td>
		    <td><?php echo $row['Placa'] ?></td>
		    <td><?php echo $row['Vehiculo'] ?></td>
		 </tr>
		<?php
			}
		?>
		</table>
		</div>
</body>
</html>