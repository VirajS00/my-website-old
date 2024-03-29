<?php
include 'webadmin/getData.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>About</title>
		<meta name="description" content="My name is Viraj Shukla and I'm a film student who also loves to do web design and development" />
		<meta name="KeyWords" content="Viraj Shukla, website, personal website, portfolio, about Viraj Shukla">
		<link rel="stylesheet" href="css/style.min.css?v=9" />
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="apple-touch-icon" href="images/favicon.png" />
		<style>
			main {
				min-height: 100vh;
				display: flex;
				flex-direction: column;
				justify-content: center;
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
				<li class="nav-li"><a href="about.php" class="nav-link active">About</a></li>
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
			<section class="content" style="margin-top: 100px">
				<div class="content-container">
					<h1 class="title-about">ABOUT ME</h1>
					<p class="about-p">
						My friendship with the lens started at 7. Since then the journey has
						led me to discover the beautiful world around us. What meets the eye
						depends on the way you look at the world but it is what the eye
						cannot see that fascinates me even more. The limitless beauty of
						God's tiniest creatures is closest to my heart and Macro Photography
						brings that experience to me. Coding for Web Design is my playground
						and the joy of starting it from scratch is immense. Untiring
						experiments have given me the good gift of self learning and of
						never giving up. I am currently studying filmmaking.
					</p>
					<h1 class="title-about" style="padding-top: 30px">
						MY HOBBIES AND SKILLS
					</h1>
					<ul class="hobbies">
						<li class="hobby">Photography</li>
						<li class="hobby">Filmmaking</li>
						<li class="hobby">Figma</li>
						<li class="hobby">HTML</li>
						<li class="hobby">CSS</li>
						<li class="hobby">JavaScript</li>
						<li class="hobby">PHP</li>
						<li class="hobby">MySQL</li>
						<li class="hobby">Node.JS</li>
					</ul>

				</div>
			</section>
		</main>
		<?php include 'php/footer.php'; ?>

		<script src="js/nav.js"></script>
		<script src="js/darkmode.js"></script>
	</body>
</html>
