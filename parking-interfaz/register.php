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
			<h3>Registrarse</h3><br/>
			<form name="registerform" id="registerform" action="registrar_user.php" method="post">
			<input class=""type="text" name="full_name" required placeholder="Nombre Completo"></input><br /><br />
			<input class=""type="text" name="email" required placeholder="E-mail"></input><br /><br /><br />
			<input class=""type="text" name="username" required placeholder="Nombre de Usuario"></input><br /><br />
			<input class=""type="password" name="password" required placeholder="Contraseña"></input><br /><br /><br />
			<div class="form-group">
	            <select class="form-control"  type="text" name="rol">
	                <option>Administrador</option>
	                <option>Empleado</option>
	            </select>
	        </div>
			<p class="submit">
			<input type="submit" name="registar" class="button" value="Registrarse"></input>
			</p>
			<center>
					<a href="menu.php" class="btn btn-info">Volver a menu</a>
			</center>
			</form>
		</div>
	</div>

	<?php

		// Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada.
		$link = new PDO('mysql:host=localhost;dbname=parking ceet', 'root', ''); // el campo vaciío es para la password.

	?>

		<div class="table-striped">
		<table class="table table-hover table-dark">
			<thead>
				<tr>
					<th>Nombre Completo</th>
					<th>Correo</th>
					<th>Nombre de Usuario</th>
					<th>Rol</th>

				</tr>
			</thead>
		<?php foreach ($link->query('SELECT * from usuarios') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
		<tr>
		    <td><?php echo $row['nombre'] ?></td>
		    <td><?php echo $row['correo'] ?></td>
		    <td><?php echo $row['usuario'] ?></td>
		    <td><?php echo $row['rol'] ?></td>

		 </tr>
		<?php
			}
		?>
		</table>
		</div>





	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>