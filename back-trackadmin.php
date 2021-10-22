<?php
// session_start();
include_once 'conexion.php';

if (isset($_POST['track-code']) && isset($_POST['track-lat']) && isset($_POST['track-long']) ){
    $codigo = $_POST['track-code'];
    $latitud = $_POST['track-lat'];
    $longitud = $_POST['track-long'];
      
    $sql_add = 'INSERT INTO tracker (code,lt,lg) VALUES (?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_add);
    $sentencia_agregar -> execute(array($codigo,$latitud,$longitud));
    
  
    $codigo = null;
    $latitud = null;
    $longitud = null;
    $sentencia_agregar = null;
    $pdo = null;
  
    header('location:TrackingAdmin.php');
  }
