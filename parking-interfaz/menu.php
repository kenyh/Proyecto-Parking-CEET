
<!DOCTYPE html>

<html lang="es">

	<head>
		<meta charset="UTF-8">
		<title>Parking-CEET</title>

	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="styles.css">
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
				header("location:index.php");
			}
	?>

<header>


<nav class="navbar navbar-expand bg-k navbar-dark">
  <a class="navbar-brand" href="#">Navbar w/ text</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">

     <ul class="navbar-nav nav-k">
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
	  </ul>
    <span class="navbar-text">
		<?php
			echo "<br><br>Usuario: ".$_SESSION["usuario"]." ";
		?>
		<br>
		<a class="button" href="cerrar_sesion.php"><img src="https://img.icons8.com/metro/26/000000/exit.png"></a>
    </span>
  </div>
</nav>
</header>





	<?php

		// Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada.
		$link = new PDO('mysql:host=localhost;dbname=parking ceet', 'root', ''); // el campo vaciío es para la password.

		?>

		<div class="table-striped">
		<table class="table table-hover table-dark">
			<thead>
				<tr>
					<th>Documento</th>
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

		<a href="https://icons8.com/icon/2444/salida">Salida icon by Icons8</a>
</body>
</html>