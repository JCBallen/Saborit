<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="https://i.ibb.co/0mVtLWn/logo-png.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="design.css" />
    <title>Types Of Load</title>
  </head>
  <?php
if(isset($_SESSION['user'])){
  include "NavbarLogIn.php";
}else{
  include "Navbar.php";
}
  ?>
  <body class="tl-body">
    <div class="body-tl">
      <h1 class="title-tl">TYPES OF LOAD</h1>
      <div class="buttons">
        <input type="radio" name="opc" id="b1"/>
        <label for="b1">LESS THAN TRUCKLOAD (LTL)</label>
        <input type="radio" name="opc" id="b2"/>
        <label for="b2">FULL TRUCKLOAD (FTL)</label>
        <ul class="t1">
            <li>
                Ideal for small cargos that do not require the vehicle to be fully
                loaded. Less Than Truckload shipping or LTL is the transportation of
                freight that combines shipments from multiple customers in a
                single truck.
            </li>
        </ul>
        <ul class="t2">
            <li>
                Specialized for larger loads that require full size use of the
                truck. FTL or Full Truckload is the ground transportation service in
                which a complete truck is dedicated to a single load or, in other
                words, to a single customer.
            </li>
        </ul>
        <img src="https://i.ibb.co/3fFGBM7/Camion.png" alt="camion" />
        <img src="https://i.ibb.co/hRwpq46/mid.jpg" alt="mid" />
        <img src="https://i.ibb.co/7RQyv7J/full.jpg" alt="full" />
    </div>
<?php
include "footer.php";
?>
  </body>
</html>
