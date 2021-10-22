<?php

session_start();

include_once 'conexion.php';

if (isset($_POST['log-correo'])){
$usuario_login=$_POST['log-correo'];
$contrasena_login=$_POST['log-contrasena'];

// echo '<pre>';
// var_dump($usuario_login);
// var_dump($contrasena_login);
// echo '</pre>';

#VERIFICA SI USUARIO EXISTE
$sql='SELECT * FROM users WHERE correo = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_login));
$resultado = $sentencia->fetch();

#var_dump($resultado);

#SI USUARIO ESTA EN BASE DE DATOS
if($resultado){

  #SI LA CONTRASEÑA COINCIDE
  if(password_verify($contrasena_login,$resultado['contrasena'])){
    $_SESSION['user'] = $resultado['nombre'];
    header('location:drivers.php');
    }
    else{
        header('location:login.php');
      // echo 'Error Contraseña';
    }
  
}else{
    header('location:login.php');
  // echo 'Error Username';
}

$sentencia=null;
$resultado=null;
}
