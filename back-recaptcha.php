<?php

define('siteKey','6Lc04RUdAAAAAJIM-gtUx7Ub5NStA_-_5OxOvzSx');
define('secretKey','6Lc04RUdAAAAAB5O_lJ6IcwLwTfUzfTN-eB3d2D3');


if($_POST['google-response-token']){
    $captchaToken = $_POST['google-response-token'];

    $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".secretKey."&response={$captchaToken}");
    $respuesta = json_decode($respuesta);
    $respuesta = (array) $respuesta;
    // var_dump($respuesta);
	if($respuesta['score']>0.6){
		// var_dump($respuesta);
		include_once 'back-login.php';
	}else{
		echo '<script type="text/javascript">alert("Please rewrite your data to confirm that you\'re not a robot!");window.location.href="login.php";</script>';
	}
}