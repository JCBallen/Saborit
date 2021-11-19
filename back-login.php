<?php

session_start();

include_once 'conexion.php';

if( preg_match('/^[a-zA-ZáéíóúñÁÉÍÓÚÑ ]+$/', $_POST['log-correo']) &&
preg_match('/^[0-9a-zA-Z]+$/', $_POST['log-contrasena']) ){

if(isset($_POST['log-correo']) && isset($_POST['log-contrasena'])){
  $usuario_login=$_POST['log-correo'];
  $contrasena_login=$_POST['log-contrasena'];
  $remember=$_POST['log-remember'];
  
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
    if($remember=="on"){
      setcookie('unm',$usuario_login,time()+3600);
      setcookie('pwd',$contrasena_login,time()+3600);
    }else{
      setcookie('unm',"",time()-3600);
      setcookie('pwd',"",time()-3600);
    }
    // session_start();
    // header('location:tracking-admin.php');
    include_once 'login.php';
    echo '<script type="text/javascript" defer>
    var errorlogin = document.getElementById("errorlogin");
    errorlogin.innerHTML = "*Successfully Login.";
    errorlogin.style.margin = "10px";
              errorlogin.style.color = "green";
              window.location.href="tracking-admin";
              </script>';
  }
    else{      
      // header('location:login.php');
      // echo '<script type="text/javascript">alert("WRONG EMAIL OR PASSWORD!");window.location.href="login.php";</script>';
      include_once 'login.php';
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
        if($remember=="on"){
          setcookie("unm",$usuario_login,time()+3600);
          setcookie("pwd",$contrasena_login,time()+3600);
        }else{
          setcookie('unm',"",time()-3600);
          setcookie('pwd',"",time()-3600);
        }
        // session_start();
        // header('location:drivers.php');
        include_once 'login.php';
        echo '<script type="text/javascript" defer>
              var errorlogin = document.getElementById("errorlogin");
              errorlogin.innerHTML = "*Successfully Login.";
              errorlogin.style.margin = "10px";
              errorlogin.style.color = "green";
              window.location.href="drivers";
              </script>';
      }
        else{
            // header('location:login.php');
            // echo '<script type="text/javascript">alert("WRONG EMAIL OR PASSWORD!");window.location.href="login.php";</script>';
            include_once 'login.php';
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
        include_once 'login.php';
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

}else{
  include_once 'login.php';
  echo '<script type="text/javascript" defer>
  var errorSignUp = document.getElementById("errorlogin");
  errorSignUp.innerHTML = "*Don\'t Use Special Characters.";
  errorSignUp.style.margin = "10px";
  errorSignUp.style.color = "red";
  </script>';
}
