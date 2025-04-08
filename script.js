// off-canvas menu
function toggleMenu() {
    const menu = document.getElementById('offCanvasMenu');
    menu.classList.toggle('open');
}


// image slider

document.addEventListener("DOMContentLoaded", function () {
  let slideIndex = 0;
  const slides = document.querySelectorAll('.slide:not(.duplicate)');
  const allSlides = document.querySelectorAll('.slide');
  const dots = document.querySelectorAll('.dot');
  const slidesPerView = 3;

  function showSlides() {
    allSlides.forEach(slide => slide.style.display = 'none');

    for (let i = 0; i < slidesPerView; i++) {
      const indexToShow = (slideIndex + i) % allSlides.length;
      allSlides[indexToShow].style.display = 'block';
    }

    dots.forEach(dot => dot.classList.remove('active'));
    if (dots[slideIndex]) {
      dots[slideIndex].classList.add('active');
    }
  }

  window.plusSlides = function (n) {
    slideIndex += n;
    if (slideIndex < 0) slideIndex = slides.length - 1;
    if (slideIndex >= slides.length) slideIndex = 0;
    showSlides();
  }

  window.currentSlide = function (n) {
    slideIndex = n;
    showSlides();
  }

  showSlides();
});




