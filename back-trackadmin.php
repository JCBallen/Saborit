<?php
session_start();
include_once 'conexion.php';


if (isset($_POST['track-code']) && isset($_POST['track-lat']) && isset($_POST['track-long']) && isset($_POST['track-miles']) && isset($_POST['track-time'])){
  
  $codigo = $_POST['track-code'];
  $latitud = $_POST['track-lat'];
  $longitud = $_POST['track-long'];
  $millas=$_POST['track-miles'];
  $tiempo=$_POST['track-time'];
  
  
  $sql="SELECT * FROM tracker WHERE code = ?";
  $sentencia=$pdo->prepare($sql);
  $sentencia->execute(array($codigo));
  $resultado = $sentencia->fetch();
  // var_dump($resultado);
  
  if($resultado['code']==$codigo){
    $sql_edit="UPDATE tracker SET lt=?,lg=?,miles=?,arrivalTime=?  WHERE code = ?";
    $sentencia_edit=$pdo->prepare($sql_edit);
    $sentencia_edit->execute(array($latitud,$longitud,$millas,$tiempo,$codigo));
    echo '<script type="text/javascript">alert("TRACKING CODE SUCCESSFULLY UPDATED");window.location.href="TrackingAdmin.php";</script>';
    
  }else{
    
    $sql_add = 'INSERT INTO tracker (code,lt,lg,miles,arrivalTime) VALUES (?,?,?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_add);
    $sentencia_agregar -> execute(array($codigo,$latitud,$longitud,$millas,$tiempo));
    
    
    $codigo = null;
    $latitud = null;
    $longitud = null;
    $sentencia_agregar = null;
    $pdo = null;

    echo '<script type="text/javascript">alert("TRACKING CODE SUCCESSFULLY REGISTERED");window.location.href="TrackingAdmin.php";</script>';
  }
    // header('location:TrackingAdmin.php');
  }
