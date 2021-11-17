<?php

#VALIDA SI EXISTE UNA SESIÓN ACTIVA
session_start();
if(isset($_SESSION['user'])){
}else{
    header('location:index');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://saborit.net/"/>
    <link rel="shortcut icon" href="https://i.ibb.co/0mVtLWn/logo-png.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="design.css">
    <title>Drivers</title>
</head>
<body class="drivers-bd">
<?php
include "NavbarLogIn.php";
?>
    <div class="drivers">
        <!--<a id=logout href="logout">Log Out</a>-->
        <h1 class="title">WELCOME AGAIN <?php echo $_SESSION['user']; ?> </h1>
        <div class="drivers-container">
            <div class="card-1">
                <h3 class="pretitle">FLEET STATUS</h3>
                <a href="https://docs.google.com/spreadsheets/d/1kXMBodEn3JsQz6__i06Md8GZHUiX9nu8K-fmQ7ynI3s/edit?usp=sharing" target="_blank"><img src="https://i.ibb.co/xs5LxSb/Maintenance.png" alt="Maintenance"></a>
                <p class="text">Click on the image above to access the document</p>
            </div>
            <div class="card-2">
                <h3 class="pretitle">PAYMENT STATUS</h3>
                <a href="https://docs.google.com/spreadsheets/d/1kXMBodEn3JsQz6__i06Md8GZHUiX9nu8K-fmQ7ynI3s/edit?usp=sharing" target="_blank"><img src="https://i.ibb.co/Mh6SfJx/Payment.png" alt="Payment"></a>
                <p class="text">Click on the image above to access the document</p>
            </div>
        </div>
    </div>
<?php
include "footer.php";
?>
</body>
</html>