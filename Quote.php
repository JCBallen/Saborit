<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Get a Quote | Saborit Express</title>
    <!--<link rel="stylesheet" href="stylequote.css">-->
    <link rel="stylesheet" href="design.css" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <script defer src="juliescript.js"></script>
  </head>

  <body class="quote-body">
    <div class="quote-container">
      <div class="title"><h1>GET A QUOTE</h1></div>
      <form name="formq" class="form-quote" action="" method="">
        <div class="type-details">
          <h4>Type of Chargo</h4>
          <div class="choose">
            <input type="radio" name="typeofchargo" id="ltl" />
            <label for="ltl">Less than Truckload</label>
            <input type="radio" name="typeofchargo" id="tl" />
            <label for="tl">Full Truckload</label>
          </div>

          <h4>Type of Truck</h4>
          <div class="choose">
            <input type="radio" name="typeoftruck" id="dry" />
            <label for="dry" onclick="hideReefer();">Dry Van</label>
            <input type="radio" name="typeoftruck" id="reefer" />
            <label for="reefer" onclick="showReefer();">Reefer</label>
          </div>

          <div id="journey">
            <h4>Is your journey continous?</h4>
            <div class="choose">
              <input type="radio" name="continuity" id="yes" />
              <label for="yes">Yes</label>
              <input type="radio" name="continuity" id="no" />
              <label for="no">No</label>
            </div>
          </div>
        </div>
        <div class="cargo-details">
          <h4>Pickup Information</h4>
          <input
            id="pickup"
            type="text"
            class="input"
            placeholder="Insert Address"
          /><br />
          <h4>Delivery Information</h4>
          <input
            id="delivery"
            type="text"
            class="input"
            placeholder="Insert Address"
          /><br />
          <h4>Shipment Information</h4>
          <div class="input-number">
            <input
              id="weight"
              type="number"
              class="inputn"
              placeholder="Weight (lb)"
            />
            <input
              id="length"
              type="number"
              class="inputn"
              placeholder="Length (in)"
            />
            <div id="temperature">
              <input
                id="temp"
                type="number"
                class="inputn"
                placeholder="Temperature (°F)"
                required
                oninvalid="this.setCustomValidity('Please fill out this field.')"
              />
            </div>
          </div>
        </div>
        <div id="error"></div>
        <input
          type="submit"
          class="btn"
          value="View"
          onclick="return validateQuote();"
        />
      </form>
    </div>
  </body>
</html>
<?php
include "Navbar.php";
include "footer.php";
?>
