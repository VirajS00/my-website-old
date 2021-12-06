<?php
	include('webadmin/getData.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Photos Category</title>
		<meta name="description" content="My name is Viraj Shukla and these are my photos" />
		<meta name="KeyWords" content="Viraj Shukla, personal website, project, photography, macro photography, nature photography">
		<link rel="stylesheet" href="css/style.min.css?v=1" />
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="apple-touch-icon" href="images/favicon.png" />
	</head>
	<body>
		<nav>
			<img src="images/logo.svg" alt="logo" class="nav-img" />
			<ul class="nav-ul">
				<li class="nav-li"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-li"><a href="photoCateg.php" class="nav-link active">Photos</a></li>
				<li class="nav-li">
					<a href="films.php" class="nav-link">Filmmaking</a>
				</li>
				<li class="nav-li">
					<a href="other.php" class="nav-link">Coding and Design</a>
				</li>
				<li class="nav-li"><a href="contact.php" class="nav-link">Contact</a></li>
				<li class="nav-li"><a href="about.php" class="nav-link">About</a></li>
				<li class="nav-li" style='margin-right: 70px'></li>
			</ul>
		</nav>
		<main>
			<label class="switch">
				<input
					type="checkbox"
					class="darkmode-toggle"
					aria-label="dark mode toggle"
				/>
				<span class="slider"></span>
			</label>
			<section class="photos-content" style="margin-top: 100px">
				<h1 class="title-about title-photos">PHOTOGRAPHY</h1>
				<div class="photos-categ-grid">
					<a href="photos.php?categ_id=3" class="photo-categ-link">
						<article class="photo-categ-box">
							<img src="images/mac.jpg" alt="macro" class="categ-img" />
							<h2 class="cat-name">MACRO</h2>
						</article>
					</a>
					<a href="photos.php?categ_id=2" class="photo-categ-link">
						<article class="photo-categ-box">
							<img src="images/nat.jpg" alt="macro" class="categ-img" />
							<h2 class="cat-name">NATURE</h2>
						</article>
					</a>
					<a href="photos.php?categ_id=1" class="photo-categ-link">
						<article class="photo-categ-box">
							<img src="images/abs.jpg" alt="macro" class="categ-img" />
							<h2 class="cat-name">ABSTRACT</h2>
						</article>
					</a>
				</div>
			</section>
		</main>

		<footer>
			<p class="left">
				Made with &#9829; by Viraj Shukla
			</p>
			<p class="right">View code on 
				<a class="link" href="https://github.com/VirajS00/my-website-new" target="_blank" rel="noopener noreferrer">
					<svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M15.731 -4.80582e-07C7.0436 -4.80582e-07 0 6.95736 0 15.5403C0 22.4061 4.5074 28.2301 10.759 30.2859C11.5462 30.4281 11.833 29.9482 11.833 29.5361C11.833 29.1679 11.8195 28.19 11.8118 26.8936C7.43572 27.8323 6.51241 24.8101 6.51241 24.8101C5.79675 23.0147 4.76527 22.5368 4.76527 22.5368C3.33685 21.5732 4.87344 21.5923 4.87344 21.5923C6.45253 21.702 7.28312 23.194 7.28312 23.194C8.68643 25.5685 10.9657 24.8826 11.862 24.4848C12.0049 23.4812 12.4106 22.7962 12.8606 22.408C9.36732 22.0159 5.69438 20.6822 5.69438 14.7275C5.69438 13.0313 6.30766 11.6442 7.31403 10.5577C7.15177 10.1646 6.61189 8.58484 7.46759 6.44507C7.46759 6.44507 8.78881 6.02723 11.7944 8.03821C13.049 7.69287 14.3953 7.52116 15.7329 7.51543C17.0686 7.52116 18.415 7.69287 19.6715 8.03821C22.6751 6.02723 23.9934 6.44507 23.9934 6.44507C24.852 8.58484 24.3122 10.1646 24.1499 10.5577C25.1582 11.6442 25.7676 13.0313 25.7676 14.7275C25.7676 20.6975 22.0889 22.0111 18.584 22.3956C19.149 22.8754 19.6522 23.8237 19.6522 25.2737C19.6522 27.3505 19.6328 29.0267 19.6328 29.5361C19.6328 29.952 19.9158 30.4357 20.7145 30.284C26.9614 28.2244 31.4649 22.4042 31.4649 15.5403C31.4649 6.95736 24.4203 -4.80582e-07 15.731 -4.80582e-07Z" style="fill: var(--footer-logo-clr)"/>
					</svg>
				</a>
			</p>
		</footer>
		<script src="js/nav.js"></script>
		<script src="js/darkmode.js"></script>
	</body>
</html>
