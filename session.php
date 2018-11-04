<?php
   $servername = 'sistemacompensacionreciclaje.cmeyucgclwtl.us-east-2.rds.amazonaws.com';
    $username = 'SCR2014';
    $pass = 'SCR2014!';
    $database = 'SCR2014';

    $db = mysqli_connect($servername, $username, $pass, $database);
   
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select NumCuenta, PIN, Nombre1 from Usuario where NumCuenta = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row[0];
   
   if(!isset($_SESSION['login_user'])){
      header("location:username.php");
   }
?>