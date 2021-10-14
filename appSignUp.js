var fullname = document.getElementById('name');
var number = document.getElementById('number');
var email = document.getElementById('email');
var password = document.getElementById('password');
var errorSignUp = document.getElementById('errorsignup');

function validateSignUp(){
    var messagesSignUp = [];

    if(fullname.value === null || fullname.value === ''){
        messagesSignUp.push('*Please enter your full name.');
    }

    if(number.value === null || number.value === ''){
        messagesSignUp.push('*Please enter your id number.');
    }

    if(email.value === null || email.value === ''){
        messagesSignUp.push('*Please enter your email.');
    }

    if(password.value === null || password.value === ''){
        messagesSignUp.push('*Please enter your password.');
    }

    errorSignUp.style.margin='10px'
    errorSignUp.innerHTML=messagesSignUp.join(' <br> ');

    return false;
}