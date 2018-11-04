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

    
?>


<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vidrio</title>
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
		

		<div id="divblanco" class="main row">
			<div>
				<center><h1>Vidrio</h1></center>
			</div>

			<br>


			<div class="col-md-6">
				<center><img src="vidrio.jpg" class="img-responsive"></center>
			</div>

			<div class="col-md-6">
				<br>
				<br>
				<br>
				<h2>Cantidad Depositadas: 4</h2>
				<br>
				<h2>Puntos Generados: 12</h2>
				<br>
				<br>
				<a class="btn btn-lg btn-block btn-success" href="reciclar.php">Finalizar</a>
			</div>	
		</div>




	</div>
	
	<script scr="js/jquery.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>  