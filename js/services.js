const container = document.querySelector('.container2');
document.querySelector('.slider').addEventListener('input', (e) => {
  container.style.setProperty('--position', `${e.target.value}%`);
})

const container2 = document.querySelector('.container3 ');
document.querySelector('.slider2').addEventListener('input', (e) => {
  container2.style.setProperty('--position', `${e.target.value}%`);
})

const container3 = document.querySelector('.container4');
document.querySelector('.slider3').addEventListener('input', (e) => {
  container3.style.setProperty('--position', `${e.target.value}%`);
})
