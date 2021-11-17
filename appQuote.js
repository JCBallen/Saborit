/*Get a Quote*/

function showReefer(){
    document.getElementById('journey').style.display = 'block';
    document.getElementById('temperature').style.display = 'inline-flex';
    document.getElementById('temperature').style.width = '100%';

    var element = document.getElementsByClassName("inputn");
    for(var x=0; x<element.length;x++){
        element[x].style.marginRight ="5px";
        element[x].style.width="100%";
    }
    document.getElementById('temperature').style.marginRight='0'; 
    }

    function hideReefer(){
        document.getElementById('journey').style.display = 'none';
        document.getElementById('temperature').style.display = 'none';
    }

    var btn1 = document.forms["formq"]["typeofcargo"];
    var btn2 = document.forms["formq"]["typeoftruck"];
    var btn3 = document.forms["formq"]["continuity"];
    var pickup = document.getElementById('from');
    var delivery = document.getElementById('to');
    var weight = document.getElementById('weight');
    var length = document.getElementById('length');
    var temp = document.getElementById('temp');
    var errorQuote = document.getElementById('errorquote');

    function validateQuote(){
        var messageQuote = [];
        if(btn1[0].checked==false && btn1[1].checked==false){
            messageQuote.push('*Please choose a type of chargo.');
            errorQuote.style.marginBottom='15px'
            errorQuote.innerHTML = messageQuote.join('<br>')
            return false;
        }

        if(btn2[0].checked==false && btn2[1].checked==false){
            messageQuote.push('*Please choose a type of truck.');
            errorQuote.style.marginBottom='15px'
            errorQuote.innerHTML = messageQuote.join('<br>')
            return false;
        }

        if(btn2[1].checked==true)
        {
            if(btn3[0].checked==false && btn3[1].checked==false){
            messageQuote.push('*Please choose if your trip is continuous or not.');
            errorQuote.style.marginBottom='15px'
            errorQuote.innerHTML = messageQuote.join('<br>')
            return false;
            }
            if(temp.value === null || temp.value === ''){
            messageQuote.push('*Please enter the temperature of the cargo.');
            errorQuote.style.marginBottom='15px'
            errorQuote.innerHTML = messageQuote.join('<br>')
            return false;
            }
        }

        if(pickup.value === null || pickup.value === ''){
            messageQuote.push('*Please enter a pickup address');
            errorQuote.style.marginBottom='15px'
            errorQuote.innerHTML = messageQuote.join('<br>')
            return false;
            
        }

        if(delivery.value === null || delivery.value === ''){
            messageQuote.push('*Please enter a delivery address');
            errorQuote.style.marginBottom='15px'
            errorQuote.innerHTML = messageQuote.join('<br>')
            return false;
            
        }

        if(weight.value === null || weight.value === ''){
            messageQuote.push('*Please enter the weight of the cargo.');
            errorQuote.style.marginBottom='15px'
            errorQuote.innerHTML = messageQuote.join('<br>')
            return false;
        }

        if(length.value === null || length.value === ''){
            messageQuote.push('*Please enter the length of the cargo.');
            errorQuote.style.marginBottom='15px'
            errorQuote.innerHTML = messageQuote.join('<br>')
            return false;
        }

        messageQuote.push('');
        errorQuote.style.marginBottom='1px'
        errorQuote.innerHTML = messageQuote.join('<br>')
        return true;
    }

//set map options
var coord = { lat: 38.763538, lng: -97.802882 };
var mapOptions = {
    center: coord,
    zoom: 4,
    mapTypeId: google.maps.MapTypeId.ROADMAP

};

//create map
var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

//create a DirectionsService object to use the route method and get a result for our request
var directionsService = new google.maps.DirectionsService();

//create a DirectionsRenderer object which we will use to display the route
var directionsDisplay = new google.maps.DirectionsRenderer();

//bind the DirectionsRenderer to the map
directionsDisplay.setMap(map);

