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
    <body>
        <div class="container">
            <div class="image">
                <img src="https://i.ibb.co/smdP7BB/Placeholder.png" alt="Placeholder">
                <h1 class="title">Shipping Tracker Form</h1>
            </div>
            <form>
                <div class="input-text">
                    <span>Let the client know where their load is</span><br>
                    <input type="number" placeholder="Tracker Code"><br>
                    <input type="text" placeholder="Milles to Destination"><br>
                    <input type="text" placeholder="Estimated Time to Arrival"><br>
                    
                    <label class="select-img" for="files">Select Image</label>
                    <input style="visibility:hidden" type="file" class="subir-imagen" id="files">
                    
                </div>
                <div class="button">
                    <input type="submit" value="Submit" class="btn-admin">
                </div>
            </form>
        </div>
    </body>
</html>
<?php
include "Navbar.php";
include "footer.php";
?>