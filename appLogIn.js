var email = document.getElementById('email');
var password = document.getElementById('password');
var errorLogIn = document.getElementById('errorlogin');

function validateLogIn(){
    var messagesLogIn = [];

    if(email.value === null || email.value === ''){
        messagesLogIn.push('*Please enter your email.');
    }

    if(password.value === null || password.value === ''){
        messagesLogIn.push('*Please enter your password.');
    }

    errorLogIn.style.marginBottom='10px'
    errorLogIn.innerHTML=messagesLogIn.join(' <br> ');

    return false;
}