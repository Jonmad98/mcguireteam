let carousel = document.querySelector('.widget-gallery-container'); // Adjusted selector to target the gallery container
let left = document.querySelector('.left');
let right = document.querySelector('.right');
let item = document.querySelector('.grid-view-item'); // Adjusted selector to target each gallery item

(function () {
   right.addEventListener('click', function (e) {
      carousel.scrollLeft += item.clientWidth;
   });
   left.addEventListener('click', function () {
      carousel.scrollLeft -= item.clientWidth;
   });
})();