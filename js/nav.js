const nav_ul = document.querySelector('.nav-ul');
const nav = document.querySelector('nav');

nav.addEventListener('click', (e) => {
	nav_ul.classList.toggle('active');
});
