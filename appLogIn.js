var email = document.getElementById("email");
var password = document.getElementById("password");
var errorLogIn = document.getElementById("errorlogin");
var form = $("#form-login");
var url = form.attr("action");

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

  // return false;

  $.ajax({
    type: "POST",
    url: "back-recaptcha.php",
    data: form.serialize(),
    success: function (data) {
      $("#errorlogin").empty();
      $("#errorlogin").append(data);
    },
  });
}

grecaptcha.ready(function () {
  grecaptcha
    .execute("6Lc04RUdAAAAAJIM-gtUx7Ub5NStA_-_5OxOvzSx", { action: "homepage" })
    .then(function (token) {
      $("#google-response-token").val(token);
    });
});
