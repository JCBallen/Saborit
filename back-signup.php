<?php

include_once 'conexion.php';

if(isset($_POST['nombre']) && isset($_POST['id']) && isset($_POST['correo']) && isset($_POST['contrasena'])){
  $nombre = $_POST['nombre'];
  $id = $_POST['id'];
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];
  $contrasena=password_hash($contrasena,PASSWORD_DEFAULT);

  $sql_add = 'INSERT INTO users (nombre,identificacion,correo,contrasena) VALUES (?,?,?,?)';
  $sentencia_agregar = $pdo->prepare($sql_add);
  $sentencia_agregar -> execute(array($nombre,$id,$correo,$contrasena));

  $nombre = null;
  $id = null;
  $correo = null;
  $contrasena = null;
  $sentencia_agregar = null;
  $pdo = null;

  header('location:signup.php');

}
