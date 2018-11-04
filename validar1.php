<?php 
	if (isset($_POST["nocuenta"]))
	{
	  $nocuenta = $_POST["nocuenta"];
	  echo $nocuenta;
	  echo " is your username";
	} 
	else 
	{
	  $nocuenta = null;
	  echo "no username supplied";
	}
 

    $servername = 'sistemacompensacionreciclaje.cmeyucgclwtl.us-east-2.rds.amazonaws.com';
    $username = 'SCR2014';
    $pass = 'SCR2014!';
    $database = 'SCR2014';

    $conexion = mysqli_connect($servername, $username, $pass, $database);

    $sql="SELECT NumCuenta,
    Nombre1,
    Apellido1,
    Telefono,
    CorreoElectronico,
    FechaNacimiento,
    PuntosAcumulados
    from Usuario
    where NumCuenta = '$nocuenta'";

    $resultado = mysqli_query($conexion,$sql);

    $filas = mysqli_num_rows($resultado);

    if ($filas > 0) {

    	

    	$datos = mysqli_fetch_row($resultado);
    	$NumCuenta = $datos[0];
    	$Nombre1 = $datos[1]; 
    	$Apellido1 = $datos[2];
    	$Telefono = $datos[3];
    	$CorreoElectronico = $datos[4];
    	$FechaNacimiento = $datos[5];
    	$PuntosAcumulados = $datos[6];

    	header("location:pin.php");

    }

    else {
    	echo "Error en la autenticacion";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>

