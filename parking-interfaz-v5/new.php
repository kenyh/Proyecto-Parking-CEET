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

        <input type="submit" value="Regitrarse" class="button" id='validate' name="btn-registrar"></input>
    </body>