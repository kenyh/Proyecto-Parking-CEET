<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PAR-KING REVOLUTION</title>

<!-- <link rel="shortcut icon" href="favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1"> -->
<link rel="stylesheet" type="text/css" href="estilos.css"/>
<!-- 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --> -->
<script src="js/apple.js"></script>

<style>
  div.sticky 
    {
      position: sticky;
      top:50px;
      right:100px;
      left:100px;
      width: 200px;
    }
  th, td{ 
    width: 20%; 
    text-align: left;   
  }
</style>

</head>

<body>
<header>
<?php include('apple.php') ?>
</header>

<!--Codigo generado para division de espacionçs en pantalla-->

    <div class="container-fluid">

        <div class="row hs-bloq">
          <!-- <div class="col-md-12"> &nbsp</div>
          <div class="col-md-12"> &nbsp</div> -->
        <div class="col-md-3">

          <div class="sticky">

<!--Formulario de captura de atos-->         
            <form name="formulario_busqueda" id="formulario_busqueda" action="historial.php" method="post">

              <div class="container">
                <span>Seleccione tipo de vehiculo</span>
                &nbsp
                  <select name="tipo" class="custom-select">

                    <option selected>Tipo de vehiculo</option>
                    <option value="carro">carro</option>  
                    <option value="moto">moto</option>

                  </select>
               
              </div>

              &nbsp
              <!--form input placa-->
              <div class="container">
               
                  <span>Ingrese placa</span>
                    <input type="text" id="placa" name="placa"  placeholder="Placa">
                   
              </div>
              &nbsp
<!--form fecha desde-->
              <div class="container">

                  <span>Seleccione fecha</span>
                    <h5>desde:</h5>
                  <input id="fecha_desde" type="date" name="fecha_desde">
               
              </div>
              &nbsp
