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
