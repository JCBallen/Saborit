<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://saborit.net/"/>
    <link rel="shortcut icon" href="https://i.ibb.co/1G4Zj02/Recurso-17.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="design.css">
    <title>Contact Us</title>
</head>
<body>
<?php
if(isset($_SESSION['user'])){
    include "NavbarLogIn.php";
}else{
    include "Navbar.php";
}
?>
<div class="contact-container">
<div class="caja-main">
    <h1 class="main-contact">contact us</h1>

    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScvapoZRC3gattm1Ex6I_vUPZIAPz4RfHlg2xPiPrEckMKTQw/viewform?embedded=true" width="100%" height="812" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe> 
    <!--<form action="sendMail.php" method="POST" id="contact-form" class="form-contact" enctype="text/plain">
        <label class="contact-label" for="name" id="a">Name</label><br>
        
        <input id="name" class="contact-input casilla" type="text" name="contact-name" style="padding-left: 15px ;"><br><br>
        

        <label class="contact-label" for="email">Email</label><br>
        
        <input id="email" class="contact-input casilla" type="email" name="mail" style="padding-left: 15px;"><br><br>
        
        <label class="contact-label" for="subject">Subject</label><br>
        
        <input id="subject" class="contact-input casilla" type="text" name="subject" style="padding-left: 15px;"><br><br>
        
        
        <label class="contact-label" for="message">Message</label><br>
        <textarea id="message" name="message" form="contact-form" class="casilla-textarea" style="padding: 15px" cols="30" rows="10"></textarea><br><br>

        <div id="errorcontact"></div>
        <input type="submit" name="submit" value="Submit" class="btn-contact">
    </form> -->
</div>
</div>
<script src="appContactUs.js"></script>
<?php
    include "footer.php";
?>
</body>
</html>
