/*Tracking*/

var bot = document.getElementById("uy");
bot.addEventListener("click", ojo);
function ojo() {
  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    // var json = JSON.parse(this.responseText);
    console.log(this.responseText);
  };
  req.open("get", "back-track.php", true);
  req.send();
}




var code = document.getElementById("code");

function showInfoTracker() {
  if (code.value === null || code.value === "") {
    document.getElementById("errortrack").style.display = "block";
    return false;
  }
  // else
  // {
  // document.getElementById('track-container').style.marginTop='1200px';
  // document.getElementById('info').style.display='block';
  return false;
  // }
}

// function hideInfoTracker()
// {
//     document.getElementById('info').style.display='none';
//     document.getElementById('errortrack').style.display='none';
// }

/*function validate(idtrackercode)
{
    var data = [{
    "idtracker":"555",
    "millas":"25214",
    "tiempoEstimado":"08:00AM"
    }];
        
    var object = JSON.stringify(data[0]);
    var obj = JSON.parse(object);
    console.log(obj.idtracker)
    if(obj.idtracker==idtrackercode){
    console.log("funcionó") 
    }                        
}*/

function iniciarMap() {
  var coord = { lat: 4.6833190778731675, lng: -74.042340846865681 };
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 15,
    center: coord,
  });
  var marker = new google.maps.Marker({ position: coord, map: map });
}
