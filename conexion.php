<?php

$link='mysql:host=localhost;dbname=primerdb';
$usuario='root';
$pass='root';

try{
    $pdo=new PDO($link,$usuario,$pass);
    echo 'Conectado';
}catch(PDOException $e){
    print "¡Error!: ".$e->getMessage()."<br>";
    die();
}
?>