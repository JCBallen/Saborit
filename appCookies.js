const btnCookies = document.getElementById("btn-cookies");
const modal = document.getElementById("cookies-modal");
const blackout = document.getElementById("blackout");

if (!localStorage.getItem("accepted-cookies")) {
  btnCookies.addEventListener("click", () => {
    console.log("uy");
    localStorage.setItem("accepted-cookies", true);
    modal.style.display = "none";
    blackout.style.display = "none";
  });
} else {
  modal.style.display = "none";
  blackout.style.display = "none";
}
