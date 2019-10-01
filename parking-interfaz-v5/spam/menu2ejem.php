<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PAR-KING REVOLUTION</title>
<meta name="description" content="Blueprint: A basic template for a page stack navigation effect" />
<meta name="keywords" content="blueprint, template, html, css, page stack, 3d, perspective, navigation, menu" />
<meta name="author" content="Codrops" />
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<link rel="stylesheet" type="text/css" href="estilos/estilos.css" />
<script src="js/modernizr-custom.js"></script>
</head>

<body>


	<?php

	    session_start();

	      if(!isset($_SESSION["usuario"]))
	      {
	        header("location:index.php");
	      }

	?>


<!-- navigation -->
<nav class="pages-nav">
<div class="pages-nav__item"><a class="link link--page" href="#page-home">Actualización</a></div>
<div class="pages-nav__item"><a class="link link--page" href="#page-docu">Busqueda avanzada</a></div>
<div class="pages-nav__item"><a class="link link--page" href="#page-manuals">Busqueda de cliente</a></div>

<div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-buy">Contactenos</a></div>
<div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-blog">información</a></div>

 <span class="navbar-text">
    <?php
      echo "<br><br>Usuario: ".$_SESSION["usuario"]." ";
    ?>
    <br>
    <a class="" href="cerrar_sesion.php"><img src="https://img.icons8.com/metro/26/000000/exit.png"></a>
</span>

<img class="logopar" src="images/logopar2.png " alt="img01" width="20%"/>

<div class="pages-nav__item pages-nav__item--social">
<!--<a class="link link--social link--faded" href="#"><i class="fa fa-twitter"></i><span class="text-hidden">Twitter</span></a>
<a class="link link--social link--faded" href="#"><i class="fa fa-linkedin"></i><span class="text-hidden">LinkedIn</span></a>
<a class="link link--social link--faded" href="#"><i class="fa fa-facebook"></i><span class="text-hidden">Facebook</span></a>
<a class="link link--social link--faded" href="#"><i class="fa fa-youtube-play"></i><span class="text-hidden">YouTube</span></a>-->
</div>
</nav>
<!-- /navigation-->
<!-- pages stack -->
<div class="pages-stack">
<!-- page -->
<div class="page" id="page-home">
<!-- Blueprint header -->
<header class="bp-header cf">
	<span class="bp-header__present">Par-King Revolution <span class="bp-tooltip bp-icon bp-icon--about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
	<h1 class="bp-header__title">Actualización</h1>
	<p class="bp-header__desc">En este segmento puedes actualizar los datos e información referente a los roles de la plataforma <a href="">clickeame</a></p>
	<form name="registerform" id="registerform" action="actualizar.php" method="post">
			<input class="datos"type="number" name="Documento"  placeholder="Documento de Identidad"><br /><br />
			<input class="datos"type="text" name="Nombres"  placeholder="Nombre Completo"><br /><br />
			<input class="datos"type="text" name="Correo"  placeholder="E-mail"><br /><br />
			<input class="datos"type="text" name="Direccion"  placeholder="Direccion"><br /><br />
			<input class="datos"type="text" name="Placa"  placeholder="Placa"><br /><br />
			<input class="datos"type="text" name="Vehiculo"  placeholder="Tipo de vehiculo"><br /><br />

			<input type="button" onclick="alert('Hello World!')" value="Click Me!">
			<input type="submit" value="actualizar" class="button" name="btn-actualizar">
</header>
<img class="poster" src="images/actualizar.png " alt="img01" width="340rem"/>
</div>


<!-- /page -->

<div class="page" id="page-docu">
<header class="bp-header cf">
<span class="bp-header__present">Par-King Revolution <span class="bp-tooltip bp-icon bp-icon--about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
<h1 class="bp-header__title">Busqueda avanzada</h1>
<Section class="uno">
<p class="bp-header__desc"> Sobre esta pagina se puede realizar una busqueda profunda de todos los roles que se encuentran dentro de la plataforma, es decir, Se puede realizar una busqueda profunda de los datos que se necesiten.  <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Clik aqui</a></p>
</Section>
<p class="info"></p>
<br>
<br>
<br>
<p>
<label for="user.pass"> Seleccionar :<br>
	<select class="select" name="Seleccionar" size="1" width: 80%>
		<option selected>seleccione un tipo de busqueda</option>
		<option value="ticket">Ticket</option>
		<option value="Cedula">Cedula</option>
		<option value="Placa">Placa</option>
		<option value="Fecha">Fecha</option>
	</select>
<br>
<br>
	<input id="id_input" type="text">
	<input type="submit">
