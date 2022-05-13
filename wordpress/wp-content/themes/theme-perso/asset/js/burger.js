window.addEventListener("DOMContentLoaded", (event) => {
   console.log("DOM entièrement chargé et analysé");

const burger = document.querySelector('.burger');
const navMenu = document.querySelector('.nav-menu');

burger.addEventListener("click", () => {
   console.log('le click est super')
   burger.classList.toggle("active");
   navMenu.classList.toggle("active");
});
});


