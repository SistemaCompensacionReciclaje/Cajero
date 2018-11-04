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

$sql="SELECT IDOferta, Nombre, Descripcion, Valor, Vigencia, Empresa from Oferta";

$resultado=mysqli_query($conexion,$sql);

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ofertas</title>
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
			<center><h2>Puntos Acumulados: <?php echo $PuntosAcumulados; ?> </h2></center>
			<br>
		</div>
		
		<div id="divmarino" class="main row">	


			<?php 
   		    $mostrar=mysqli_fetch_row($resultado);			  
            ?>
			<div id="divmarino" class="col-md-3">
				<center><h2><?php echo $mostrar[1];  ?></h2></center>
				<center><img src="ofertas/mcdonald.png" class="img-responsive"></center>
				<h4><?php echo $mostrar[2]; ?></h4>
				<h4>Puntos: <?php echo $mostrar[3]; ?></h4>
				<h4>Vigencia: <?php echo $mostrar[4]; ?></h4>

				<?php  
				$_SESSION['id_oferta1'] = $mostrar[0];
				$_SESSION['nombre_oferta1'] = $mostrar[1];
				$_SESSION['descripcion_oferta1'] = $mostrar[2];
				$_SESSION['valor_oferta1'] = $mostrar[3];
		        ?>
				
				<?php
				if ($PuntosAcumulados >= $_SESSION['valor_oferta1']) {
				?>
					<a class="btn btn-lg btn-block btn-success" href="canjear1.php">Canjear</a>
				<?php  
					}
				
				else {
				?>
					<button class="btn btn-lg btn-block btn-success disabled" href="">Canjear</button>
				<?php  
					}
				?>
				<br>
			</div>

			<?php 
   		    $mostrar=mysqli_fetch_row($resultado);			  
            ?>
			<div id="divmarino" class="col-md-3">
				<center><h2><?php echo $mostrar[1];  ?></h2></center>
				<center><img src="ofertas/mcdonald.png" class="img-responsive"></center>
				<h4><?php echo $mostrar[2]; ?></h4>
				<h4>Puntos: <?php echo $mostrar[3]; ?></h4>
				<h4>Vigencia: <?php echo $mostrar[4]; ?></h4>

				<?php  
				$_SESSION['id_oferta2'] = $mostrar[0];
				$_SESSION['nombre_oferta2'] = $mostrar[1];
				$_SESSION['descripcion_oferta2'] = $mostrar[2];
				$_SESSION['valor_oferta2'] = $mostrar[3];
		        ?>
				
				<?php
				if ($PuntosAcumulados >= $_SESSION['valor_oferta2']) {
				?>
					<a class="btn btn-lg btn-block btn-success" href="canjear2.php">Canjear</a>
				<?php  
					}
				else {
				?>
					<button class="btn btn-lg btn-block btn-success disabled" href="">Canjear</button>
				<?php  
					}
				?>

				<br>
			</div>	
			
			<?php 
   		    $mostrar=mysqli_fetch_row($resultado);			  
            ?>
			<div id="divmarino" class="col-md-3">
				<center><h2><?php echo $mostrar[1];  ?></h2></center>
				<center><img src="ofertas/mcdonald.png" class="img-responsive"></center>
				<h4><?php echo $mostrar[2]; ?></h4>
				<h4>Puntos: <?php echo $mostrar[3]; ?></h4>
				<h4>Vigencia: <?php echo $mostrar[4]; ?></h4>

				<?php  
				$_SESSION['id_oferta3'] = $mostrar[0];
				$_SESSION['nombre_oferta3'] = $mostrar[1];
				$_SESSION['descripcion_oferta3'] = $mostrar[2];
				$_SESSION['valor_oferta3'] = $mostrar[3];
		        ?>

				<?php
				if ($PuntosAcumulados >= $_SESSION['valor_oferta3']) {
				?>
					<a class="btn btn-lg btn-block btn-success" href="canjear3.php">Canjear</a>
				<?php  
					}
				else {
				?>
					<button class="btn btn-lg btn-block btn-success disabled" href="">Canjear</button>
				<?php  
					}
				?>

				<br>
			</div>	

			<?php 
   		    $mostrar=mysqli_fetch_row($resultado);			  
            ?>
			<div id="divmarino" class="col-md-3">
				<center><h2><?php echo $mostrar[1];  ?></h2></center>
				<center><img src="ofertas/mcdonald.png" class="img-responsive"></center>
				<h4><?php echo $mostrar[2]; ?></h4>
				<h4>Puntos: <?php echo $mostrar[3]; ?></h4>
				<h4>Vigencia: <?php echo $mostrar[4]; ?></h4>

				<?php  
				$_SESSION['id_oferta4'] = $mostrar[0];
				$_SESSION['nombre_oferta4'] = $mostrar[1];
				$_SESSION['descripcion_oferta4'] = $mostrar[2];
				$_SESSION['valor_oferta4'] = $mostrar[3];
		        ?>
				
				<?php
				if ($PuntosAcumulados >= $_SESSION['valor_oferta4']) {
				?>
					<a class="btn btn-lg btn-block btn-success" href="canjear4.php">Canjear</a>
				<?php  
					}
				else {
				?>
					<button class="btn btn-lg btn-block btn-success disabled" href="">Canjear</button>
				<?php  
					}
				?>

				<br>
			</div>	
			

		</div>

		<div align="right">
			<br>
			<a class="btn btn-lg btn-success" href="principal.php">Finalizar</a>
		</div>




	</div>
	
	<script scr="js/jquery.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>  


<?php  
	mysqli_free_result($resultado);
    mysqli_close($conexion);
?>