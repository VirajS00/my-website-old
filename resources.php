<?php
	include('webadmin/getData.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Resources</title>
		<link rel="stylesheet" href="css/style.min.css?v=1" />
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="apple-touch-icon" href="images/favicon.png" />
	</head>
	<body>
		<nav>
			<img src="images/logo.svg" alt="logo" class="nav-img" />
			<ul class="nav-ul">
				<li class="nav-li"><a href="index.php" class="nav-link">Home</a></li>
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
				<li class="nav-li">
					<a href="resources.php" class="nav-link active">Resources</a>
				</li>
				<li class="nav-li"><a href="about.php" class="nav-link">About</a></li>
				<li class="nav-li" style="margin-right: 70px"></li>
			</ul>
		</nav>
		<main style="margin-top: 100px">
			<label class="switch">
				<input
					type="checkbox"
					class="darkmode-toggle"
					aria-label="dark mode toggle"
				/>
				<span class="slider"></span>
			</label>
			<section class="resources">
				<div class="resources-top-container">
					<h1 class="resource-title">
						LEARNING RESOURCES
						<p class="subtitle-resources">
							This page consists of some learning resources that have helped me learn. You can select the category from the dropdown menu.
						</p>
					</h1>
					<div class="select-container1">
						<select id="" class="resources-select">
							<option value="CD">Coding and Design</option>
							<option value="PF">Photography and Filmmaking</option>
						</select>
						<svg width="19" height="8" viewBox="0 0 19 8">
							<path d="M10 7.5L19 0H0L10 7.5Z" style="fill: var(--sel-arrow-clr)"/>
						</svg>
					</div>
				</div>
				<div class="resources-grid"></div>
			</section>
		</main>
		<script src="js/nav.js"></script>
		<script src="js/darkmode.js"></script>
		<script src="js/resources.min.js"></script>
	</body>
</html>
