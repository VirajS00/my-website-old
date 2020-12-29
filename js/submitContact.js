const button = document.querySelector('.formButton');

button.addEventListener('click', async (e) => {
	e.preventDefault();
	const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,6})+$/;
	const name = document.getElementById('name');
	const email = document.getElementById('email');
	const message = document.getElementById('message');
	const errDiv = document.querySelector('.errors');
	let errors = [];

	if (name.value === '') {
		errors.push('please enter name');
		name.style.border = '1px solid red';
		setTimeout(() => {
			name.style.border = '';
		}, 3000);
	}

	if (message.value === '') {
		errors.push('please enter message');
		message.style.border = '1px solid red';
		setTimeout(() => {
			message.style.border = '';
		}, 3000);
	}

	if (email.value === '') {
		errors.push('please enter email');
		email.style.border = '1px solid red';
		setTimeout(() => {
			email.style.border = '';
		}, 3000);
	} else {
		if (!emailRegex.test(email.value)) {
			errors.push('email format not valid');
			email.style.border = '1px solid red';
			setTimeout(() => {
				email.style.border = '';
			}, 3000);
		}
	}

	if (errors.length === 0) {
		const fd = new FormData();
		fd.append('name', name.value);
		fd.append('email', email.value);
		fd.append('message', message.value);
		const req = await fetch('php/submit.php', {
			method: 'POST',
			body: fd
		});
		const res = await req.text();
		console.log(res);
		if (res === 'Form submitted sucessfully') {
			document.querySelector('.success').textContent = res;
			name.value = '';
			email.value = '';
			message.value = '';
			setTimeout(() => {
				document.querySelector('.success').innerHTML = '';
			}, 3000);
		} else {
			errDiv.textContent = res;
			setTimeout(() => {
				errDiv.innerHTML = '';
			}, 3000);
		}
	} else {
		errors.forEach((error) => {
			const p = document.createElement('p');
			p.textContent = error;
			errDiv.appendChild(p);
		});
		setTimeout(() => {
			errDiv.innerHTML = '';
		}, 3000);
	}
});
