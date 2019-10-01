<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


        <title>Par-King Revolution</title>
    </head>
    <body>

        <form action="index.php" method="POST">
            <input type="text" name="email" value="" placeholder="email" /> <br/>
            <input type="submit" value="Recordar contraseña" />
        </form>
<div class="container mregister">
        <div id="login">
            <h3>Recuperar contraseña</h3><br/>
            <form name="registerform" id="registerform" action="index-dan.php" method="POST">
            <input class=""type="text" name="email" required placeholder="E-mail"></input><br /><br /><br />
            <input class="button" type="submit" value="Recordar contraseña" />

            </form>
        </div>
    </div>


        <?php

		try{
			if(isset($_POST['email']) && !empty($_POST['email'])){
                $pass = substr( md5(microtime()), 1, 10);
                $mail = $_POST['email'];

                //Conexion con la base
                $conn = new mysqli("localhost", "root", "", "parking ceet");

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "Update usuarios Set pass='$pass' Where correo='$mail'";

                if ($conn->query($sql) === TRUE) {
                    echo "usuario modificado correctamente ";
                } else {
                    echo "Error modificando: " . $conn->error;
                }

                $to = $_POST['email'];//"destinatario@email.com";
                $from = "From: " . "Masterhouse" ;
                $subject = "Recordar contraseña";
                $message = "El sistema le asigno la siguiente clave" . $pass;

                mail($to, $subject, $message, $from);
                echo 'Correo enviado satisfactoriamente a' . $_POST['email'];
            }
            else
                echo 'Informacion incompleta';
		}
		catch (Exception $e) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}

        ?>


    </body>
</html>