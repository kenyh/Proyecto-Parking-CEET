<!DOCTYPE html>
<html  lang="es">
<head>
	<title>inicio de sesion.php</title>
	<!--Tildes y eñes-->
	<meta http-equiv="Content-Type"content="text/html;charset=utf-8"/>
</head>

<body>

<?php
	require "conexion_PK.php";
	try
	{
		$link = new PDO('mysql:host=localhost;dbname=parking ceet', 'root', '');
		$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM pk WHERE usuario=:user and pass =:pass";
		$resultado=$link->prepare($sql);
		$user=htmlentities(addslashes($_POST["usuario"]));
		$pass=htmlentities(addslashes($_POST["pass"]));
		$resultado->BindValue(":user",$user);
		$resultado->BindValue(":pass",$pass);
		$resultado->execute();
		$numero_registro=$resultado->rowCount();

		if($numero_registro!=0)
			{
				session_start();
				$_SESSION["usuario"]=$_POST["usuario"];
				header("location:inicioValid.php");

			}
			else
			{
				header("location:apple.php");
			}
	}
	catch(Exception $e)
	{
		die("Error: ".$e->getMessage());
	}
?>
</body>

</html>


