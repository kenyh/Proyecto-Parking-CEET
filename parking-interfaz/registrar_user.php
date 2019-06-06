<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Parking-CEET</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<?php

		$name =$_POST['full_name'];
		$mail =$_POST['email'];
		$user =$_POST['username'];
		$pass =$_POST['password'];
		$rol =$_POST['rol'];

		$host_db ="localhost";
		$user_db ="root";
		$pass_db ="";
		$db_name ="parking ceet";
		$table_name ="usuarios";

		$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

	if ($conexion -> connect_error) {
		die("la conexion fallo".$conexion -> connect_error) ;
	}

	$buscarUsuario = "SELECT * FROM $table_name WHERE usuario = '$user' ";

	$resultado = $conexion -> query($buscarUsuario);

	$count = mysqli_num_rows($resultado);

	if ($count == 1) {
		echo "<br/> el nombre de usuario ya esta en uso <br/> ";
		echo "<a href='register.html'> por favor escoja un nombre de usuario diferente </a>";
	}else
	{
		$query = "INSERT INTO usuarios VALUES ('','$name', '$mail', '$user','$pass','$rol')";
		if ($conexion -> query($query) == true) {
			echo "<br>"."<h1>"."usuario creado correctamente"."</h1>";
			echo "<br>";
			echo "<h3>"."Bienvenido: ".$_POST['username']."</h3>";
			echo "<br>";
			echo "<h3>"."iniciar sesion"."<a href='index.php'> iniciar sesion </a>"."</h3>";
		}else
		{
			echo "error al crear el usuario".$query."<br>".$conexion -> error;
		}
	}
?>
</body>
</html>

