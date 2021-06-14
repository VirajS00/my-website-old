<?php
	include('webadmin/getData.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Viraj's Site</title>
		<link rel="stylesheet" href="css/style.css" />
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
		</style>
	</head>
	<body>
		<nav style="background-color: transparent">
			<img src="images/logo.svg" alt="logo" class="nav-img" />
			<ul class="nav-ul">
				<li class="nav-li">
					<a href="index.php" class="nav-link active">Home</a>
				</li>
				<li class="nav-li">
					<a href="photoCateg.php" class="nav-link">Photos</a>
				</li>
				<li class="nav-li">
					<a href="films.php" class="nav-link">Filmmaking</a>
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
				<a href="contact.php" class="explore-button">Contact Me</a>
				<a class="arr-link" href="#section_photo">
					<img src="images/down_arr.svg" />
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
						src="https://www.youtube.com/embed/xIMf_QEciKI?playlist=xIMf_QEciKI&controls=0&showinfo=0&rel=0&autoplay=1&mute=1&loop=1"
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
				style="top: 300vh; background-image: url(images/codeImg.jpeg)"
			>
				<div class="home_section_overlay"></div>

				<h1 class="section-title">Coding and Design</h1>
				<a href="films.php" class="explore-button">Explore</a>
			</section>
		</main>
		<script src="js/nav.js"></script>
		<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
		<script src="js/homepage.js"></script>
	</body>
</html>
