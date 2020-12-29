const nav_ul = document.querySelector('.nav-ul');
const nav = document.querySelector('nav');

nav.addEventListener('click', (e) => {
	e.stopPropagation();
	// if (e.currentTarget === nav) {
	// 	nav_ul.classList.add('active');
	// } else {
	// 	nav_ul.classList.remove('active');
	// }
	nav_ul.classList.toggle('active');
});

window.addEventListener('click', (e) => {
	if (e.currentTarget !== nav) {
		nav_ul.classList.remove('active');
	}
});
