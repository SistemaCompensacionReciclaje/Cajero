<?php
session_start();

$NumCuenta = $_SESSION['NumCuenta'];
$PIN = $_SESSION['PIN'];
$Nombre1 = $_SESSION['Nombre1'];
$Apellido1 = $_SESSION['Apellido1'];
$Apellido2 = $_SESSION['Apellido2'];
$CorreoElectronico = $_SESSION['CorreoElectronico'];
$PuntosAcumulados = $_SESSION['PuntosAcumulados'];
$Estado = $_SESSION['Estado'];

	$servername = 'sistemacompensacionreciclaje.cmeyucgclwtl.us-east-2.rds.amazonaws.com';
	$username = 'SCR2014';
	$pass = 'SCR2014!';
	$database = 'SCR2014';
	$conexion = mysqli_connect($servername, $username, $pass, $database);

    $sql="SELECT Transaccion.IDTransaccion, Transaccion.Fecha, Estacion.Ubicacion, Material.Nombre, TranMaterial.Cantidad, TranMaterial.Puntos from Transaccion, TranMaterial, Material, Estacion
    	where Transaccion.NumCuenta = '$NumCuenta' and Transaccion.IDTransaccion = TranMaterial.IDTransaccion 
    	and Material.IDmaterial = TranMaterial.IDmaterial and Estacion.IDEstacion = TranMaterial.IDEstacion";

    $resultado=mysqli_query($conexion,$sql);


?>






<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0"> 
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="estilos.css">

</head>

<body>
	
<header>
	<div class="container" align="middle">
		<h1>Sistema de Compensación por Reciclaje</h1>
	</div>
</header>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2>Historial de Transacciones</h2>
			<table class="table table-hover table-condensed table-bordered">
				<tr>
					<td>ID Transacción</td>
					<td>Fecha</td>
					<td>Estación</td>
					<td>Tipo</td>
					<td>Cantidad</td>
					<td>Puntos</td>
					
				</tr>

				<?php 
                 while ($mostrar=mysqli_fetch_row($resultado)) {
                ?>


				<tr>
					<td width="150"><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[3] ?></td>
					<td><?php echo $mostrar[4] ?></td>
					<td width="100"><?php echo $mostrar[5] ?></td>
					
				</tr>
				  <?php 
                    }
                  ?>
			</table>
			<div align="right">
			<a class="btn btn-lg btn-success" href="principal.php">Volver</a>
			</div>		
		</div>
	</div>
</div>
	
	
	<script scr="js/jquery.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    

</body>
</html>


<?php  
	mysqli_free_result($resultado);
    mysqli_close($conexion);
?>  