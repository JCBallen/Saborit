<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <div class="contact-container">
<div class="caja-main">
    <h1 class="main-contact">contact us</h1>
    <form action="" method="GET" class="form-contact">
        <label class="contact-label" for="contact-name" id="a">Name</label><br>
        
        <input class="contact-input" type="text" name="contact-name" class="casilla" style="padding-left: 15px ;"><br><br>
        <!-- <div class="circulo">a</div> -->

        <label class="contact-label" for="mail">Email</label><br>
        <!-- <div class="circulo"> -->
        <input class="contact-input" type="email" name="mail" class="casilla" style="padding-left: 15px;"><br><br>
        <!-- </div> -->
        <label class="contact-label" for="subject">Subject</label><br>
        <!-- <div> -->
        <input  class="contact-input" type="text" name="subject" class="casilla" style="padding-left: 15px;"><br><br>
        <!-- </div> -->
        
        <label class="contact-label" for="message">Message</label><br>
        <textarea type="text" name="message" id="mensaje" class="casilla-textarea" style="padding: 15px" cols="30" rows="10"></textarea><br><br>


        <input type="submit" value="Submit" class="btn-contact">
    </form>
</div>
</div>
</body>
</html>
<?php
include "Navbar.php";
include "footer.php";
?>