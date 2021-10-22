
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tracking | Saborit Express</title>
    <link rel="stylesheet" href="design.css" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
  </head>

  <body style="background: #d5d5d5">
  <div id="track-container" class="track-container">
            <img class="image" src="https://i.ibb.co/smdP7BB/Placeholder.png" alt="Placeholder">
            <h1>SHIPPING TRACKER</h1>
            <form action="back-track.php" id="form-track" method="POST" >
                <div class="input-text">
                    <span>Input yout ID given via email to see real-time location</span>
                    <input id="code" type="number" class="input" name="track-id" placeholder="Tracker Code" onfocus="hideInfoTracker()">
                </div>
                <input class="btn" type="submit" value="Submit" onclick="return showInfoTracker()" id="uy" >
            </form><br>
            <div id="errortrack"><p>Enter a valid number.</p></div>
            <div id="info">
                <div class="information">
                    <div class="milles">
                        <span class="subtitle"><h4>Milles to Destination</h4></span>
                        <p>6345 milles</p>
                    </div>
                    <div class="time">
                        <span class="subtitle"><h4>Estimated Time to Arrival</h4></span>
                        <p>September 25, 19:00</p>
                    </div>
                </div> 

                <div id="map">

                </div>
                <!-- <img src="https://i.ibb.co/smdP7BB/Placeholder.png" alt="mapa" id="map" > -->
                <!-- <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113463.58037076714!2d-80.4329678629207!3d27.29011766604179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88deeaeff6c50ead%3A0xf44a54f9de7e10e0!2sPort%20St.%20Lucie%2C%20Florida%2C%20EE.%20UU.!5e0!3m2!1ses!2sco!4v1632949952631!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
            </div>
        </div>

        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJ9WgRdqBiW9OyG3eSc5geRXrZ6lWXQjk&callback=iniciarMap"></script>
        <script src="appTrack.js" type="text/javascript"></script>
       
    </body>
</html>

<?php
include "Navbar.php";
include "footer.php";
?>