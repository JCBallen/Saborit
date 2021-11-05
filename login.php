<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="https://i.ibb.co/0mVtLWn/logo-png.png" type="image/x-icon">
    <link rel="stylesheet" href="design.css" />
    <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src='https://www.google.com/recaptcha/api.js?render=6Lc04RUdAAAAAJIM-gtUx7Ub5NStA_-_5OxOvzSx'></script>
    <script defer src="appLogIn.js"></script>
    <title>LogIn</title>
  </head>
  <body class="li-body">
    <div class="login-body">
      <div>
        <img src="https://i.ibb.co/2PRtT9Q/usuario.png" alt="login-img" />
        <p class="title">LOG IN</p>
      </div>
      <form action="back-login.php" method="POST" id="form-login" class="form-log">
        <input
          id="email"
          class="log-input"
          type="email"
          name="log-correo"
          placeholder="Email Address"
          autofocus="autofocus"
        />
        <input
          id="password"
          class="log-input"
          type="password"
          name="log-contrasena"
          placeholder="Password"
        />

        <input type="hidden" name="google-response-token" id="google-response-token">


        <div class="form-log-end">
          <input type="checkbox" id="btn-rm" />
          <label for="btn-rm"
            >&nbsp;Remember me&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label
          >
          <a class="forgot" href="#">Forgot Password?</a>
        </div>
        <div id="errorlogin"></div>
        <div class="form-log">
          <button type="button" class="btn" id="log-login" onclick="login()">Log In</button>
        </div>
      </form>
    </div>
    
  </body>
  </html>
<?php
include "Navbar.php";
include "footer.php";
?>
