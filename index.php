<?php
include 'webadmin/getData.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Viraj's Site</title>
		<meta name="description" content="My name is Viraj Shukla and I'm a film student who also loves to do web design and development" />
		<meta name="KeyWords" content="Viraj Shukla, website, portfolio, web design, web development, filmmaking, personal website">
		<link rel="stylesheet" href="css/style.min.css?v=9" />
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="apple-touch-icon" href="images/favicon.png" />
		<style>
			::-moz-selection {
				color: #2d210a;
				background-color: #ffe9c0;
			}

			::-webkit-selection {
				color: #2d210a;
				background-color: #ffe9c0;
			}

			::selection {
				color: #2d210a;
				background-color: #ffe9c0;
			}
			.home-link {
				color: #fff;
				text-decoration: none;
			}

			.home-link:hover {
				text-decoration: underline;
			}

			a.arr-link > img {
				transition: transform 250ms ease;
			}

			footer {
				--footer-border-clr: #fff;
				--footer-text-clr: #fff;
				--footer-logo-clr: #fff;
				z-index: 1000;
				bottom: 0;
			}

			.extra-items {
				background-image: linear-gradient(transparent, rgb(0 0 0 / .5));
				background-color: transparent;
			}

			.extra-items::after {
				display: none;
			}
		</style>
	</head>
	<body>
		<nav style="background-color: transparent">
			<img src="images/logo.svg" alt="logo" class="nav-img" />
			<ul class="nav-ul">
				<li class="nav-li">
					<a href="index.php" class="nav-link active">Home</a>
				</li>
				<li class="nav-li dropdown">
					<a href="photoCateg.php" class="nav-link">Photos</a>
					<ul class="extra-items">
						<li><a href="photos.php?categ_id=3">Macro</a></li>
						<li><a href="photos.php?categ_id=2">Nature</a></li>
						<li><a href="photos.php?categ_id=1">Abstract</a></li>
					</ul>
				</li>
				<li class="nav-li dropdown">
					<a href="films.php" class="nav-link">Filmmaking</a>
					<ul class="extra-items">
						<li><a href="filmCateg.php?category=demo_reel">Demo Reel</a></li>
						<li><a href="filmCateg.php?category=fiction">Fiction</a></li>
						<li><a href="filmCateg.php?category=non_fiction">Non Fiction</a></li>
						<li><a href="filmCateg.php?category=corporate_videos">Corporate Videos</a></li>
						<li><a href="filmCateg.php?category=other">Other</a></li>
					</ul>
				</li>
				<li class="nav-li">
					<a href="other.php" class="nav-link">Coding and Design</a>
				</li>
				<li class="nav-li">
					<a href="contact.php" class="nav-link">Contact</a>
				</li>
				<li class="nav-li"><a href="about.php" class="nav-link">About</a></li>
			</ul>
		</nav>
		<main>
			<section class="top_img" id="section_top">
				<span style="font-size: 4rem">Hi</span>
				<span style="font-size: 2.5rem"
					>I’m <span style="color: #b2c1ff">Viraj Shukla</span></span
				>
				<div class="linksHome">
					<a href="photos.php">Photography</a> |
					<a href="films.php">Filmmaking</a> |
					<a href="other.php">Coding and design</a>
				</div>
				<a href="contact.php" class="explore-button">Contact Me</a>
				<a class="arr-link" href="#section_photo">
					<img src="images/down_arr.svg" alt="down arrow" />
				</a>
			</section>
			<section class="home_page photo_section" id="section_photo">
				<div class="home_section_overlay"></div>
				<h1 class="section-title">Photography</h1>
				<a href="photoCateg.php" class="explore-button">Explore</a>
			</section>
			<section
				class="home_page video_section"
				id="section_films"
				style="top: 200vh"
			>
				<div class="home_section_overlay"></div>
				<div class="video-background">
					<iframe
						src="https://www.youtube.com/embed/-ShcfcRD1iQ?playlist=-ShcfcRD1iQ&controls=0&showinfo=0&rel=0&autoplay=1&mute=1&loop=1"
						frameborder="0"
						allowfullscreen
					></iframe>
				</div>

				<h1 class="section-title">Filmmaking</h1>
				<a href="films.php" class="explore-button">Explore</a>
			</section>
			<section
				class="home_page cd_section"
				id="section_cd"
				style="
					top: 300vh;
					background-image: url(images/codeImg.jpeg);
					background-position: center; background-size: cover;
				"
			>
				<div class="home_section_overlay"></div>

				<h1 class="section-title">Coding and Design</h1>
				<a href="other.php" class="explore-button">Explore</a>
				<?php include 'php/footer.php'; ?>
			</section>
		</main>

		<script src="js/nav.js"></script>
		<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
		<script src="js/homepage.min.js?v=1"></script>
	</body>
</html>
