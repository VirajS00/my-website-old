<?php
    // include('webadmin/getData.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Filmmaking</title>
		<meta name="description" content="My name is Viraj Shukla and I'm a film student, here are some of my college film projects" />
		<meta name="KeyWords" content="Viraj Shukla, website, personal website, portfolio, filmmaking">
		<link rel="stylesheet" href="css/style.min.css?v=7" />
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="apple-touch-icon" href="images/favicon.png" />
		<style>
			main {
				margin: 3rem 2rem;
			}
		</style>
	</head>
	<body>
		<nav>
			<img src="images/logo.svg" alt="logo" class="nav-img" />
			<ul class="nav-ul">
				<li class="nav-li"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-li dropdown"><a href="photoCateg.php" class="nav-link">Photos</a>
				<ul class="extra-items">
					<li><a href="photos.php?categ_id=3">Macro</a></li>
					<li><a href="photos.php?categ_id=2">Nature</a></li>
					<li><a href="photos.php?categ_id=1">Abstract</a></li>
				</ul>
			</li>
				<li class="nav-li dropdown active">
					<a href="films.php" class="nav-link active">Filmmaking</a>
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
				<li class="nav-li"><a href="contact.php" class="nav-link">Contact</a></li>
				<li class="nav-li"><a href="about.php" class="nav-link">About</a></li>
				<li class="nav-li" style='margin-right: 70px'></li>
			</ul>
		</nav>
		<label class="switch">
			<input type="checkbox" class="darkmode-toggle" aria-label="dark mode toggle" />
			<span class="slider"></span>
		</label>
		<main style="margin-top: 100px">
			<section class="film-categories">
				<h1 class="title-about title-cd">FILMMAKING</h1>
				<div class="film-cards-container">
					<article class="category-card">
						<a href="filmCateg.php?category=demo_reel">
							<picture>
								<source type='image/webp' srcset='images/film_cards/reel.webp'>
								<source type='image/jpeg' srcset='images/film_cards/reel.jpeg'>
								<img src='images/film_cards/reel.jpeg' alt='Demo Reel'>
							</picture>
							<h2 class="category-title">Demo Reel</h2>
						</a>
					</article>
					<article class="category-card">
						<a href="filmCateg.php?category=fiction">
							<picture>
								<source type='image/webp' srcset='images/film_cards/fiction.webp'>
								<source type='image/jpeg' srcset='images/film_cards/fiction.jpeg'>
								<img src='images/film_cards/fiction.jpeg' alt='Fiction'>
							</picture>
							<h2 class="category-title">Fiction</h2>
						</a>
					</article>
					<div class="category-card">
						<a href="filmCateg.php?category=non_fiction">
							<picture>
								<source type='image/webp' srcset='images/film_cards/non_fiction.webp'>
								<source type='image/jpeg' srcset='images/film_cards/non_fiction.jpeg'>
								<img src='images/film_cards/non_fiction.jpeg' alt='Non Fiction'>
							</picture>
							<h2 class="category-title">Non Fiction</h2>
						</a>
					</div>
					<article class="category-card">
						<a href="filmCateg.php?category=corporate_videos">
							<picture>
								<source type='image/webp' srcset='images/film_cards/corporate.webp'>
								<source type='image/jpeg' srcset='images/film_cards/corporate.jpeg'>
								<img src='images/film_cards/corporate.jpeg' alt='Corporate Films'>
							</picture>
							<h2 class="category-title">Corporate</h2>
						</a>
					</article>
					<article class="category-card">
						<a href="filmCateg.php?category=other">
							<picture>
								<source type='image/webp' srcset='images/film_cards/other.webp'>
								<source type='image/jpeg' srcset='images/film_cards/other.jpeg'>
								<img src='images/film_cards/other.jpeg' alt='Other Films'>
							</picture>
							<h2 class="category-title">Other</h2>
						</a>
					</article>
				</div>
			</section>
			<?php include('php/footer.php') ?>
		</main>

		<script src="js/nav.js"></script>
		<script src="js/darkmode.js"></script>
	</body>
</html>
