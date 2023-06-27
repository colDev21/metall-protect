const mpSwitch = document.querySelectorAll(".mp-switch");
const mpInput = document.querySelectorAll(".mp-input");
for (let i = 0; i < mpSwitch.length; i++) {
  mpSwitch[i].addEventListener("click", function () {
    const switchInput = mpSwitch[i].getElementsByTagName("input")[0];
    switchInput.onchange = () => {
      mpSwitch[i].parentElement.classList.toggle("active");
    };
  });
}
for (let i = 0; i < mpInput.length; i++) {
  mpInput[i].addEventListener("input", function () {
    if (mpInput[i].value > 0) {
      mpInput[i].classList.add("active");
      mpInput[i].parentElement.classList.add("active");
    } else {
      mpInput[i].classList.remove("active");
      mpInput[i].parentElement.classList.remove("active");
    }
  });
}
if (window.screen.width < 767) {
  document.getElementById("mpCalculator").style.height = document.documentElement.scrollHeight + "px";
}
document.getElementById("mpModalClose").addEventListener("click", () => {
  document.getElementById("mpCalculator").classList.add("hide");
});

document.getElementById("mpModalOpen").addEventListener("click", () => {
  document.getElementById("mpCalculator").classList.toggle("hide");
});
