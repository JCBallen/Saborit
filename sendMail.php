<?php

$addressee = 'pipemanjare@hotmail.com';
 //Cada uno de los inputs del form deben tener un name equivalente a ''
if (isset($_POST['submit'])){     
   
    if(!empty($_POST['contact-name']) && !empty($_POST['mail']) && !empty($_POST['subject']) && !empty($_POST['message'])){
        $name =$_POST['contact-name'];
         $email=$_POST['mail'];
          $subject=$_POST['subject'];
            $message=$_POST['message'];

    $header= "Enviado desde Sabrocit, USA ";
    $fullMessage=$message ."\nSincerely " . $name;

    $mail=@mail($addressee, $subject, $fullMessage, $header);

    echo "<script>alert('Your mail was sent successfully')</script>";
    echo "<script>setTimeout(\"location.href='contactUs.php'\", 2000)</script>";

    }

}