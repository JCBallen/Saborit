<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="shortcut icon" href="https://i.ibb.co/1G4Zj02/Recurso-17.png" type="image/x-icon">
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <div class="contact-container">
<div class="caja-main">
    <h1 class="main-contact">contact us</h1>

    <!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScvapoZRC3gattm1Ex6I_vUPZIAPz4RfHlg2xPiPrEckMKTQw/viewform?embedded=true" width="100%" height="812" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe> -->
    <form action="sendMail.php" method="POST" class="form-contact">
        <label class="contact-label" for="contact-name" id="a">Name</label><br>
        
        <input id="name" class="contact-input" type="text" name="contact-name" class="casilla" style="padding-left: 15px ;"><br><br>
        

        <label class="contact-label" for="mail">Email</label><br>
        
        <input id="email" class="contact-input" type="email" name="mail" class="casilla" style="padding-left: 15px;"><br><br>
        
        <label class="contact-label" for="subject">Subject</label><br>
        
        <input id="subject" class="contact-input" type="text" name="subject" class="casilla" style="padding-left: 15px;"><br><br>
        
        
        <label class="contact-label" for="message">Message</label><br>
        <textarea id="message" type="text" name="message" id="mensaje" class="casilla-textarea" style="padding: 15px" cols="30" rows="10"></textarea><br><br>

        <div id="errorcontact"></div>
        <input type="submit" name="submit" value="Submit" class="btn-contact" onclick='return validateContactUs()'>
    </form>
</div>
</div>
<script src="appContactUs.js"></script>
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
