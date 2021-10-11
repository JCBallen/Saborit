<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Get a Quote | Saborit Express</title>
        <!--<link rel="stylesheet" href="stylequote.css">-->
        <link rel="stylesheet" href="design.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
    </head>
    <body class="quote-body">
        <div class="quote-container">
            <div class="title"><h1>GET A QUOTE</h1></div>
            <form class="form-quote">
                <div class="type-details">
                    <input type="radio" name="type-of-chargo" id="dot-1" >
                    <input type="radio" name="type-of-chargo" id="dot-2" >
                    <input type="radio" name="type-of-truck" id="dot-3" >
                    <input type="radio" name="type-of-truck" id="dot-4" >
                    <input type="radio" name="continuity" id="dot-5" >
                    <input type="radio" name="continuity" id="dot-6" >
                    <h4>Type of Chargo</h4>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="type-of-chargo">Less than Truckload</span>
                            </label>
                        </div>
                        <div class="category">
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="type-of-chargo">Full Truckload</span>
                            </label>
                        </div>
                    <h4>Type of Truck</h4>
                        <div class="category">
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="type-of-truck">Dry Van</span>
                            </label>
                        </div>
                        <div class="category">
                            <label for="dot-4">
                                <span class="dot four"></span>
                                <span class="type-of-truck">Reefer</span>
                            </label>
                        </div>
                    <h4>Is your journey continous?</h4>
                        <div class="category">
                            <label for="dot-5">
                                <span class="dot five"></span>
                                <span class="continuity">Yes</span>
                            </label>
                        </div>
                        <div class="category">
                            <label for="dot-6">
                                <span class="dot six"></span>
                                <span class="continuity">No</span>
                            </label>
                        </div>
                </div>
                <div class="cargo-details">
                    <h4>Pickup Information</h4>
                    <input type="text" class="input" placeholder="Insert Adress"><br> 
                    <h4>Delivery Information</h4>
                    <input type="text" class="input" placeholder="Insert Adress"><br> 
                    <h4>Shipment Information</h4>
                    <div class="input-number">
                        <input type="number" class="input" placeholder="Weight (lb)">
                        <input type="number" class="input" placeholder="Lenght (in)">
                        <input type="number" class="input" placeholder="Temperature (°F)">
                    </div>
                </div>
                <input type="submit" class="btn" value="View"> 
            </form>
        </div>
    </body>
</html>
<?php
include "Navbar.php";
include "footer.php";
?>