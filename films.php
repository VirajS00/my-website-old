<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Filmmaking</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="apple-touch-icon" href="images/favicon.png" />
		<style>
			main {
				margin: 3rem 2rem;
			}
		</style>
	</head>
	<body>
		<div class="embedLinks" id="embedLinks">
			<div id="film1" class="filmE">
				<div class="left-side">
					<div class="video-container">
						<iframe
							width="800"
							height="491"
							src="https://www.youtube.com/embed/g9YMX0Fukf4"
							frameborder="0"
							allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen
						></iframe>
					</div>
				</div>
				<div class="right-side">
					<a href="#!" class="close1">&times;</a>
					<h1 class="title">VIDEO TITLE</h1>
					<p class="desc">
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic
						voluptates quo libero deserunt commodi blanditiis quaerat rem unde
						sint magni adipisci, reprehenderit atque numquam exercitationem
						facilis, impedit, labore molestias suscipit!
						<br /><br />
						<a href="http://virajshukla.com" target="_blank"
							>http://virajshukla.com</a
						>
					</p>
				</div>
			</div>
		</div>
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
		<main style="margin-top: 100px">
			<label class="switch">
				<input
					type="checkbox"
					class="darkmode-toggle"
					aria-label="dark mode toggle"
				/>
				<span class="slider"></span>
			</label>
			<h1 class="title-about title-cd">FILMMAKING</h1>
			<section class="films-grid">
				<div class="filmThumb">
					<a href="#film1" class="filmL">
						<img
							height="0"
							width="0"
							src="https://i.ytimg.com/vi/xIMf_QEciKI/mqdefault.jpg"
							alt="Njaan Karshakan"
							class="filmThumbImg"
						/>
						<div class="filmTitle">Demo Reel 2020</div>
					</a>
				</div>
				<div class="filmThumb">
					<a href="#film2" class="filmL">
						<img
							height="0"
							width="0"
							src="https://i.ytimg.com/vi/g9YMX0Fukf4/mqdefault.jpg"
							alt="Njaan Karshakan"
							class="filmThumbImg"
						/>
						<div class="filmTitle">Dal Bati Choorma</div>
					</a>
				</div>
				<div class="filmThumb">
					<a href="#film3" class="filmL">
						<img
							height="0"
							width="0"
							src="https://i.ytimg.com/vi/r4bgDYGkbpE/mqdefault.jpg"
							alt="Njaan Karshakan"
							class="filmThumbImg"
						/>
						<div class="filmTitle">Njaan Karshakan</div>
					</a>
				</div>
				<div class="filmThumb">
					<a href="#film4" class="filmL">
						<img
							height="0"
							width="0"
							src="https://i.ytimg.com/vi/-HCDzIOI85w/mqdefault.jpg"
							alt="Njaan Karshakan"
							class="filmThumbImg"
						/>
						<div class="filmTitle">A Day in My Room</div>
					</a>
				</div>
				<div class="filmThumb">
					<a href="#film5" class="filmL">
						<img
							height="0"
							width="0"
							src="https://i.ytimg.com/vi/JiF9ZDi1cks/mqdefault.jpg"
							alt="Njaan Karshakan"
							class="filmThumbImg"
						/>
						<div class="filmTitle">The eternal Calendar</div>
					</a>
				</div>
			</section>
		</main>
		<script src="js/nav.js"></script>
		<script src="js/darkmode.js"></script>
	</body>
</html>
