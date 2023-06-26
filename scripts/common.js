const mpMenuToggler = document.getElementById("mpMenuToggler");
const mpMenu = document.getElementById("mpMenu");
// const mpHeader = document.getElementById("mpHeader");
if (window.innerWidth < 992) {
  mpMenuToggler.addEventListener("click", function () {
    mpMenu.classList.toggle("active");
  });
}
