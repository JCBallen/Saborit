var fullname = document.getElementById('name');
var email = document.getElementById('email');
var subject = document.getElementById('subject');
var message = document.getElementById('message');
var errorContact = document.getElementById('errorcontact');

function validateContactUs(){
    var messagesContactUs = [];

    if(fullname.value === null || fullname.value === ''){
        messagesContactUs.push('*Please enter your full name.');
    }

    if(email.value === null || email.value === ''){
        messagesContactUs.push('*Please enter your email.');
    }
    
    if(subject.value === null || subject.value === ''){
        messagesContactUs.push('*Please write a subject.');
    }

    if(message.value === null || message.value === ''){
        messagesContactUs.push('*Please write a message.');
    }

    errorContact.style.marginBottom='20px'
    errorContact.innerHTML=messagesContactUs.join(' <br> ');

    return false;
}