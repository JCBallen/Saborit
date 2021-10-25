<?php

$link='mysql:host=localhost;dbname=SaboritDB';
$usuario='root';
$pass='root';

try{
    $pdo=new PDO($link,$usuario,$pass);

    // $con=new mysqli("localhost",$usuario,$pass,"SaboritDB");
    // if($con){
    //     echo 'Conectado';
    // }
}catch(PDOException $e){
    print "¡Error!: ".$e->getMessage()."<br>";
    die();
}
