const links = document.querySelectorAll('a[data-type]');

links.forEach((link) => {
	const linkType = link.getAttribute('data-type');
	switch (linkType) {
		case 'youtube':
			link.textContent = 'YouTube';
			break;
		case 'twitch':
			link.textContent = 'Twitch';
			break;
	}
});
