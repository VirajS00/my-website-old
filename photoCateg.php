<?php
include 'webadmin/getData.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Photos Category</title>
		<meta name="description" content="My name is Viraj Shukla and these are my photos" />
		<meta name="KeyWords" content="Viraj Shukla, personal website, project, photography, macro photography, nature photography">
		<link rel="stylesheet" href="css/style.min.css?v=9" />
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="apple-touch-icon" href="images/favicon.png" />
	</head>
	<body>
		<nav>
			<img src="images/logo.svg" alt="logo" class="nav-img" />
			<ul class="nav-ul">
				<li class="nav-li"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-li dropdown active"><a href="photoCateg.php" class="nav-link active">Photos</a>
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
		<?php include 'php/footer.php'; ?>

		<script src="js/nav.js"></script>
		<script src="js/darkmode.js?v=1"></script>
	</body>
</html>
