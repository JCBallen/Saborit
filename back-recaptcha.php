<?php 
   if(isset($_POST['g-token'])){
     
    $secretKey = '6Lc04RUdAAAAAB5O_lJ6IcwLwTfUzfTN-eB3d2D3';
    $token = $_POST['g-token'];
	$ip = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$token."&remoteip=".$ip;
    $request = file_get_contents($url);
    $request = json_decode($request);
    $request = (array) $request;
    if($request["score"]>0.6){
    //   include_once 'back-login.php';
	echo "Realmente si funciona pero no en MAMP solo en un Hosting";
    }else{
	  include_once 'back-login.php';
    }

   }