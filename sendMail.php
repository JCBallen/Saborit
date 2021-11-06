<?php

//$addressee = 'u1202199@unimilitar.edu.co';
 //Cada uno de los inputs del form deben tener un name equivalente a ''

     //   $name =$_POST['contact-name'];
  //       $email=$_POST['mail'];
    //      $subject=$_POST['subject'];
   //         $message=$_POST['message'];

  //  $header= "Enviado desde Sabrocit, USA ";
    // $fullMessage=$message ."\nSincerely " . $name;

  //  $mail=@mail($addressee, $subject, $message, $header);

$para='u1202199@unimilitar.edu.co';
$titulo=$_POST['subject'];
$mensaje=$_POST['message'];
$cabeceras='From: webmaster@example.com' . "\r\n" . 'Reply-To: webmaster@example.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);

    echo "<script>alert('Your mail was sent successfully')</script>";
    echo "<script>setTimeout(\"location.href='contactUs.php'\", 2000)</script>";