//define calcRoute function
function calcRoute() {

    if(validateQuote()==true){

    document.getElementById('container-fluid').style.display='block';

    //create request
    var request = {
        origin: document.getElementById("from").value,
        destination: document.getElementById("to").value,
        travelMode: google.maps.TravelMode.DRIVING, 
        unitSystem: google.maps.UnitSystem.IMPERIAL
    }

    //pass the request to the route method
    directionsService.route(request, function (result, status) {
        if (status == google.maps.DirectionsStatus.OK) {

            var ltl=document.getElementById('ltl');
            var tl=document.getElementById('tl');
            var dry=document.getElementById('dry');
            var reefer=document.getElementById('reefer');
            var yes=document.getElementById('yes');
            var no=document.getElementById('no');
            var length=document.getElementById('length').value;

            let typeOfLoad="";
            let typeOfTruck="";
            let continuity="";
    
            //Type of Loaad
            if(ltl.checked){
                typeOfLoad="Less than Truckload";
            }
            else if(tl.checked){
                typeOfLoad="Full Truckload";
            }
            
            //Type of Truck
            if(dry.checked){
                typeOfTruck="Dry van";
            }
            else if(reefer.checked){
                typeOfTruck="Reefer";
            }

            //Continuity
            if(yes.checked){
                continuity="Yes";
            }
            else if(no.checked){
                continuity="No";
            }

            //Get distance and time
            let distance = result.routes[0].legs[0].distance.value;
            let distanceMiles = distance / 1609.34;
            let duration = result.routes[0].legs[0].duration.text;
            
            $('#chargo').text(typeOfLoad);
            $('#truck').text(typeOfTruck);
            $('#pickup').text(document.getElementById("from").value);
            $('#delivery').text(document.getElementById("to").value);
            $('#miles').text(result.routes[0].legs[0].distance.text);
            $('#duration').text(duration);
           
            //display route
            directionsDisplay.setDirections(result); 
            
            //Get final price
            let quotation={typeOfLoad, typeOfTruck, distanceMiles, continuity, length};  
            let finalQuotation=quote(quotation);
            
            $('#price').text(finalQuotation);

        } else {
            //delete route from map
            directionsDisplay.setDirections({ routes: [] });
            //center map in London
            map.setCenter(coord);
        }
    });
}

}


//create autocomplete objects for all inputs
var options = {
    types: ['(cities)'],
    componentRestrictions: {'country': ['US']}
}

var input1 = document.getElementById("from");
var autocomplete1 = new google.maps.places.Autocomplete(input1, options);

var input2 = document.getElementById("to");
var autocomplete2 = new google.maps.places.Autocomplete(input2, options);

//Funtion quote
    
const quote=(quotation)=>{
    const {typeOfLoad, typeOfTruck, distanceMiles, continuity, length}=quotation;
    if(typeOfLoad=="Full Truckload" && typeOfTruck=="Dry van"){
        let result = 2.30 * distanceMiles;
        return result.toFixed(2);
    }
    if(typeOfLoad=="Full Truckload" && typeOfTruck=="Reefer" && continuity=="Yes"){
        let result = 2.70 * distanceMiles;
        return result.toFixed(2);
    }
    if(typeOfLoad=="Full Truckload" && typeOfTruck=="Reefer" && continuity=="No"){
        let result = 2.85 * distanceMiles;
        return result.toFixed(2);
    }
    if(typeOfLoad=="Less than Truckload" && typeOfTruck=="Dry van"){
        let result = 2.20 * distanceMiles;
        return result.toFixed(2);
    }
    if(typeOfLoad=="Less than Truckload" && typeOfTruck=="Reefer" && continuity=="Yes"){
         let result = 2.60 * distanceMiles;
        return result.toFixed(2);
    }
    if(typeOfLoad=="Less than Truckload" && typeOfTruck=="Reefer" && continuity=="No"){
         let result = 2.75 * distanceMiles;
        return result.toFixed(2);
    }
 
}
