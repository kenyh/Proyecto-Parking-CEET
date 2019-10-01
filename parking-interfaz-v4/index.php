<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Par-King Revolution</title>
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</head>
<body>
  <!-- Modal -->
  <div class="modal fade" id="darkModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog form-dark" role="document">
      <!--Content-->
      <div class="modal-content card card-image" style="background-image: url('images/index-5.png'); background-size: cover; background-repeat: no-repeat;"  >
        <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
          <!--Header-->


          <form  class="registro" action="inicio_sesion.php" method="POST" >
          <div class="modal-header text-center pb-4">
            <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>Inicio</strong> <a
                class="green-text font-weight-bold"><strong> sesion</strong></a></h3>
            <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
              <span class="close-k" aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--Body-->
          <div class="modal-body">
            <!--Body-->
            <div class="md-form mb-5">
              <input class="form-control validate white-text"type="text" name="usuario" id="usuario" required placeholder="Nombre de Usuario"></input>
              <label data-error="wrong" data-success="right" for="Form-email5">Nombre de Usuario</label>
            </div>

            <div class="md-form pb-3">
              <input class="form-control validate white-text"type="password" name="pass" id="pass"  required placeholder="Contraseña"></input>
              <label data-error="wrong" data-success="right" for="Form-pass5">Contraseña</label>
            </div>

            <!--Grid row-->
            <div class="row d-flex align-items-center mb-4">

              <!--Grid column-->
              <input type="hidden" name="envio">
              <h5 class="regtext">¿Olvidaste tu contraseña?<a class="" href="register.html">Ingresa aqui</a></h5>
              <input type="submit" name="login" class="button" value="Ingresar" />
              <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
              <!--Grid column-->

            </div>
            <!--Grid row-->

          </div>
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- Modal -->
  </form>

  <div class="btn-center">
    <a href="" class="btn btn-default btn-rounded font-index" data-toggle="modal" data-target="#darkModalForm">Bienvenido a Par-King Revolution</a>
  </div>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>
