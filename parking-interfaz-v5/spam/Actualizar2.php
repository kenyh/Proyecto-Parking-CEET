<HTML>
<HEAD>
<TITLE>Actualizar2.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base
mysql_connect("localhost","tu_user","tu_password");

//selección de la base de datos con la que vamos a trabajar 
mysql_select_db("parking ceet"); 
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update parking ceet Set telefono='$telefono' Where nombre='$nombre'";
mysql_query($sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="lectura.php">Visualizar el contenido de la base</a></div>

</BODY>
</HTML>