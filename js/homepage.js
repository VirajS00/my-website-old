const scroll = new SmoothScroll('a[href*="#"]', {
	speed: 1000,
	speedAsDuration: true
});

const sectionPhoto = document.querySelector('#section_photo');
const sectionFilms = document.querySelector('#section_films');
const cdSection = document.querySelector('#section_cd');
const topSection = document.querySelector('#section_top');
const linkTag = document.querySelector('.arr-link');

const options = {
	root: null,
	threshold: 0,
	rootMargin: '-100px'
};

const observer = new IntersectionObserver((entries, observer) => {
	entries.forEach((entry) => {
		if (entry.isIntersecting) {
			linkTag.href = '#section_films';
			document.querySelector('a.arr-link > img').style.transform =
				'rotate(0deg)';
		}
	});
}, options);

observer.observe(sectionPhoto);

const observer1 = new IntersectionObserver((entries, observer) => {
	entries.forEach((entry) => {
		if (entry.isIntersecting) {
			linkTag.href = '#section_photo';
			document.querySelector('a.arr-link > img').style.transform =
				'rotate(0deg)';
		}
	});
}, options);

observer1.observe(topSection);

const observer2 = new IntersectionObserver((entries, observer) => {
	entries.forEach((entry) => {
		if (entry.isIntersecting) {
			linkTag.href = '#section_cd';
			document.querySelector('a.arr-link > img').style.transform =
				'rotate(0deg)';
		}
	});
}, options);

observer2.observe(sectionFilms);

const observer3 = new IntersectionObserver((entries, observer) => {
	entries.forEach((entry) => {
		if (entry.isIntersecting) {
			linkTag.href = '#section_top';
			document.querySelector('a.arr-link > img').style.transform =
				'rotate(180deg)';
		}
	});
}, options);

observer3.observe(cdSection);
