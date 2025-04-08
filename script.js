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




let slideIndex = 0;
const slidesPerView = 3;
const slides = document.querySelectorAll('.slide');
const track = document.querySelector('.slide-track');
const totalGroups = Math.ceil(slides.length / slidesPerView);

function moveSlide(direction) {
  slideIndex += direction;

  if (slideIndex < 0) {
    slideIndex = totalGroups - 1;
  } else if (slideIndex >= totalGroups) {
    slideIndex = 0;
  }

  const slideWidth = slides[0].offsetWidth + 20; // slide width + margin
  const newTransform = -(slideIndex * slideWidth * slidesPerView);
  track.style.transform = `translateX(${newTransform}px)`;

  updateDots();
}

function updateDots() {
  const dots = document.querySelectorAll('.dot');
  dots.forEach(dot => dot.classList.remove('active'));
  if (dots[slideIndex]) dots[slideIndex].classList.add('active');
}

function initDots() {
  const dotsContainer = document.getElementById('dots-container');
  for (let i = 0; i < totalGroups; i++) {
    const dot = document.createElement('span');
    dot.classList.add('dot');
    if (i === 0) dot.classList.add('active');
    dot.addEventListener('click', () => {
      slideIndex = i;
      moveSlide(0);
    });
    dotsContainer.appendChild(dot);
  }
}

window.addEventListener('DOMContentLoaded', initDots);

