const inputs = document.querySelectorAll(".input-field");
const toggle_btn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");
const bullets = document.querySelectorAll(".bullets span");
const images = document.querySelectorAll(".image");

let currentIndex = 0;
const intervalTime = 3500; 

function moveNext() {
  currentIndex = (currentIndex + 1) % bullets.length;
  simulateClick(bullets[currentIndex]);
}

function simulateClick(element) {
  const event = new MouseEvent('click', {
    bubbles: true,
    cancelable: true,
    view: window
  });
  element.dispatchEvent(event);
}

const bulletInterval = setInterval(moveNext, intervalTime);

bullets.forEach((bullet) => {
  bullet.addEventListener("mouseenter", () => {
    clearInterval(bulletInterval);
  });
});

bullets.forEach((bullet) => {
  bullet.addEventListener("mouseleave", () => {
    bulletInterval = setInterval(moveNext, intervalTime);
  });
});

inputs.forEach((inp) => {
  inp.addEventListener("focus", () => {
    inp.classList.add("active");
  });
  inp.addEventListener("blur", () => {
    if (inp.value != "") return;
    inp.classList.remove("active");
  });
});

// toggle_btn.forEach((btn) => {
//   btn.addEventListener("click", () => {
//     main.classList.toggle("sign-up-mode");
//   });
// });

function moveSlider() {
  let index = this.dataset.value;

  let currentImage = document.querySelector(`.img-${index}`);
  images.forEach((img) => img.classList.remove("show"));
  currentImage.classList.add("show");

  const textSlider = document.querySelector(".text-group");
  textSlider.style.transform = `translateY(${-(index - 1) * 2.2}rem)`;

  bullets.forEach((bull) => bull.classList.remove("active"));
  this.classList.add("active");
}

bullets.forEach((bullet) => {
  bullet.addEventListener("click", moveSlider);
});
