<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="canonical" href="https://saborit.net/"/>
    <link rel="shortcut icon" href="https://i.ibb.co/0mVtLWn/logo-png.png" type="image/x-icon" />
    <link rel="stylesheet" href="design.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
    <script defer src="https://www.google.com/recaptcha/api.js?render=6Lc04RUdAAAAAJIM-gtUx7Ub5NStA_-_5OxOvzSx"></script>
    
    <script defer src="appLogIn.js"></script>
  
    <title>LogIn</title>
  </head>
  <body class="li-body">
  <?php
  include "Navbar.php";
  ?>
    <div class="login-body">
      <div>
        <img src="https://i.ibb.co/2PRtT9Q/usuario.png" alt="login-img" />
        <p class="title">LOG IN</p>
      </div>
      <form action="back-recaptcha.php" method="POST" id="form-login" class="form-log">
        <input type="hidden" name="g-token" id="google-t">
        <input
          id="email"
          class="log-input"
          type="email"
          name="log-correo"
          placeholder="Email Address"
          value="<?php echo $_COOKIE['unm']; ?>"
          autofocus="autofocus"
          required
        />
        <input
          id="password"
          class="log-input"
          type="password"
          name="log-contrasena"
          placeholder="Password"
          value="<?php echo $_COOKIE['pwd']; ?>"
          required
        />

        <div class="form-log-end">
          <input type="checkbox" name="log-remember" id="btn-rm" checked/>
          <label for="btn-rm" >&nbsp;Remember me&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <a class="forgot" href="#" onclick="forgot();">Forgot Password?</a>
        </div>
        <div id="errorlogin"></div>
        <div class="form-log">
          <input type="submit" class="btn" name="log-submit" id="log-login" value="Log In" onclick="return login()"/>
        </div>
      </form>
    </div>
    
    <script>
    grecaptcha.ready(function() {
    grecaptcha.execute('6Lc04RUdAAAAAJIM-gtUx7Ub5NStA_-_5OxOvzSx', {action: 'homepage'}).then(function(token) {
       document.getElementById("google-t").value = token;
       console.log(token);
    });
    });
    </script>

<?php
include "footer.php";
?>
  </body>
</html>
