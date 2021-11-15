<!-- <!DOCTYPE html>
<html lang="en-US"> -->
<!-- <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Saborit Express</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="design.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head> 
<body> -->
    <header>
            <div class="nav1">
                <div class="nav1-container">
                 <a href="<?php if($_SESSION['user']=="admin"){echo 'tracking-admin';}else{echo 'drivers';} ?>">
                 <p>Hello <?php echo $_SESSION['user']; ?>!</p>
                 </a>
                 <img src="https://i.ibb.co/0CYFYP6/Driver.png" alt="Driver">
                 <a id=logout href="logout">Log Out</a></div>
            </div>
            <nav class="navbar2">
                <a href="index"><img class="logo" src="https://i.ibb.co/1G4Zj02/Recurso-17.png" alt="logo"></a>
                    <label for="btn" class="btn-menu">
                        <span class="material-icons">menu</span>
                    </label>
                    <input class="checkbox" type="checkbox" id="btn">
                    <ul>
                        <li>
                            <label for="btn-1" class="btn-submenu">Shipping </label>
                            <a class="shipping">Shipping 
                            <div class="point">
                                <span class="material-icons" style="font-size: x-small;">fiber_manual_record</span>
                            </div></a>
                            <input class="checkbox" type="checkbox" id="btn-1">
                            <ul class="submenu">
                                <li><a href="our-trucks">Our Trucks</a></li>
                                <li><a href="types-of-load">Types of Chargo</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="tracking">Tracking
                            <div class="point">
                                <span class="material-icons" style="font-size: x-small;">fiber_manual_record</span>
                            </div></a>
                        </li>
                        <li>
                            <a href="contact-us">Contact Us
                            <div class="point">
                                <span class="material-icons" style="font-size: x-small;">fiber_manual_record</span>
                            </div></a>
                        </li>
                        <li>
                            <a class="cta" href="quote">GET A QUOTE</a>
                        </li>
                    </ul>         
            </nav>
    </header>
<!-- </body> -->
<!-- </html> -->