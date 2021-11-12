<?php
$email=$_POST["code-del"];

require_once "conexion.php";
$sql='DELETE FROM tracker WHERE code = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($email));

echo '<script type="text/javascript">window.location.href="tables";</script>';