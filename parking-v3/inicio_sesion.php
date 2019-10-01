
<!DOCTYPE html>
<html>
<head>
	<title>inicio_de_sesion.php</title>
	<!--Tildes y eñes-->
	<meta http-equiv="Content-Type"content="text/html;charset=utf-8"/>
</head>

<body>

<?php
	require "conexion_reg.php";
	try
	{
		$base=new PDO('mysql:host='.db_host.'; dbname='.db_nombre,db_usuario,db_pass);
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM usuarios WHERE usuario=:user and contraseña =:pass";
		$resultado=$base->prepare($sql);
		$user=htmlentities(addslashes($_POST["usuario"]));
		$pass=htmlentities(addslashes($_POST["contraseña"]));
		$resultado->BindValue(":user",$user);
		$resultado->BindValue(":pass",$pass);
		$resultado->execute();
		$numero_registro=$resultado->rowCount();

		if($numero_registro!=0)
		{
			session_start();
			$_SESSION["usuario"]=$_POST["usuario"];
			header("location:validar.php");
		}
		else
		{
			header("location:menu.php");
		}
	}
	catch(Exception $e)
	{
		die("Error: ".$e->getMessage());
	}
?>
</body>

</html>


