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
      <form action="back-signup.php" method="POST" class="form-sign">
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
      <br />
      <div class="recovery">
        <p>
          Already have an account?&nbsp;<a class="log" href="login.php"
            >Log In</a
          >
        </p>
      </div>
    </div>
    <script src="appSignUp.js"></script>
  </body>
</html>

<?php
  include "Navbar.php";
  include "footer.php";
?>
