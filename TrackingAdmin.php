<?php

#VALIDA SI EXISTE UNA SESIÓN ACTIVA
session_start();
if(($_SESSION['user'])=="admin"){
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
        <link rel="shortcut icon" href="https://i.ibb.co/0mVtLWn/logo-png.png" type="image/x-icon">
        <link rel="stylesheet" href="design.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
<?php
if(isset($_SESSION['user'])){
  include "NavbarLogIn.php";
}else{
  include "Navbar.php";
}
?>
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
          required
        />
        <input
          id="number"
          class="signup-input"
          type="number"
          name="id"
          placeholder="Identification Number"
          required
        />
        <input
          id="email"
          class="signup-input"
          type="email"
          name="correo"
          placeholder="Email Address"
          required
        />
        <input
          id="password"
          class="signup-input"
          type="password"
          name="contrasena"
          placeholder="Password"
          required
        />
        <div id="errorsignup"></div>
        <input
          type="submit"
          value="Register"
          class="btn"
          onclick="return validateSignUp()"
          required
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
        <div class="ta-image">
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
              <div class="ta-state">
              <input style="display: flex;" type="radio" name="track-state" id="progress" value="progress" required>
              <label for="progress">In Progress</label>
              <input style="display: flex;" type="radio" name="track-state" id="end" value="ended" required>
              <label for="end">Ended</label>
              </div>
                
                <!-- <label class="select-img" for="files">Select Image</label> -->
                <!-- <input style="visibility:hidden" type="file" name="track-img" class="subir-imagen" id="files"> -->
                
              </div>
              <div id="notifications"></div>
              <div class="button">
                <input type="submit" value="Submit" class="btn-admin" >
              </div>
            </form>
          </div>
    </div>
    </div>
    <a id="btn-admin-tables" href="tables">Tables</a>
<?php
include "footer.php";
?>
</body>
</html>