var fullname = document.getElementById("name");
var number = document.getElementById("number");
var email = document.getElementById("email");
var password = document.getElementById("password");
var errorSignUp = document.getElementById("errorsignup");

function validateSignUp() {
  var messagesSignUp = [];

  if (fullname.value === null || fullname.value === "") {
    messagesSignUp.push("*Please enter your full name.");
    errorSignUp.style.margin = "10px";
    errorSignUp.innerHTML = messagesSignUp.join(" <br> ");
    return false;
  }

  if (number.value === null || number.value === "") {
    messagesSignUp.push("*Please enter your id number.");
    errorSignUp.style.margin = "10px";
    errorSignUp.innerHTML = messagesSignUp.join(" <br> ");
    return false;
  }

  if (
    (email.value === null || email.value === "") &&
    !email.value.includes("@")
  ) {
    messagesSignUp.push("*Please enter your email.");
    errorSignUp.style.margin = "10px";
    errorSignUp.innerHTML = messagesSignUp.join(" <br> ");
    return false;
  }

  if (password.value === null || password.value === "") {
    messagesSignUp.push("*Please enter your password.");
    errorSignUp.style.margin = "10px";
    errorSignUp.innerHTML = messagesSignUp.join(" <br> ");
    return false;
  }

  errorSignUp.innerHTML = "*Succesfully Registered.";
  errorSignUp.style.margin = "10px";
  errorSignUp.style.color = "green";


  //   errorSignUp.innerHTML = messagesSignUp.join(" <br> ");
  return true;
}
