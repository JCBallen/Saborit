<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="design.css" type="text/css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined"
    />
    <title>SignUp</title>
  </head>
  <body class="su-body">
    <div class="signup-body">
      <div>
        <img src="https://i.ibb.co/GFGC13W/add-user.png" alt="signup-img" />
        <p class="title">SIGN UP</p>
      </div>
      <form action="" method="get" class="form-sign">
        <input class="signup-input" type="text" placeholder="Name" />
        <input
          class="signup-input"
          type="number"
          placeholder="Identification Number"
        />
        <input class="signup-input" type="email" placeholder="Email Address" />
        <input class="signup-input" type="password" placeholder="Password" />
        <input type="submit" value="Register" class="btn" />
      </form>
      <div class="recovery">
        <p>Already have an account?&nbsp;<a class="log" href="#">Log In</a></p>
      </div>
    </div>
  </body>
</html>
<?php
include "Navbar.php";
include "footer.php";
?>