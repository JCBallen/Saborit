/*Tracking*/

var code = document.getElementById('code');

function showInfoTracker()
{
    if(code.value === null || code.value === '')
    {
    document.getElementById('errortrack').style.display='block';
    }
    else
    {
    document.getElementById('track-container').style.marginTop='120px';
    document.getElementById('info').style.display='block';
    } 
    return false
}

function hideInfoTracker()
{
    document.getElementById('info').style.display='none';
    document.getElementById('errortrack').style.display='none';      
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