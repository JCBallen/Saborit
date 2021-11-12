<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tracking | Saborit Express</title>
    <link rel="shortcut icon" href="https://i.ibb.co/0mVtLWn/logo-png.png" type="image/x-icon">
    <link rel="stylesheet" href="design.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
<?php
if(isset($_SESSION['user'])){
  include "NavbarLogIn.php";
}else{
  include "Navbar.php";
}
?>
  <body style="background: #d5d5d5">
    <div id="track-container" class="track-container">
      <img
        class="image"
        src="https://i.ibb.co/smdP7BB/Placeholder.png"
        alt="Placeholder"
      />
      <h1>SHIPPING TRACKER</h1>
      <form action="" id="form-track" method="POST">
        <div class="input-text">
          <span>Input yout ID given via email to see real-time location</span>
          <input
            id="code"
            type="number"
            class="input"
            name="track-id"
            placeholder="Tracker Code"
            onfocus="hideInfoTracker()"
          />
        </div>
        <input
          class="btn"
          type="submit"
          value="Submit"
          onclick="return showInfoTracker()"
          id="uy"
        />
      </form>
      <br/>
      <div id="errortrack"><p>Enter a valid number.</p></div>
      <div id="info">
        <div class="information">
          <div class="milles">

          <?php

          include_once 'conexion.php';
          $default="--";
          // header('location:tracking.php');
          if (isset($_POST['track-id'])){
          // $idtrack=$_POST['track-id'];
          // echo '<pre>';
          // var_dump($idtrack);
          // echo '</pre>';
          $sql="SELECT *,DATE_FORMAT(arrivalTime, '%M %D at %H:%i') AS arrivalTime FROM tracker WHERE code = {$_POST["track-id"]}";
          }
          if(isset($sql)){
          $sentencia=$pdo->prepare($sql);
          $sentencia->execute();
          $resultado = $sentencia->fetch();
            if($resultado==false){
            echo '<script>
                    document.getElementById("errortrack").style.display = "block";
                    </script>';
                  }
          }
            
         
          // $resultadoFinal=array("logitud"=>utf8_encode($resultado['lt']),"latitud"=>utf8_encode($resultado['lg']));
          // var_dump($resultado);
          // $sum=$resultado["lt"]-$resultado["lg"];

          // header('Content-Type: application/json');
          // echo json_encode($resultado);
          // echo $sum;

          
          // }
          // $show_json = json_encode($latitud , JSON_FORCE_OBJECT);
          // if ( json_last_error_msg()=="Malformed UTF-8 characters, possibly incorrectly encoded" ) {
          //     $show_json = json_encode($API_array, JSON_PARTIAL_OUTPUT_ON_ERROR );
          // }
          // if ( $show_json !== false ) {
          //     echo($show_json);
          // } else {
          //     die("json_encode fail: " . json_last_error_msg());
          // }
          // header('location:Tracking.php');

          ?>

            <span class="subtitle"><h4>Milles to Destination</h4></span>
            <p><?php if(!isset($resultado["miles"])){echo "{$default}";}else{ echo "{$resultado["miles"]}  milles";} ?></p>
          </div>
          <div class="time">
            <span class="subtitle"><h4>Estimated Time to Arrival</h4></span>
            <p><?php if(!isset($resultado["arrivalTime"])){echo "{$default}";}else{echo $resultado["arrivalTime"];} ?></p>
          </div>
        </div>

        <div id="map">
        <iframe class="mapai" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113463.58037076714!2d-80.4329678629207!3d27.29011766604179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88deeaeff6c50ead%3A0xf44a54f9de7e10e0!2sPort%20St.%20Lucie%2C%20Florida%2C%20EE.%20UU.!5e0!3m2!1ses!2sco!4v1632949952631!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- <img src="https://i.ibb.co/smdP7BB/Placeholder.png" alt="mapa" id="map" > -->
      </div>
    </div>

    <script type="text/javascript">
      // var req = new XMLHttpRequest();
      //   req.onreadystatechange = function () {
      //     // var json = JSON.parse(this.responseText);
      //     console.log(this.responseText);
      //   };
      //   req.open("get", "back-track.php", true);
      //   req.send();

      var lati="<?php echo $resultado["lt"]; ?>";
      var longa="<?php echo $resultado["lg"]; ?>";
      if(lati==""){lati=38.763538}else{lati=parseFloat(lati);}
      if(longa==""){longa=-97.802882}else{longa=parseFloat(longa);}

      // console.log(lati);   
      // alert(typeof longa);

      function iniciarMap() {
        document.getElementsByClassName("mapai")[0].style.display="none";
        var coord = { lat: lati, lng: longa };
        var map = new google.maps.Map(document.getElementById("map"), {
          zoom: 5,
          center: coord,
        });
        var marker = new google.maps.Marker({ position: coord, map: map });
      }
    </script>

    <script src="appTrack.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJ9WgRdqBiW9OyG3eSc5geRXrZ6lWXQjk&callback=iniciarMap"></script>
<?php
include "footer.php";
?>
  </body>
</html>