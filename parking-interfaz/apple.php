<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PAR-KING REVOLUTION</title>

<link rel="shortcut icon" href="favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="estilos.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/apple.js"></script>
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
<nav class="navegacion">
  <div class="menu-container">
    <!-- Menu -->
    <ul class="menu col">
      <!--<li class="menu-apple">
        <a class=""><img style="width: 50px; height: 60px" src="images/logopar2.png"></a>
      </li>-->
      
      <li class="menu-iPhone">
        <a href="historial.php">
          <span>Historial</span>
        </a>
      </li>

      <li class="menu-mac">
        <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Usuarios PK</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="registrar.php" role="button">Registrar</a><br>
          <a class="dropdown-item" href="actualizar.php" role="button">Actualizar </a><br>
          <a class="dropdown-item" href="eliminar.php" role="button">Eliminar</a>
        </div>
      </li>
      <li class="menu-iPhone">
        <a href="new.php">
          <span>Lista usuarios</span>
        </a>
      </li>
      
      </li>
      <li class="menu-tv">
        <a href="tarifas.php">
          <span>Tarifas</span>
        </a>
      </li>
       <li class="menu-tv">
        <a href="tarifas.php">
          <span>Ingresos</span>
        </a>
      </li>
      
      <li class="menu-tv">
        <a href="Manuales.php">
          <span>Manuales</span>
        </a>
      </li>
      
      <li class="menu-home">
        <a href="apple.php">
          <i class="fa fa-home " aria-hidden="true"></i>
        </a>
      </li>
      
      <li class="menu-store">
        <a class="hov-let" style="color:5E7585" padding-bottom="20px" href="cerrar_sesion.php">
          <i  class="fa fa-power-off" aria-hidden="true"></i>
          <?php
            echo "".$_SESSION["usuario"]." ";
          ?>
        </a>
      </li>
    </ul>
  </div>
</nav>
</header>
<!--<div class="fade-screen"></div>
<script src="js/apple.js"></script>
-->
<!--<div class="contenedor">
  <form class="formu" action="ejemplo.php" method="get">
    <h2 class="titulo">COLOMBIA ES PRUEBA</h2>
    <p>Nombre: <br><input class="texto" type="text" name="nombre" size="40"></p>
    <p>Año de nacimiento: <br><input type="number" name="nacido" min="1990" max="2020"></p>
    <p>Sexo:
      <input type="radio" name="hm" value="h"> Hombre
      <input type="radio" name="hm" value="m"> Mujer
    </p>
    <p>
      <input class="btn-sub" type="submit" value="Enviar">
      <br>
      <br>
      <input class="btn-sub" type="reset" value="Borrar">
    </p>
  </form>
</div>-->


</body>
</html>