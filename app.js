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

var b1 = document.forms["formq"]["typeofchargo"];
var b2 = document.forms["formq"]["typeoftruck"];
var b3 = document.forms["formq"]["continuity"];
var pickup = document.getElementById('pickup');
var delivery = document.getElementById('delivery');
var weight = document.getElementById('weight');
var length = document.getElementById('length');
var temp = document.getElementById('temp');
var errorQuote = document.getElementById('errorquote');

function validateQuote(){ 
    var messagesError = [];
    
    if(b1[0].checked==false && b1[1].checked==false){
        messagesError.push('*Please choose a type of chargo.');
    }

    if(b2[0].checked==false && b2[1].checked==false){
        messagesError.push('*Please choose a type of truck.');
    }

    if(b2[1].checked==true)
    {
        if(b3[0].checked==false && b3[1].checked==false){
        messagesError.push('*Please choose if your trip is continuous or not.');
        }
        if(temp.value === null || temp.value === ''){
        messagesError.push('*Please enter the temperature of the cargo.');
        }
    }

    if(pickup.value === null || pickup.value === ''){
        messagesError.push('*Please enter a pickup address');
    }

    if(delivery.value === null || delivery.value === ''){
        messagesError.push('*Please enter a delivery address');
    }

    if(weight.value === null || weight.value === ''){
        messagesError.push('*Please enter the weight of the cargo.');
    }

    if(length.value === null || length.value === ''){
        messagesError.push('*Please enter the length of the cargo.');
    }

    errorQuote.style.marginBottom='15px'
    errorQuote.innerHTML=messagesError.join(' <br> ');
    return false;
}

/*Tracking*/

var code = document.getElementById('code');

function showInfoTracker()
{
    if(code.value === null || code.value === '')
    {
    document.getElementById('errortrack').style.visibility='visible';
    }
    else
    {
    document.getElementById('info').style.visibility='visible';
    } 
    return false
}

function hideInfoTracker()
{
    document.getElementById('info').style.visibility='hidden';
    document.getElementById('errortrack').style.visibility='hidden';      
}

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