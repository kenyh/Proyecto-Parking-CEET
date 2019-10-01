<?php 

include("db.php"); 

$placa="";

if (isset($_POST['buscar_ingresos']))
{
	$placa = $_POST['placa'];
	$existe=0;

	if ($placa=="")
	{
		echo "Ingrese en numero de placa - es un campo obligatorio";
	}

	else 
	{
		$resultados = mysqli_query($conn, "SELECT * FROM ingresos WHERE placa ='$placa'");
	while ($row = mysqli_fetch_array($resultados))

	{
		//echo $row['tipo'];
		//echo $row['placa'];
		//echo $row['fecha_hora_ingreso'];
		$existe++;
		$id =$row['id'];
		$tipo = $row['tipo'];
		$placa =$row['placa'];
		$fecha_hora_ingreso = $row['fecha_hora_ingreso'];
		$fecha_hora_salida = $row['fecha_hora_salida'];

		//echo $tipo;
		//echo $placa;
		//echo $fecha_hora_ingreso;
		//echo $fecha_hora_salida
	
	}
	if ($existe==0){//echo "El numero de placa no ha sido ingresado";}
}
	}
	
}

if (isset($_POST['detener_tiempo'])) {
	$id = $_GET['id'];
	$tiempo_total = $_POST['tiempo_total'];

	$query = "UPDATE ingresos set tiempo_total ='$tiempo_total' , estado = 'ABIERTO' WHERE id = $id";
	mysqli_query($conn, $query);

	header("Location: prefactura_servicio.php");

//if (isset($_POST['buscar_ingresos'])) {
	//$placa = $_POST['placa'];

	//$query = "UPDATE ingresos set tiempo_total WHERE placa = $placa";
	//mysqli_query($conn, $query);


	//header("Location: prefactura_servicio.php");
}	

?>

<?php include ("includes_tarifas/header_tarifas.php")?>

<div class="container p-4">
	<h3><p align="center"> <b>SERVICIO A FACTURAR </b></p></h3>
	<div class="row">
		<table class="table table-borderer">

		<!--<form action="prefactura_servicio.php" method="POST">--><form action="buscar_ingresos.php?id=<?php echo $_GET['id']; ?>" method="POST">
			<thead>
				<tr align="center">
					<th>TIPO DE VEHICULO</th>
					<th>PLACA</th>
					<th>FECHA Y HORA INGRESO</th>
					<th>ACCIONES</th> 
				</tr>
			</thead>
			<tbody>
				<?php 
					 $query = "SELECT * FROM ingresos WHERE placa ='$placa' AND estado = 'ABIERTO' order by fecha_hora_ingreso desc";	
					 $result_ingresos = mysqli_query($conn, $query);

					 while($row = mysqli_fetch_array($result_ingresos)){ ?>
					 	<tr align="center">
					 		<td align="center"><?php echo $row['tipo']?></td>
					 		<td align="center"><?php echo $row['placa']?></td>
					 		<td align="center"><?php echo $row['fecha_hora_ingreso']?></td>
					 		<td align="center">
					 			<a href="prefactura_servicio.php?id=<?php echo $row['id']?>" class="btn btn-secondary" type="submit" name=" detener_tiempo">
					 			<i class="fas fa-stopwatch"></i>
					 			</a>	
					 			<a href="Eliminar_ingresos.php?id=<?php echo $row['id']?>" class="btn btn-danger">
					 			<i class="far fa-trash-alt"></i>	
					 			</a >
					 		</td>
					 	</tr>
					 <?php } ?>
			</tbody>
		</table>
	</div>
	<p align="center" style="color :red"><?php if ($existe==0){echo "NO HAY SERVICIOS CON EL NUMERO DE PLACA INGRESADO";}?></p>
 </div>
</form>
<?php include ("includes_tarifas/footer_tarifas.php")?>
