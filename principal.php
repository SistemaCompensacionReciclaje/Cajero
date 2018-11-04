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

if (($NumCuenta == null) || ($NumCuenta == '') ) {
	echo "Se requiere iniciar sesion para ver este contenido";
	die();
}

?>



<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Principal</title>
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
		<!--DIV de titulos -->
		<div>
			<h2>Nombre: <?php echo $Nombre1; ?> <?php echo $Apellido1; ?> <?php echo $Apellido2; ?> </h2>
			<h2>Número de Cuenta: <?php echo $NumCuenta; ?> </h2>
			<h2>Puntos Acumulados: <?php echo $PuntosAcumulados; ?> </h2>
		</div>

		<br>
		<br>
		<br>

		<div id="divblanco" class="main row">
			<div class="col-md-6">
				<br>
				<img src="400x400.png" class="img-responsive">
			</div>

			<div class="col-md-6">
				<br>
				<a class="btn btn-lg btn-block btn-success" href="reciclar.php">Reciclar</a>
				<br>
				<br>
				<a class="btn btn-lg btn-block btn-success" href="historial.php">Historial</a>
				<br>
				<br>
				<a class="btn btn-lg btn-block btn-success" href="ofertas.php">Ofertas</a>
				<br>
				<br>
				<a class="btn btn-lg btn-block btn-success" href="normas.php">Normas</a>
				<br>
				<br>
				<a class="btn btn-lg btn-block btn-success" href="cerrar_sesion.php">Cerrar sesión</a>
			</div>	
		</div>




	</div>
	
	<script scr="js/jquery.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>  

