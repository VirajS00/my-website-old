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
			<section class="top_img">
				<span style="font-size: 4rem">Hi</span>
				<span style="font-size: 2.5rem"
					>I’m <span style="color: #b2c1ff">Viraj Shukla</span></span
				>
				<a href="contact.php" class="contact-link" style="margin-top: 1.5rem"
					>Contact Me</a
				>
				<a class="arr-link" href="#">
					<img src="images/down_arr.svg" />
				</a>
			</section>
			<section class="home_page photo_section">
				<div class="home_section_overlay"></div>
				<h1 class="section-title">Photography</h1>
				<a href="photoCateg.php" class="explore-button">Explore</a>
			</section>
		</main>
		<script src="js/nav.js"></script>
	</body>
</html>
