<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="Saborit Express"/>
    <meta name="copyright" content="Liuver Xavier"/>
    <meta name="description" content="Saborit Express Inc. is an active interstate freight company that operates throughout the United States and its borders; has been authorized to move properties."/>
    <meta name="keywords" content="trucks,truck,delivery,quote,shipping,load,tracking,drivers"/>
    <meta name="robots" content="index,follow"/>
    <link rel="canonical" href="https://saborit.net/"/>
    <link rel="shortcut icon" href="https://i.ibb.co/0mVtLWn/logo-png.png" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link rel="stylesheet" href="design.css" />
    <title>Saborit Express</title>
</head>
<body class="landing-body">
<?php
if(isset($_SESSION['user'])){
  include "NavbarLogIn.php";
}else{
  include "Navbar.php";
}
?>
    <div class="hero-image">
        <div class="hero-text">
          <h1 class="main-text">Around usa</h1>
          <p>Saborit Express Inc is an active interstate freight company that operates throughout the United States and its borders; has been authorized to move properties under MC1118164 and USDOT 3442010, and has been active since July 22, 2020.</p>
        </div>
      
 </div>
<div class="main-box">
    <h2 class="header-servicios">services we offer</h2>
    <div class="caja1">
        <div class="texto1-caja1">
          <p>Thanks to our large and sturdy trucks, we can load a wide variety of items.</p><br>
          <p class="parrafo-cool1">which can be</p>
        </div>
        
        <div class="imagenes-caja">
            <div class="circulo">
                 <img src="https://i.ibb.co/M7fKF02/diet-1.png" alt="diet-1 services-we-offer: Food" class="zanahoria">
             
            <p> Food</p>
          </div><br>
            <div class="circulo">
                  <img src="https://i.ibb.co/VNL4hRT/grocery-cart-2.png" alt="services-we-offer: Commodity" class="carromercado">
            
            <p>Commodity </p>
          </div><br>
            <div class="circulo">
            <img src="https://i.ibb.co/cN7WjtH/machinery.png" alt="services-we-offer: Machinery" class="maquina">
           
            <p> Machinery</p>
          </div><br>
        
        </div>
     </div>
    </div>
<?php
include "footer.php";
?>
</body>
</html>