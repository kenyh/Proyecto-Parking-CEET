<!DOCTYPE html>
<html  lang="es">
<head>
	<title>Cerrar_sesion.php</title>
	<!--Tildes y eñes-->
	<meta http-equiv="Content-Type"content="text/html;charset=utf-8"/>
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
	<?php
	session_start();
	session_destroy();
	header("location:index.php");
	?>

</body>

</html>