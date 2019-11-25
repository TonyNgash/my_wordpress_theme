document.body.style.webkitTransform =  'scale(1)';
document.body.style.msTransform =   'scale(100)';
document.body.style.transform = 'scale(1)';
document.body.style.zoom = screen.logicalXDPI / screen.deviceXDPI;
const navSlide = () => {

	const burger = document.querySelector('.burger');
	const nav = document.querySelector('.ingrotel-nav-ul');
	const navLinks = document.querySelectorAll('.ingrotel-nav-ul li');

	
	burger.addEventListener('click', () => {
		//Toggle Nav
		nav.classList.toggle('nav-active');


		//Animate Links
		navLinks.forEach( (link , index) => {
			
			if(link.style.animation){
				link.style.animation = '';
			}else{
				link.style.animation = `navLinksFade 0.5s ease forwards ${index / 7 + .5}s`;	
			}
		});

		//Burger Animation
		burger.classList.toggle('toggle');

	});


}
navSlide();