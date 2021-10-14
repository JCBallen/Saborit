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

    var btn1 = document.forms["formq"]["typeofchargo"];
    var btn2 = document.forms["formq"]["typeoftruck"];
    var btn3 = document.forms["formq"]["continuity"];
    var pickup = document.getElementById('pickup');
    var delivery = document.getElementById('delivery');
    var weight = document.getElementById('weight');
    var length = document.getElementById('length');
    var temp = document.getElementById('temp');
    var errorQuote = document.getElementById('errorquote');

    function validateQuote(){
        var messageQuote = [];
        if(btn1[0].checked==false && btn1[1].checked==false){
            messageQuote.push('*Please choose a type of chargo.');
        }

        if(btn2[0].checked==false && btn2[1].checked==false){
            messageQuote.push('*Please choose a type of truck.');
        }

        if(btn2[1].checked==true)
        {
            if(btn3[0].checked==false && btn3[1].checked==false){
            messageQuote.push('*Please choose if your trip is continuous or not.');
            }
            if(temp.value === null || temp.value === ''){
            messageQuote.push('*Please enter the temperature of the cargo.');
            }
        }

        if(pickup.value === null || pickup.value === ''){
            messageQuote.push('*Please enter a pickup address');
        }

        if(delivery.value === null || delivery.value === ''){
            messageQuote.push('*Please enter a delivery address');
        }

        if(weight.value === null || weight.value === ''){
            messageQuote.push('*Please enter the weight of the cargo.');
        }

        if(length.value === null || length.value === ''){
            messageQuote.push('*Please enter the length of the cargo.');
        }

        errorQuote.style.marginBottom='15px'
        errorQuote.innerHTML = messageQuote.join('<br>')
        return false;
    }

    