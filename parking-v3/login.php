

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Parking-CEET</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

</head>
<body>
<h1>Bienvenido a parking CEET</h1>



	<div class="container mlogin">
		<div id="login">
			<h3>Inicia Sesíon</h3><br/>
			<form  class="registro" action="inicio_sesion.php" method="POST" >
			<div class="form-group input-group">
			<label for="user_login">Nombre De Usuario<br />
			<input class=""type="text" name="usuario" id="usuario" required placeholder="Nombre de Usuario"></input><br /><br />
			<label for="user_login">Contraseña<br />
			<input class=""type="password" name="contraseña" id="contraseña"  required placeholder="Contraseña"></input><br /><br /><br />
			<p class="submit">
			<a class="button" href="menu.php">Iniciar sesion</a>
			</p>
			<input type="hidden" name="envio">
			<h5 class="regtext">¿Olvidaste tu contraseña?<a class="" href="register.html">Ingresa aqui</a></h5>
			<input type="submit" name="login" class="button" value="Ingresar" />

			</form>
		</div>
	</div>

	<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>



	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>



<?php
session_start();
?>



<?php

if(isset($_SESSION["session_username"])){
// echo "Session is set"; // for testing purposes
header("Location: intropage.php");
}

if(isset($_POST["login"])){

if(!empty($_POST[‘username’]) && !empty($_POST[‘password’])) {
$username=$_POST[‘username’];
$password=$_POST[‘password’];

$query =mysql_query("SELECT * FROM usertbl WHERE username=’".$username."’ AND password=’".$password."’");

$numrows=mysql_num_rows($query);
if($numrows!=0)

{
while($row=mysql_fetch_assoc($query))
{
$dbusername=$row[‘username’];
$dbpassword=$row[‘password’];
}

if($username == $dbusername && $password == $dbpassword)

{

$_SESSION[‘session_username’]=$username;

/* Redirect browser */
header("Location: intropage.php");
}
} else {

$message = "Nombre de usuario ó contraseña invalida!";
}

} else {
$message = "Todos los campos son requeridos!";
}
}
?>

<div class="container mlogin">
<div id="login">
<h1>Logueo</h1>
<form name="loginform" id="loginform" action="" method="POST">
<p>
<label for="user_login">Nombre De Usuario<br />
<input type="text" name="username" id="username" class="input" value="" size="20" /></label>
</p>
<p>
<label for="user_pass">Contraseña<br />
<input type="password" name="password" id="password" class="input" value="" size="20" /></label>
</p>
<p class="submit">
<input type="submit" name="login" class="button" value="Entrar" />
</p>
<p class="regtext">No estas registrado? <a href="register.php" >Registrate Aquí</a>!</p>
</form>

</div>

</div>

<?php include("includes/footer.php"); ?>

<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>



