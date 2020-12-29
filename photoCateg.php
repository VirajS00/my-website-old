<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Photos Category</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="apple-touch-icon" href="images/favicon.png" />
	</head>
	<body>
		<nav>
			<img src="images/logo.svg" alt="logo" class="nav-img" />
			<ul class="nav-ul">
				<li class="nav-li"><a href="index.php" class="nav-link active">Home</a></li>
				<li class="nav-li"><a href="about.php" class="nav-link">About</a></li>
				<li class="nav-li"><a href="photoCateg.php" class="nav-link">Photos</a></li>
				<li class="nav-li">
					<a href="films.php" class="nav-link">Filmmaking</a>
				</li>
				<li class="nav-li">
					<a href="other.php" class="nav-link">Coding and Design</a>
				</li>
				<li class="nav-li"><a href="contact.php" class="nav-link">Contact</a></li>
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
					<a href="#" class="photo-categ-link">
						<article class="photo-categ-box">
							<img src="images/mac.jpg" alt="macro" class="categ-img" />
							<h2 class="cat-name">MACRO</h2>
						</article>
					</a>
					<a href="#" class="photo-categ-link">
						<article class="photo-categ-box">
							<img src="images/nat.jpg" alt="macro" class="categ-img" />
							<h2 class="cat-name">NATURE</h2>
						</article>
					</a>
					<a href="#" class="photo-categ-link">
						<article class="photo-categ-box">
							<img src="images/abs.jpg" alt="macro" class="categ-img" />
							<h2 class="cat-name">ABSTRACT</h2>
						</article>
					</a>
				</div>
			</section>
		</main>
		<script src="js/nav.js"></script>
		<script src="js/darkmode.js"></script>
	</body>
</html>
