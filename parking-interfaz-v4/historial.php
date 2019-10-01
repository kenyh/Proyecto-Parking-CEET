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
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/apple.js"></script>
</head>


<body>



<?php include ("header/apple.php")?>

</header>

<div class="container mregister">
 

        <div class="row">

<!--form de tipo de vehiculo-->
          <div class="col-sm-3">
            
            <form name="tipovehiculo" id="tipovehiculo" action="historial.php" method="post">
              <span>Seleccione tipo de vehiculo</span>
              <br><br>
                <select name="tipo" class="custom-select">

                  <option selected>Tipo de vehiculo</option>
                  <option value="carro">carro</option>  
                  <option value="moto">moto</option>

                </select>
                <input type="submit" name="btntipo" value="tipo">


            

          </div>

<!--form fecha desde-->
          <div class="col-sm-3">

            
              <span>Seleccione fecha</span>
                <h5>desde:</h5>
              <input id="date" type="date" name="fecha_desde">
            
          </div>
<!--form fecha hasta-->
          <div class="col-sm-3">
            
              <span>Seleccione fecha</span>
                  <h5>hasta:</h5>
              <input id="date" type="date" name="fecha_hasta">
            
          </div>

          <br><br>
<!--form input placa-->
          <div class="col-sm-3">
            <br>
            
              <span>Ingrese placa</span>
                <input class=""type="text" name="placa"  placeholder="Placa"></input>
                <br /><br />
                <input type="submit" value="Consultar" class="button" name="btn-consultar">

            </form>


            
          </div>
        </div>
        <br>

        

    <center>

        <a href="apple.php" class="btn btn-info">Volver a menu</a>


        <br>

        
    </center>


   
  </div>




<div class="fade-screen"></div>
<script src="js/apple.js"></script>

</body>
</html>


<!--Codigo de consulta en bd sin usuario-->
<?php
  include("conexion.php");
  $placa = "";
  $fecha_hora_ingreso = "";
  $fecha_hora_salida = "";
  $tipo ="";


   

  if (isset($_POST['btn-consultar']))
  {

    $placa = $_POST['placa'];
    $fecha_hora_ingreso = $_POST['fecha_desde'];
    $fecha_hora_salida = $_POST['fecha_hasta'];
    $tipo = $_POST['tipo'];  // captura de datos


      echo "Tipo de vehiculo a consultar :" .$tipo,$fecha_hora_ingreso,$fecha_hora_salida,$placa;  // Mensaje de validacion
    


    $_SESSION['sesion_exito']=0;

//Error de campos vacio
    if ($placa =="1234")
      {
        $_SESSION['sesion_exito']=2;
        echo "
        <p style=\"color:red\" align=\"center\"><strong>
          campos vacios, es necesario que ingrese un numero de documento
        </strong></p>
        ";
      }
    else
    {
//CONSULTAR


      $resultados = mysqli_query($conexion,"SELECT * FROM $table_ingresos WHERE placa = '$placa' or tipo ='$tipo' or fecha_hora_ingreso ='$fecha_hora_ingreso'");
      while($consulta = mysqli_fetch_array($resultados))
      {
          $_SESSION['sesion_exito']=1;
          //ingreso a base de datos realiza la cosulta
          echo"
            <table class=\"table table-hover table-dark\" >
              <tr>
                <td>
                  <lavel for=\"placa\"><b>Placa:</b></lavel>
                </td>
                <td>
                  ".$consulta['placa']."</td>
                </td>
              </tr>
              <tr>
                <td>
                  <lavel for=\"fecha_hora_ingreso\"><b>Hora de ingreso:</b></lavel>
                </td>
                <td>
                  ".$consulta['fecha_hora_ingreso']."
                </td>
              </tr>
              <tr>
                <td>
                  <lavel for=\"fecha_hora_salida\"><b>Hora de salida:</b></lavel>
                </td>
                <td>
                  ".$consulta['fecha_hora_salida']."
                </td>
              </tr>
              <tr>
                <td>
                  <lavel for=\"Tipo vehiculo\"><b>Tiempo total:</b></lavel>
                </td>
                <td>
                  ".$consulta['tipo']."
                </td>
              </tr>

                <tr>
                <td>
                  <lavel for=\"costo_servicio\"><b>costo de servicio:</b></lavel>
                </td>
                <td>
                  ".$consulta['costo_servicio']."</td>
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