<!--form fecha hasta-->
              <div class="container">
               
                  <span>Seleccione fecha</span>
                      <h5>hasta:</h5>
                  <input id="fecha_hasta" type="date" name="fecha_hasta">
               
              </div>
              &nbsp


              <div class="container">
                  <input type="submit" value="Consultar" class="button btn-sub" name="btn-consultar">
     
              </div>
            </form>
          </div>
        </div>


        <div class="col-md-8">
          &nbsp

          <?php
            include("conexion.php");
            $placa = "";
            $fecha_hora_ingreso = "";
            $fecha_hora_salida = "";
            $tipo ="";
            $op="";

            
              

      if (isset($_POST['btn-consultar']))
        {

          $placa = $_POST['placa'];
          $fecha_hora_ingreso = $_POST['fecha_desde'];
          $fecha_hora_salida = $_POST['fecha_hasta'];
          $tipo = $_POST['tipo'];

          if($fecha_hora_ingreso==false){$fecha_hora_ingreso=$fecha_hora_salida;}
          if($fecha_hora_salida== false){$fecha_hora_salida=$fecha_hora_ingreso;}
         

          if ($placa<>"" and $fecha_hora_ingreso<>false || $fecha_hora_salida<>false ) {$op="d";}
          elseif ($placa<>"") {$op="a";} 
          elseif ($tipo<>"Tipo de vehiculo" and $fecha_hora_ingreso<>false || $fecha_hora_salida<>false ) {$op="e";} 
          elseif ($tipo<>"Tipo de vehiculo") {$op="b";}
          elseif ($fecha_hora_ingreso<>false || $fecha_hora_salida<>false ) {$op="c";}

          else {}
            


                  

 #Busqueda por fecha

                  
                  echo"
                     
                      <table class=\"table table-hover table-dark\">
                        <tr >
                            <th>
                              <lavel for=\"placa\" ><b>Placa:</b></lavel>
                            </th>
                            <th>
                              <lavel for=\"fecha_hora_ingreso\"><b>Fecha de ingreso:</b></lavel>
                            </th>
                            <th>
                              <lavel for=\"fecha_hora_salida\"><b>Fecha de salida:</b></lavel>
                            </th>
                            <th>
                              <lavel for=\"Tipo vehiculo\"><b>Tipo de vehiculo:</b></lavel>
                            </th>
                            <th>
                              <lavel for=\"costo_servicio\"><b>Costo de servicio:</b></lavel>
                            </th>
                          </tr>
                        </table>
                 
                      
                        ";

                        
                 
                  switch ($op)
                  {
                    case "a":
                    
                    #se realiza busqueda por placa
                     $resultados = mysqli_query($conexion,"SELECT * FROM $table_ingresos WHERE placa ='$placa' ");
                      while($consulta = mysqli_fetch_array($resultados))
                      {

                        echo
                      "
                        <table class=\"table table-hover table-dark\" >

                          <tr>
                            <td >
                              ".$consulta['placa']."
                            </td>
                            <td>
                              ".$consulta['fecha_hora_ingreso']."
                            </td>
                            <td>
                              ".$consulta['fecha_hora_salida']."
                            </hd>
                            <td>
                              ".$consulta['tipo']."
                            </td>
                            <td>
                              ".$consulta['costo_servicio']."
                            </td>
                          </tr>

                        </table>
                            ";

                      }
                      
                      break;

#busqueda por tipo de vehiculo
                case "b":
                
                $resultados = mysqli_query($conexion,"SELECT * FROM $table_ingresos WHERE tipo ='$tipo'");
                      while($consulta = mysqli_fetch_array($resultados))
                      {
                        echo"
                        <table class=\"table table-hover table-dark\" >

                          <tr>
                            <td >
                              ".$consulta['placa']."
                            </td>
                            <td>
                              ".$consulta['fecha_hora_ingreso']."
                            </td>
                            <td>
                              ".$consulta['fecha_hora_salida']."
                            </hd>
                            <td>
                              ".$consulta['tipo']."
                            </td>
                            <td>
                              ".$consulta['costo_servicio']."
                            </td>
                          </tr>

                        </table>
                            ";
                            
                      }
#busqueda por fecha
                 break;
                      case "c":
                      $fechas = mysqli_query($conexion,"SELECT * FROM $table_ingresos WHERE fecha_hora_ingreso BETWEEN '$fecha_hora_ingreso' AND '$fecha_hora_salida'");
               
                  while($busqueda =mysqli_fetch_array($fechas)) 
                    {
                      echo"
                        <table class=\"table table-hover table-dark\" >

                          <tr>
                            <td >
                              ".$busqueda['placa']."
                            </td>
                            <td>
                              ".$busqueda['fecha_hora_ingreso']."
                            </td>
                            <td>
                              ".$busqueda['fecha_hora_salida']."
                            </hd>
                            <td>
                              ".$busqueda['tipo']."
                            </td>
                            <td>
                              ".$busqueda['costo_servicio']."
                            </td>
                          </tr>

                        </table>
                            ";}
                    break;
                    case 'd':
                      $fechas = mysqli_query($conexion,"SELECT * FROM $table_ingresos WHERE fecha_hora_ingreso BETWEEN '$fecha_hora_ingreso' AND '$fecha_hora_salida' and placa = '$placa'");
               
                  while($busqueda =mysqli_fetch_array($fechas)) 
                    {
                      echo"
                        <table class=\"table table-hover table-dark\" >

                          <tr>
                            <td >
                              ".$busqueda['placa']."
                            </td>
                            <td>
                              ".$busqueda['fecha_hora_ingreso']."
                            </td>
                            <td>
                              ".$busqueda['fecha_hora_salida']."
                            </hd>
                            <td>
                              ".$busqueda['tipo']."
                            </td>
                            <td>
                              ".$busqueda['costo_servicio']."
                            </td>
                          </tr>

                        </table>
                            ";

                    }
                      break;
                      case 'e':

                      echo"Si pasa";
                      $fechas = mysqli_query($conexion,"SELECT * FROM $table_ingresos WHERE fecha_hora_ingreso BETWEEN '$fecha_hora_ingreso' AND '$fecha_hora_salida' and tipo = '$tipo'");
               
                  while($busqueda =mysqli_fetch_array($fechas)) 
                    {
                      echo"
                        <table class=\"table table-hover table-dark\" >

                          <tr>
                            <td >
                              ".$busqueda['placa']."
                            </td>
                            <td>
                              ".$busqueda['fecha_hora_ingreso']."
                            </td>
                            <td>
                              ".$busqueda['fecha_hora_salida']."
                            </hd>
                            <td>
                              ".$busqueda['tipo']."
                            </td>
                            <td>
                              ".$busqueda['costo_servicio']."
                            </td>
                          </tr>

                        </table>
                            ";

                    }
                      break;
                    
                    default:
                    Echo"<div>
                    <p class=text-alert>Es necesario que ingrese un dato</p>
                    </div>";



                  }
                }
       
 #Codigo generado en busqueda de tipo y placa NO MODIFICAR A MENOS DE TENER COPIA DE SEGURIDAD
                //CONSULTAR
                    



                ?>
        </div>
        <div class="col-md-1"></div>
    </div>
        <br>

    <center>
    <div>
      <input type="button" class="btn-home" value="Volver al menú"  onclick="location.href = 'apple.php'"></button>
    </div>
    </center>
  
  </div>

<div class="fade-screen"></div>
<script src="js/apple.js"></script>

</body>
</html>