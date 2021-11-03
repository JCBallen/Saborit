<?php
$email=$_POST["email-del"];

require_once "conexion.php";
$sql='DELETE FROM users WHERE correo = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($email));

echo '<script type="text/javascript">window.location.href="tables.php";</script>';