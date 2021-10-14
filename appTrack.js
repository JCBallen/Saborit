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