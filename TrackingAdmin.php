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
    <body class="ta-body">
    <div class="track-admin">
    <div class="signup-body">
      <div>
        <img src="https://i.ibb.co/GFGC13W/add-user.png" alt="signup-img" />
        <p class="title">SIGN UP</p>
      </div>
      <form action="back-signup.php" method="POST" class="form-sign">
        <span>Register new drivers</span><br>
        <input
          id="name"
          class="signup-input"
          type="text"
          name="nombre"
          placeholder="Name"
        />
        <input
          id="number"
          class="signup-input"
          type="number"
          name="id"
          placeholder="Identification Number"
        />
        <input
          id="email"
          class="signup-input"
          type="email"
          name="correo"
          placeholder="Email Address"
        />
        <input
          id="password"
          class="signup-input"
          type="password"
          name="contrasena"
          placeholder="Password"
        />
        <div id="errorsignup"></div>
        <input
          type="submit"
          value="Register"
          class="btn"
          onclick="return validateSignUp()"
        />
      </form>
      <!--<div class="recovery">
        <p>
          Already have an account?&nbsp;<a class="log" href="login.php"
            >Log In</a
          >
        </p>
      </div>-->
    </div>
    <div class="line"></div>
    <div class="container">
        <div class="image">
            <img src="https://i.ibb.co/smdP7BB/Placeholder.png" alt="Placeholder">
            <h1 class="title">TRACKER FORM</h1>
         
        <form action="back-trackadmin.php" method="POST" enctype="multipart/form-data">
            <div class="input-text">

                <span>Let the client know where their load is</span><br>
                <input type="number" name="track-code" placeholder="Tracker Code" required ><br>
                 <input type="number" step="any" name="track-lat" placeholder="Latitude" required><br>
                <input type="number" step="any" name="track-long" placeholder="Longitude" required><br>
                <input type="number" step="any" name="track-miles" placeholder="Miles to Destination" required><br>
                <input type="datetime-local" name="track-time" required>
                    
                <!-- <label class="select-img" for="files">Select Image</label> -->
                <!-- <input style="visibility:hidden" type="file" name="track-img" class="subir-imagen" id="files"> -->
                    
            </div>
            <div class="button">
                <input type="submit" value="Submit" class="btn-admin" >
            </div>
          </div>
        </form>
    </div>
    </div>
    </body>
</html>
<?php
if(isset($_SESSION['user'])){
  include "NavbarLogIn.php";
}else{
  include "Navbar.php";
}
include "footer.php";
?>