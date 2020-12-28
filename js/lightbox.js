let holder = document.querySelector('.lightbox_images');
let mouseX;
let mouseY;
let mouseXcenter;

const right = () => {
	let hash1;
	let hash = location.hash.substr(4);
	let add;
	if (mouseX >= mouseXcenter && mouseY >= 80) {
		add = parseInt(hash) + 1;
		hash1 = '#img' + add;
		window.location.hash = hash1;
	}
};
const left = () => {
	let hash2;
	let hash = location.hash.substr(4);
	let add;
	if (mouseX <= mouseXcenter && mouseY >= 80) {
		add = parseInt(hash) - 1;
		hash2 = '#img' + add;
		window.location.hash = hash2;
	}
};

const closea = () => {
	let hash = location.hash.substr(3);
	if (mouseY >= 1 && mouseY <= 80 && mouseX >= 11 && mouseX <= 1425) {
		window.location.hash = '#!';
	}
};
const ImgChange = (e) => {
	let keyCode = e.code;
	let hash = location.hash.substr(4);
	let hash1;
	let add;
	if (keyCode == 'ArrowRight') {
		add = parseInt(hash) + 1;
		hash1 = '#img' + add;
		window.location.hash = hash1;
	}
	if (keyCode == 'ArrowLeft') {
		add = parseInt(hash) - 1;
		hash1 = '#img' + add;
		window.location.hash = hash1;
	}
	if (keyCode == 'Escape') {
		window.location.hash = '#!';
	}
};

holder.addEventListener('mousemove', (e) => {
	let x = e.clientX - holder.offsetLeft;
	let y = e.clientY - holder.offsetTop;
	let centerX = holder.offsetLeft + holder.offsetWidth / 2;
	let centerY = holder.offsetTop + holder.offsetHeight / 2;
	mouseX = x;
	mouseY = y;
	mouseXcenter = centerX;

	//left
	if (x <= centerX && mouseY >= 80) {
		holder.style.cursor = 'url(images/left.png), w-resize';
		holder.addEventListener('click', left);
	}
	//right
	if (x >= centerX && mouseY >= 80) {
		holder.style.cursor = 'url(images/right.png), e-resize';
		holder.addEventListener('click', right);
	}
	if (y >= 1 && y <= 100 && x >= 11 && x <= 1425) {
		holder.style.cursor = 'url(images/close.png), crosshair';
		holder.addEventListener('click', closea);
	}
	document.addEventListener('keydown', ImgChange);
});
