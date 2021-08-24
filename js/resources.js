const container = document.querySelector('.resources-grid');

const support = (function () {
	if (!window.DOMParser) return false;
	const parser = new DOMParser();
	try {
		parser.parseFromString('x', 'text/html');
	} catch (err) {
		return false;
	}
	return true;
})();

const stringToHTML = function (str) {
	if (support) {
		const parser = new DOMParser();
		const doc = parser.parseFromString(str, 'text/html');
		return doc.body.firstChild;
	}

	const dom = document.createElement('div');
	dom.innerHTML = str;
	return dom;
};

const renderSVG1 = () => {
	const svg = `<svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M8.86942 3.39453C8.28899 3.11399 7.04815 3.04386 6.50029 3.04386L8.67693 0.983648C8.90397 0.691418 9.71046 0.0865012 11.1201 0.00467706C12.5297 -0.0771471 13.7607 0.93494 14.2 1.45121C14.8633 2.1058 15.0094 3.41889 14.9995 3.9936C14.8337 5.31448 14.2493 6.09278 13.9779 6.31683L10.8832 9.32679C9.8763 10.1567 8.6177 10.1694 8.11426 10.072C6.33741 9.84987 5.47861 8.77155 5.27131 8.26015L6.73721 6.90128C6.82013 7.39223 7.29494 7.82668 7.52198 7.98253C8.48148 8.50854 9.36299 8.14326 9.68381 7.89486L12.2454 5.32325C12.5771 5.11284 12.8673 4.69008 12.971 4.50501C13.3856 3.17244 12.6502 2.39122 12.1862 2.12334C11.2534 1.58474 10.2465 2.02106 9.95034 2.34251L8.86942 3.39453Z" fill="var(--link-clr-res)"/>
					<path d="M6.13058 10.6055C6.71102 10.886 7.95185 10.9561 8.49971 10.9561L6.32307 13.0164C6.09603 13.3086 5.28954 13.9135 3.87991 13.9953C2.47028 14.0771 1.23932 13.0651 0.800039 12.5488C0.136683 11.8942 -0.00941389 10.5811 0.000457735 10.0064C0.166297 8.68552 0.750682 7.90722 1.02214 7.68317L4.11682 4.67322C5.1237 3.84328 6.3823 3.83062 6.88574 3.92803C8.66259 4.15013 9.52139 5.22845 9.72869 5.73985L8.26279 7.09872C8.17987 6.60777 7.70506 6.17332 7.47802 6.01747C6.51852 5.49146 5.63701 5.85674 5.31619 6.10514L2.75457 8.67675C2.42289 8.88716 2.13267 9.30992 2.02902 9.495C1.61443 10.8276 2.34984 11.6088 2.8138 11.8767C3.74664 12.4153 4.75352 11.9789 5.04966 11.6575L6.13058 10.6055Z" fill="var(--link-clr-res)"/>
				</svg>`;
	return stringToHTML(svg);
};

const getResources = async (category) => {
	container.innerHTML = '';
	url = `php/resources.php?category=${category}`;

	const req = await fetch(url);
	const res = await req.json();

	if (res[0].status === 'Success') {
		res[1].resources.forEach((json) => {
			const { links, resource_name, resource_type, short_desc } = json;
			const article = document.createElement('article');
			article.classList.add('resource');

			const h1 = document.createElement('h1');
			h1.textContent = resource_name;

			const rType = document.createElement('p');
			rType.textContent = resource_type;

			h1.appendChild(rType);

			const p = document.createElement('p');
			p.textContent = short_desc;

			const res_links = document.createElement('div');
			res_links.classList.add('links-res');

			links.forEach((link) => {
				const resLink = document.createElement('a');
				resLink.classList.add('link-resources');
				resLink.setAttribute('rel', 'noopener noreferrer');
				resLink.setAttribute('data-type', '');
				resLink.textContent = link.name;
				resLink.href = link.url;

				resLink.appendChild(renderSVG1());
				res_links.appendChild(resLink);
			});

			article.appendChild(h1);
			article.appendChild(p);
			article.appendChild(res_links);

			container.appendChild(article);
		});
	}
};

getResources('CD');

const categ = document.querySelector('.resources-select');

categ.addEventListener('change', async () => {
	await getResources(categ.value);
});
