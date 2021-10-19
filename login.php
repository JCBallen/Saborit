<?php

session_start();

#include_once 'conexion.php';

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
      // echo 'Error Contraseña';
    }
  
}else{
  // echo 'Error Username';
}

$sentencia=null;
$resultado=null;
?>



<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="design.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined"
    />
    <title>LogIn</title>
  </head>
  <body class="li-body">
    <div class="login-body">
      <div>
        <img src="https://i.ibb.co/2PRtT9Q/usuario.png" alt="login-img" />
        <p class="title">LOG IN</p>
      </div>
      <form action="" method="post" class="form-log">
        <input
          id="email"
          class="log-input"
          type="email"
          name="log-correo"
          placeholder="Email Address"
        />
        <input
          id="password"
          class="log-input"
          type="password"
          name="log-contrasena"
          placeholder="Password"
        />
        <div class="form-log-end">
          <input type="checkbox" id="btn-rm" />
          <label for="btn-rm"
            >&nbsp;Remember me&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label
          >
          <a class="forgot" href="#">Forgot Password?</a>
        </div>
        <div id="errorlogin"></div>
        <div class="form-log">
          <input
            type="submit"
            value="Log In"
            class="btn"
            onclick="return validateLogIn()"
          />
        </div>
      </form>
    </div>
    <script src="appLogIn.js"></script>
  </body>
</html>
<?php
include "Navbar.php";
include "footer.php";
?>
