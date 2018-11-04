<?php 
    
    session_start();

	$nocuenta = $_POST['nocuenta'];
    $pin = $_POST['pin'];
	    
    //Conectar con la base de datos
    $servername = 'sistemacompensacionreciclaje.cmeyucgclwtl.us-east-2.rds.amazonaws.com';
    $username = 'SCR2014';
    $pass = 'SCR2014!';
    $database = 'SCR2014';
    $conexion = mysqli_connect($servername, $username, $pass, $database);

    $sql="SELECT NumCuenta, PIN,  Nombre1, Apellido1, Apellido2, CorreoElectronico, PuntosAcumulados, Estado
    from Usuario
    where NumCuenta = '$nocuenta' and PIN = '$pin'";

    $resultado = mysqli_query($conexion,$sql);

    $filas = mysqli_num_rows($resultado);

    if ($filas > 0) {

        $datos = mysqli_fetch_row($resultado);
        $_SESSION['NumCuenta'] = $datos[0];
        $_SESSION['PIN'] = $datos[1];
        $_SESSION['Nombre1'] = $datos[2];
        $_SESSION['Apellido1'] = $datos[3];
        $_SESSION['Apellido2'] = $datos[4];
        $_SESSION['CorreoElectronico'] = $datos[5];
        $_SESSION['PuntosAcumulados'] = $datos[6];
        $_SESSION['Estado'] = $datos[7];

        header('Location: principal.php');
     } 

    else {
        echo "error";
    }
    
    mysqli_free_result($resultado);
    mysqli_close($conexion);
    

?>