<?php
session_start();
require_once 'conexion.php';
require_once 'TrackingAdmin.php';


if (isset($_POST['track-code']) && isset($_POST['track-lat']) && isset($_POST['track-long']) && isset($_POST['track-miles']) && isset($_POST['track-time'])){
  
  $codigo = $_POST['track-code'];
  $latitud = $_POST['track-lat'];
  $longitud = $_POST['track-long'];
  $millas=$_POST['track-miles'];
  $tiempo=$_POST['track-time'];
  $estado=$_POST['track-state'];
  
  
  $sql="SELECT * FROM tracker WHERE code = ?";
  $sentencia=$pdo->prepare($sql);
  $sentencia->execute(array($codigo));
  $resultado = $sentencia->fetch();
  // var_dump($resultado);
  
  if($resultado['code']==$codigo){
    $sql_edit="UPDATE tracker SET lt=?,lg=?,miles=?,arrivalTime=?,dlvState=? WHERE code = ?";
    $sentencia_edit=$pdo->prepare($sql_edit);
    $sentencia_edit->execute(array($latitud,$longitud,$millas,$tiempo,$estado,$codigo));
    // echo '<script type="text/javascript">alert("TRACKING CODE SUCCESSFULLY UPDATED");window.location.href="TrackingAdmin.php";</script>';
    echo '<script type="text/javascript" defer>
          var notifications = document.getElementById("notifications");
          notifications.innerHTML = "*Tracking Code UPDATED.";
          notifications.style.margin = "10px";
          notifications.style.textAlign = "center";
          notifications.style.fontWeight = "bolder";
          notifications.style.color = "green";
          </script>';
  }else{
    
    $sql_add = 'INSERT INTO tracker (code,lt,lg,miles,arrivalTime,dlvState) VALUES (?,?,?,?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_add);
    $sentencia_agregar -> execute(array($codigo,$latitud,$longitud,$millas,$tiempo,$estado));
    
    
    $codigo = null;
    $latitud = null;
    $longitud = null;
    $sentencia_agregar = null;
    $pdo = null;

    // echo '<script type="text/javascript">alert("TRACKING CODE SUCCESSFULLY REGISTERED");window.location.href="TrackingAdmin.php";</script>';
    echo '<script type="text/javascript" defer>
    var notifications = document.getElementById("notifications");
    notifications.innerHTML = "*Tracking Code REGISTERED.";
    notifications.style.margin = "10px";
    notifications.style.textAlign = "center";
    notifications.style.fontWeight = "bolder";
    notifications.style.color = "green";
    </script>';
  }
    // header('location:TrackingAdmin.php');
  }
