<?php

session_start();

include_once 'conexion.php';
include_once 'login.php';

if(isset($_POST['log-correo'])){
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
if($resultado['correo']=="saboritexpress@gmail.com"){
  #SI LA CONTRASEÑA COINCIDE
  if(password_verify($contrasena_login,$resultado['contrasena'])){
    $_SESSION['user'] = $resultado['nombre'];
    // header('location:TrackingAdmin.php');
    echo '<script type="text/javascript">window.location.href="TrackingAdmin.php";</script>';
    }
    else{
        // header('location:login.php');
        // echo '<script type="text/javascript">alert("WRONG EMAIL OR PASSWORD!");window.location.href="login.php";</script>';
        echo '<script type="text/javascript" defer>
              var errorlogin = document.getElementById("errorlogin");
              errorlogin.innerHTML = "*Wrong Email or Password.";
              errorlogin.style.margin = "10px";
              errorlogin.style.color = "red";
              </script>';
    }
}
else
{
    if($resultado){

      #SI LA CONTRASEÑA COINCIDE
      if(password_verify($contrasena_login,$resultado['contrasena'])){
        $_SESSION['user'] = $resultado['nombre'];
        // header('location:drivers.php');
        echo '<script type="text/javascript">window.location.href="drivers.php";</script>';
        }
        else{
            // header('location:login.php');
            // echo '<script type="text/javascript">alert("WRONG EMAIL OR PASSWORD!");window.location.href="login.php";</script>';
            echo '<script type="text/javascript" defer>
            var errorlogin = document.getElementById("errorlogin");
            errorlogin.innerHTML = "*Wrong Email or Password.";
            errorlogin.style.margin = "10px";
            errorlogin.style.color = "red";
            </script>';
        }
      
    }else{
        // header('location:login.php');
        // echo '<script type="text/javascript">alert("WRONG EMAIL OR PASSWORD!");window.location.href="login.php";</script>';
        echo '<script type="text/javascript" defer>
        var errorlogin = document.getElementById("errorlogin");
        errorlogin.innerHTML = "*Wrong Email or Password.";
        errorlogin.style.margin = "10px";
        errorlogin.style.color = "red";
        </script>';
        }
}

$sentencia=null;
$resultado=null;
}
