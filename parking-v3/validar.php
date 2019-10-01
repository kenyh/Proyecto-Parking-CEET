<?php

	/*require("conexion_reg.php");

		$user = $_POST['usuario'];
		$pass = $_POST ['contraseña'];


		$sql2 = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$user'");
		if ($f2=mysqli_fetch_array($sql2)) {
			if ($pass=$f2['usuario']) {
				echo '<script>alert("bienvenido admin")</script> ';
				echo "<script>location.href='menu.php'</script> ";
			}
		}

		$sql=mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$user'");
		if ($f=mysqli_fetch_array($sql)) {
			if ($pass=$f2['contraseña']) {
				header('location menu.php');
			}else{
					echo '<script>alert("contraseña incorrecta")</script> ';
					echo "<script>location.href='login.php'</script> ";

			}
		}else {
				echo '<script>alert("este usuario no existe")</script> ';
				echo "<script>location.href='login.php'</script> ";

		}*/


			session_start();

			if(!isset($_SESSION["usuario"]))
			{
				header("location:login.php");
			}
			else
			{
				header("location:menu.php");
			}


?>








