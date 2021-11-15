var email = document.getElementById("email");
var password = document.getElementById("password");
var errorLogIn = document.getElementById("errorlogin");

function login() {
  var messagesLogIn = [];

  if (email.value === null || email.value === "") {
    messagesLogIn.push("*Please enter your email.");
    errorLogIn.style.marginBottom = "10px";
    errorLogIn.innerHTML = messagesLogIn.join(" <br> ");
    return false;
  }
  if (password.value === null || password.value === "") {
    messagesLogIn.push("*Please enter your password.");
    errorLogIn.style.marginBottom = "10px";
    errorLogIn.innerHTML = messagesLogIn.join(" <br> ");
    return false;
  }


  // errorLogIn.innerHTML = "*Successfully Login";
  // errorLogIn.style.marginBottom = "10px";
  // errorLogIn.style.color = "green";

  //   errorLogIn.innerHTML = messagesLogIn.join(" <br> ");
  // return false;


   return true;
}

function forgot(){
  var messagesLogIn = [];
    messagesLogIn.push("*Contact Administrator.");
    errorLogIn.style.marginBottom = "10px";
    errorLogIn.style.color = "red";
    errorLogIn.innerHTML = messagesLogIn.join(" <br> ");
  // return false;
}