</p>
<form action="/action_page.php">
  <input type="date" name="bday">
  <input type="submit">
</form>
</header>
	<img class="poster" src="images/busava.png" alt="Busqueda avanzada" style= />
</div>


<div class="page" id="page-manuals">
	<header class="bp-header cf">
	<span class="bp-header__present">Par-King Revolution <span class="bp-tooltip bp-icon bp-icon--about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
	<h1 class="bp-header__title">Busqueda de cliente</h1>
	<p class="bp-header__desc">Aqui se pueden realizar busquedas respecto al cliente, se pueden obtener datos como: vehiculo ingresado, horarios dentro del establecimiento, etc. <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
	<p class="info">
	"When you adopt a vegan diet we make a connection, you don't go back, it is not a diet, it is a lifestyle." &mdash; Freelee Frugivore
	</p>

<!-- consulta-->

	<div class="container mregister">
		<div id="login">
			<h3>Consultar</h3><br/>
			<form name="registerform" id="registerform" action="consultar.php" method="post">
			<input class=""type="text" name="Documento"  placeholder="Documento de Identidad"></input><br /><br />


			<center>
				<input type="submit" value="Consultar" class="button" name="btn-consultar"></input>
					<a href="menu-ejemplo.php" class="btn btn-info">Volver a menu</a>
			</center>

			</form>
		</div>
	</div>

	<?php
	include("conexion.php");
	$Documento = "";
	$Nombres = "";
	$Correo = "";
	$Direccion ="";

	if (isset($_POST['btn-consultar']))
	{

		$Documento = $_POST['Documento'];
		$_SESSION['sesion_exito']=0;

		if ($Documento =="")
		{
			$_SESSION['sesion_exito']=2;//Error de campos vacio
			echo "
			<p style=\"color:red\" align=\"center\"><strong>
				campos vacios, es necesario que ingrese un numero de documento
			</strong></p>
			";
		}
		else
		{
			//CONSULTAR
			$resultados = mysqli_query($conexion,"SELECT * FROM $table_name WHERE Documento = '$Documento'");
			while($consulta = mysqli_fetch_array($resultados))
			{
					$_SESSION['sesion_exito']=1;//ingreso a base de datos izo la cosulta
					echo"
						<table class=\"table table-hover table-dark\" >
							<tr>
								<td>
									<lavel for=\"documento\"><b>Documento:</b></lavel>
								</td>
								<td>
									".$consulta['Documento']."</td>
								</td>
							</tr>
							<tr>
								<td>
									<lavel for=\"nombre\"><b>Nombres:</b></lavel>
								</td>
								<td>
									".$consulta['Nombres']."
								</td>
							</tr>
							<tr>
								<td>
									<lavel for=\"apellido\"><b>Correo:</b></lavel>
								</td>
								<td>
									".$consulta['Correo']."
								</td>
							</tr>
							<tr>
								<td>
									<lavel for=\"telefono\"><b>Direccion:</b></lavel>
								</td>
								<td>
									".$consulta['Direccion']."</td>
								</td>
							</tr>
						</table>
						";
				}
			}

			if($_SESSION['sesion_exito']<>1 AND $_SESSION['sesion_exito']<>2)
					{
						echo"
							<p style=\"color:red\" align=\"center\" ><strong>
								Los datos son incorrectos, o no existen en la base de datos. Vuelva a intentarlo nuevamente.
							</strong></p>
							";
					}
				}


?>


	</header>
	<img class="poster" src="images/buscl.png" alt="img02" />
</div>


<div class="page" id="page-buy">
<header class="bp-header cf">
<span class="bp-header__present">Par-King Revolution <span class="bp-tooltip bp-icon bp-icon--about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
<h1 class="bp-header__title">CONTACTENOS</h1>
<p class="info">
"When people ask me why I don't eat meat or xany other animal products, I say, 'Because they are unhealthy and they are the product of a violent and inhumane industry.'" &mdash;
</p>
</header>
<img class="poster" src="images/6.jpg" alt="img06" />
</div>


<div class="page" id="page-blog">
<header class="bp-header cf">
<span class="bp-header__present">Par-King Revolution <span class="bp-tooltip bp-icon bp-icon--about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
<h1 class="bp-header__title">INFORMACIÓN</h1>
<p class="info">
"The question is not, 'Can they reason?' nor, 'Can they talk?' but rather, 'Can they suffer?" &mdash; Jeremy Bentham
</p>
</header>
<img class="poster" src="images/1.jpg" alt="img01" />
</div>

</div>
<!-- /pages-stack -->
<button class="menu-button"><span>Menu</span></button>
<script src="js/classie.js"></script>
<script src="js/main.js"></script>
</body>

</html>