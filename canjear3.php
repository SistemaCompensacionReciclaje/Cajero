<?php 
    
    session_start();

    $id = $_SESSION['id_oferta3'];
    $nombre = $_SESSION['nombre_oferta3'];
    $descripcion = $_SESSION['descripcion_oferta3'];
    $valor = $_SESSION['valor_oferta3'];

    $NumCuenta = $_SESSION['NumCuenta'];
    $PIN = $_SESSION['PIN'];
    $Nombre1 = $_SESSION['Nombre1'];
    $Apellido1 = $_SESSION['Apellido1'];
    $Apellido2 = $_SESSION['Apellido2'];
    $CorreoElectronico = $_SESSION['CorreoElectronico'];
    $PuntosAcumulados = $_SESSION['PuntosAcumulados'];

    $canje = (intval($PuntosAcumulados)) - (intval($valor));
    $_SESSION['PuntosAcumulados'] = $canje;

    //Conectar con la base de datos
    $servername = 'sistemacompensacionreciclaje.cmeyucgclwtl.us-east-2.rds.amazonaws.com';
    $username = 'SCR2014';
    $pass = 'SCR2014!';
    $database = 'SCR2014';
    $conexion = mysqli_connect($servername, $username, $pass, $database);

    $sql = "UPDATE Usuario SET PuntosAcumulados='$canje' WHERE NumCuenta='$NumCuenta'";
    $resultado = mysqli_query($conexion,$sql);
    mysqli_free_result($resultado);

    $sql = "INSERT INTO OfertaUsuario (IDOferta, NumCuenta) VALUES ('$id','$NumCuenta')";
    $resultado = mysqli_query($conexion,$sql);
    mysqli_free_result($resultado);

    /*
    #Enviar un correo
    $msg = "Saludos $Nombre1 $Apellido1 $Apellido2\nSe ha hecho valido el canje de la oferta de $nombre por $valor puntos.";
    $msg = wordwrap($msg,70);
    mail("$CorreoElectronico","Oferta Canjeada",$msg);
    */
    header('Location: ofertas.php');
    
    mysqli_close($conexion);
    

?>