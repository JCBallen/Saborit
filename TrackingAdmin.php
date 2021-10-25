<?php

#VALIDA SI EXISTE UNA SESIÓN ACTIVA
session_start();
if(isset($_SESSION['user'])){
}else{
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tracking | Saborit Express</title>
        <link rel="stylesheet" href="design.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
    </head>
    <body class="track-admin">
        <div class="container">
        <a id=logout href="logout.php">Log Out</a>

            <div class="image">
                <img src="https://i.ibb.co/smdP7BB/Placeholder.png" alt="Placeholder">
                <h1 class="title">Shipping Tracker Form</h1>
            </div>
            <form action="back-trackadmin.php" method="POST" enctype="multipart/form-data">
                <div class="input-text">

                    <span>Let the client know where their load is</span><br>
                    <input type="number" name="track-code" placeholder="Tracker Code" required ><br>
                    <input type="number" step="any" name="track-lat" placeholder="Latitude" required><br>
                    <input type="number" step="any" name="track-long" placeholder="Longitude" required><br>
                    <input type="number" step="any" name="track-miles" placeholder="Miles to Destination" required><br>
                    <input type="datetime-local" name="track-time" required><br>
                    
                    <!-- <label class="select-img" for="files">Select Image</label> -->
                    <!-- <input style="visibility:hidden" type="file" name="track-img" class="subir-imagen" id="files"> -->
                    
                </div>
                <div class="button">
                    <input type="submit" value="Submit" class="btn-admin" >
                </div>
            </form>
        </div>
    </body>
</html>
<?php
include "Navbar.php";
include "footer.php";
?>