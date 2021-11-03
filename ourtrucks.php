<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="https://i.ibb.co/1G4Zj02/Recurso-17.png" type="image/x-icon">
    <link rel="stylesheet" href="design.css" />
    <title>Our Trucks</title>
  </head>
  <body class="ot-body">
    <section class="main-ot">
      <div class="ot">
        <h2>OUR TRUCKS</h2>
        <br>
        <p>We have a variety of trucks that support loads up to x lb</p>
        <p>
          <br>
          All our roads are <strong>Brand New</strong> equipement 2021 and 2022
        </p>
      </div>
      <div class="img-ot">
        <div class="img-ot1">
          <img src="https://i.ibb.co/RgGg95g/im1.jpg" alt="im1" />
          <h3 class="truck-name">Reefers 53ft Long</h3>
        </div>
        <div class="img-ot2">
          <img src="https://i.ibb.co/wJ6Kc64/im2.jpg" alt="im2" />
          <h3 class="truck-name">Dry Van 53ft Long</h3>
        </div>
      </div>
    </section>
    <!-- <div id="fondo"></div> -->
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
