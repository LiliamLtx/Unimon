const hamburger = document.querySelector("#sidebarToggle");

hamburger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});