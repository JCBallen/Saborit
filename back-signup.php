<?php

include_once 'conexion.php';
include 'TrackingAdmin.php';


if( preg_match('/^[a-zA-ZáéíóúñÁÉÍÓÚÑ ]+$/', $_POST['nombre']) &&
preg_match('/^[0-9a-zA-Z]+$/', $_POST['contrasena']) ){

  if(isset($_POST['nombre']) && isset($_POST['id']) && isset($_POST['correo']) && isset($_POST['contrasena'])){
    $nombre = $_POST['nombre'];
    $id = $_POST['id'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena=password_hash($contrasena,PASSWORD_DEFAULT);

    #VERIFICA SI USUARIO EXISTE
    $sql='SELECT * FROM users WHERE correo = ?';
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute(array($correo));
    $resultado = $sentencia->fetch();

      if($resultado){
        // echo '<script type="text/javascript">alert("THIS EMAIL IS ALREADY REGISTERED!");window.location.href="signup.php";</script>';
        echo '<script type="text/javascript" defer>
              var errorSignUp = document.getElementById("errorsignup");
              errorSignUp.innerHTML = "*This Email is Already Registered.";
              errorSignUp.style.margin = "10px";
              errorSignUp.style.color = "red";
              </script>';
      }else{
      $sql_add = 'INSERT INTO users (nombre,identificacion,correo,contrasena) VALUES (?,?,?,?)';
      $sentencia_agregar = $pdo->prepare($sql_add);
      $sentencia_agregar -> execute(array($nombre,$id,$correo,$contrasena));

      $nombre = null;
      $id = null;
      $correo = null;
      $contrasena = null;
      $sentencia_agregar = null;
      $pdo = null;

      echo '<script type="text/javascript" defer>
      var errorSignUp = document.getElementById("errorsignup");
      errorSignUp.innerHTML = "*Email Successfully Registered.";
      errorSignUp.style.margin = "10px";
      errorSignUp.style.color = "green";
      </script>';

      // header('location:TrackingAdmin.php');
      }
    
  }
}else{
  echo '<script type="text/javascript" defer>
  var errorSignUp = document.getElementById("errorsignup");
  errorSignUp.innerHTML = "*Don\'t Use Special Characters.";
  errorSignUp.style.margin = "10px";
  errorSignUp.style.color = "red";
  </script>';
}
