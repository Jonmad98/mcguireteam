const McButton = document.querySelector("#McButton");
const McBar1 = document.getElementById("McBar1");
const McBar2 = document.getElementById("McBar2");
const McBar3 = document.getElementById("McBar3");

const menu__container =  document.querySelector(".menu");



  McButton.addEventListener("click", function() {

    McButton.classList.toggle("active");
    McBar1.classList.toggle("active");
    McBar2.classList.toggle("active");
    //   McBar1.style.animationName = "menu-positivo";
    
    McBar3.classList.toggle("active");
    menu__container.classList.toggle("active");

  });

  /*Animation with intersaction observer */

const animation_elements = document.querySelectorAll('.animate, .animate-top-down');

const observer = new IntersectionObserver((entries) => {
	entries.forEach((entry) => {
		if (entry.isIntersecting) {
			entry.target.classList.add('fadeInBottom');
		} else {
			entry.target.classList.remove('fadeInBottom');
		}
	})
}, {
	threshold: 0.5
});

for (let i = 0; i < animation_elements.length; i++) {
	const el = animation_elements[i];

	observer.observe(el);
}