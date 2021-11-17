<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="canonical" href="https://saborit.net/"/>
    <link rel="shortcut icon" href="https://i.ibb.co/0mVtLWn/logo-png.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="design.css" />
    <title>Get a Quote</title>
  </head>
  <body class="quote-body">
        <?php
        if(isset($_SESSION['user'])){
            include "NavbarLogIn.php";
        }else{
            include "Navbar.php";
        }
        ?>
            <div class="quote-container">
            <div class="title"><h1>GET A QUOTE</h1></div>
            <form id="formq" name="formq" class="form-quote">
                <div class="type-details">
                    
                    <h4>Type of Cargo</h4>
                    <div class="choose">
                        <input type="radio" name="typeofcargo" id="ltl">
                        <label for="ltl">Less than Truckload</label>
                        <input type="radio" name="typeofcargo" id="tl">
                        <label for="tl">Full Truckload</label>
                    </div>

                    <h4>Type of Truck</h4>
                    <div class="choose">
                        <input type="radio" name="typeoftruck" id="dry">
                        <label for="dry" onclick="hideReefer();">Dry Van</label>
                        <input type="radio" name="typeoftruck" id="reefer">
                        <label for="reefer" onclick="showReefer();">Reefer</label>
                    </div>

                    <div id="journey">
                        <h4>Is your journey continous?</h4>
                            <div class="choose">
                            <input type="radio" name="continuity" id="yes">
                            <label for="yes">Yes</label>
                            <input type="radio" name="continuity" id="no">
                            <label for="no">No</label>
                        </div>
                    </div>

                </div>
                <div id="cargo-details" class="cargo-details">
                    <div class="form-group">
                        <h4>Origin</h4>
                        <div class="col-xs-4">
                            <input type="text" id="from" placeholder="Enter a location" class="input">
                        </div>
                   </div>
                   <div class="form-group">
                        <h4>Destination</h4>
                        <div class="col-xs-4">
                            <input type="text" id="to" placeholder="Enter a location" class="input">
                        </div>
                      
                     </div>
                    <h4>Shipment Information</h4>
                    <div class="input-number">
                        <input id="weight" type="number" class="inputn" placeholder="Weight (lbs)">
                        <input id="length" type="number" max="636" class="inputn" placeholder="Length (in)">
                        <div id="temperature"><input id="temp" type="number" class="inputn" placeholder="Temperature (°F)"></div>
                    </div>
                </div>
                <div id="errorquote"></div>
            </form>
            <div class="button">
                <input class="btn" type="submit" value="View" onclick="calcRoute();">
            </div>
            <div id="loading"></div>
            <div id="container-fluid">
                <div id="googleMap"></div>
                <div id="summary">
                    <ul class="summary-list">
                        <li><b>Origin:   </b><span id="pickup"></span></li>
                        <li><b>Destination:   </b><span id="delivery"></span></li>
                        <li><b>Distance in Miles:   </b><span id="miles"></span></li>
                        <li><b>Duration:   </b><span id="duration"></span></li>
                        <li><b>Type of Cargo:   </b><span id="chargo"></span></li>
                        <li><b>Type of Truck:   </b><span id="truck"></span></li>
                    </ul>
                </div>
                <div id="output">
                    Final Price: <span id="price"></span> USD
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJ9WgRdqBiW9OyG3eSc5geRXrZ6lWXQjk&libraries=places&language=en"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="Scripts/jquery-3.1.1.min.js"></script>
        <script src="appQuote.js" type="text/javascript"></script>
<?php
include "footer.php";
?>
  </body>
</html>
