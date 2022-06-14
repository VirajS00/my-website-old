const toggleSwitch = document.querySelector('.darkmode-toggle');
let darkMode = localStorage.getItem('darkMode');

const enableDarkMode = () => {
	document.body.classList.add('darkmode');
	localStorage.setItem('darkMode', 'enabled');
};

const disableDarkMode = () => {
	document.body.classList.remove('darkmode');
	localStorage.setItem('darkMode', null);
};

toggleSwitch.addEventListener('click', () => {
	darkMode = localStorage.getItem('darkMode');
	if (darkMode !== 'enabled') {
		enableDarkMode();
		toggleSwitch.setAttribute('checked', 'checked');
	} else {
		disableDarkMode();
		toggleSwitch.setAttribute('checked', '');
	}
});

if(localStorage.getItem('darkMode') !== 'enabled') {
	if(window.matchMedia('(prefers-color-scheme: dark)').matches) {
		enableDarkMode();
		toggleSwitch.setAttribute('checked', 'checked');
	} else {
		disableDarkMode();
		toggleSwitch.setAttribute('checked', '');
	}
} else {
	enableDarkMode();
	toggleSwitch.setAttribute('checked', 'checked');
}


// window
//   .matchMedia('(prefers-color-scheme: dark)')
//   .addEventListener('change', ({matches:isDark}) => {
//     if(isDark) {
// 		enableDarkMode();
// 		toggleSwitch.setAttribute('checked', 'checked');
// 	} else {
// 		disableDarkMode();
// 		toggleSwitch.setAttribute('checked', '');
// 	}
//   })