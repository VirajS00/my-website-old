<?php
include 'php/connect.php';
include 'webadmin/getData.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="My name is Viraj Shukla and these are my coding and design projects" />
		<meta name="KeyWords" content="Viraj Shukla, personal website, portfolio, web design, web development">
		<title>Coding and design</title>
		<link rel="stylesheet" href="css/style.min.css?v=9" />
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
					<a href="other.php" class="nav-link active">Coding and Design</a>
				</li>
				<li class="nav-li"><a href="contact.php" class="nav-link">Contact</a></li>
				<li class="nav-li"><a href="about.php" class="nav-link">About</a></li>
				<li class="nav-li" style='margin-right: 70px'></li>
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
			<div class="container-other-other">
				<h1 class="title-about title-cd">CODING AND DESIGN</h1>
				<section class="cards-container">
					<?php
$q = 'SELECT id, title, very_short_desc, platform, img_small, git_link, project_link FROM other ORDER BY sort';
$r = mysqli_query($conn, $q);
while ($row = mysqli_fetch_array($r)) {
 $q1 = 'SELECT platform_name FROM platforms WHERE id IN(' . $row['platform'] . ')';
 $r1 = mysqli_query($conn, $q1);
 echo "<article class='other-card'>
								<img src='" . $row['img_small'] . "' alt='" . $row['title'] . "' class='other-img' />
								<h2>" . strtoupper($row['title']) . "</h2>
								<p>" . $row['very_short_desc'] . "</p>
								<a href='otherContent.php?id=" . $row['id'] . "' class='article-link'>Read More</a>";
 echo "<ul class='tags'>";
 while ($ro = mysqli_fetch_array($r1)) {
  echo "<li class='tag'>" . strtoupper($ro['platform_name']) . "</li>";
 }
 echo "</ul>";
 if ('' == $row['git_link']) {
  echo "<div class='links'>
										<div class='logo'></div>
										<div class='logo'>
											<a href='" . $row['project_link'] . "' class='link' title='Project link' target='_blank' rel='noopener noreferrer'>
												<svg width='29' height='28' viewBox='0 0 29 28' style='fill: var(--svg-clr)' xmlns='http://www.w3.org/2000/svg'>
													<path d='M25.9752 20.2164C24.703 22.6276 22.7444 24.6073 20.347 25.9054C17.9496 27.2034 15.2212 27.7614 12.5067 27.5088C9.79219 27.2561 7.21357 26.2042 5.09691 24.4861C2.98025 22.7679 1.42061 20.4607 0.615224 17.8561C-0.190162 15.2516 -0.205125 12.4667 0.572229 9.85366C1.34958 7.24062 2.88434 4.91676 4.98242 3.17597C7.08049 1.43517 9.64766 0.35562 12.3593 0.0738306C15.0709 -0.207959 17.8052 0.32067 20.2164 1.59287L17.9796 5.83222C16.4069 5.00242 14.6234 4.65762 12.8547 4.84142C11.086 5.02522 9.41158 5.72937 8.04309 6.86482C6.6746 8.00027 5.67354 9.51602 5.1665 11.2204C4.65947 12.9248 4.66923 14.7413 5.19455 16.4401C5.71987 18.1389 6.73716 19.6439 8.11777 20.7645C9.49838 21.8852 11.1803 22.5713 12.9509 22.7361C14.7214 22.9009 16.5011 22.537 18.0648 21.6903C19.6285 20.8436 20.906 19.5523 21.7358 17.9796L25.9752 20.2164Z' fill='var(--logo-color)' />
													<path d='M17.5907 13.2374C16.2135 14.3908 17.0166 17.2742 16.7299 18.1393C16.3473 18.8121 15.2951 19.2926 14.1474 15.8325C12.9997 12.3724 13.8605 11.0269 15.0083 10.0657C16.7299 8.62394 19.599 8.43171 21.8944 8.33559V5.16381C22.3535 4.24111 23.4246 4.77935 23.9029 5.16381L28.4937 9.7773C29.4118 10.4693 28.8762 11.219 28.4937 11.5074L23.329 15.8325C22.4108 16.5245 21.99 15.9286 21.8944 15.5442V12.3724C21.0337 12.1802 18.968 12.084 17.5907 13.2374Z' fill='var(--logo-color)' />
												</svg>
											</a>
										</div>
									</div>";
 } else {
  echo "<div class='links'>
										<div class='logo'>
											<a href='" . $row['git_link'] . "' class='link' title='GitHub Repo' target='_blank' rel='noopener noreferrer'>
												<svg width='30' height='30' viewBox='0 0 30 30' style='fill: var(--svg-clr)' xmlns='http://www.w3.org/2000/svg'>
													<path fill-rule='evenodd'
														clip-rule='evenodd' d='M14.9986 2.36807e-06C6.71568 2.36807e-06 0 6.71568 0 15.0005C0 21.6277 4.29755 27.2495 10.2581 29.2339C11.0086 29.3711 11.2821 28.9079 11.2821 28.5101C11.2821 28.1546 11.2692 27.2108 11.2619 25.9594C7.08954 26.8655 6.20921 23.9482 6.20921 23.9482C5.52687 22.2152 4.54342 21.7539 4.54342 21.7539C3.1815 20.8238 4.64655 20.8423 4.64655 20.8423C6.15212 20.9482 6.94404 22.3883 6.94404 22.3883C8.28202 24.6803 10.4552 24.0182 11.3097 23.6342C11.446 22.6655 11.8328 22.0044 12.2619 21.6296C8.93121 21.2511 5.42926 19.9638 5.42926 14.2159C5.42926 12.5787 6.014 11.2398 6.97351 10.1909C6.81881 9.81154 6.30406 8.28663 7.11992 6.22119C7.11992 6.22119 8.37963 5.81786 11.2453 7.75899C12.4414 7.42564 13.7251 7.25989 15.0005 7.25437C16.274 7.25989 17.5576 7.42564 18.7556 7.75899C21.6194 5.81786 22.8764 6.22119 22.8764 6.22119C23.695 8.28663 23.1803 9.81154 23.0256 10.1909C23.9869 11.2398 24.568 12.5787 24.568 14.2159C24.568 19.9785 21.0605 21.2465 17.7188 21.6176C18.2575 22.0808 18.7372 22.9961 18.7372 24.3958C18.7372 26.4004 18.7188 28.0184 18.7188 28.5101C18.7188 28.9116 18.9886 29.3784 19.7501 29.232C25.7061 27.2439 30 21.6259 30 15.0005C30 6.71568 23.2834 2.36807e-06 14.9986 2.36807e-06Z' fill='var(--logo-color)' />
												</svg>
											</a>
										</div>
										<div class='logo'>
											<a href='" . $row['project_link'] . "' class='link' title='Project link' target='_blank' rel='noopener noreferrer'>
												<svg width='29' height='28' viewBox='0 0 29 28' style='fill: var(--svg-clr)' xmlns='http://www.w3.org/2000/svg'>
													<path d='M25.9752 20.2164C24.703 22.6276 22.7444 24.6073 20.347 25.9054C17.9496 27.2034 15.2212 27.7614 12.5067 27.5088C9.79219 27.2561 7.21357 26.2042 5.09691 24.4861C2.98025 22.7679 1.42061 20.4607 0.615224 17.8561C-0.190162 15.2516 -0.205125 12.4667 0.572229 9.85366C1.34958 7.24062 2.88434 4.91676 4.98242 3.17597C7.08049 1.43517 9.64766 0.35562 12.3593 0.0738306C15.0709 -0.207959 17.8052 0.32067 20.2164 1.59287L17.9796 5.83222C16.4069 5.00242 14.6234 4.65762 12.8547 4.84142C11.086 5.02522 9.41158 5.72937 8.04309 6.86482C6.6746 8.00027 5.67354 9.51602 5.1665 11.2204C4.65947 12.9248 4.66923 14.7413 5.19455 16.4401C5.71987 18.1389 6.73716 19.6439 8.11777 20.7645C9.49838 21.8852 11.1803 22.5713 12.9509 22.7361C14.7214 22.9009 16.5011 22.537 18.0648 21.6903C19.6285 20.8436 20.906 19.5523 21.7358 17.9796L25.9752 20.2164Z' fill='var(--logo-color)' />
													<path d='M17.5907 13.2374C16.2135 14.3908 17.0166 17.2742 16.7299 18.1393C16.3473 18.8121 15.2951 19.2926 14.1474 15.8325C12.9997 12.3724 13.8605 11.0269 15.0083 10.0657C16.7299 8.62394 19.599 8.43171 21.8944 8.33559V5.16381C22.3535 4.24111 23.4246 4.77935 23.9029 5.16381L28.4937 9.7773C29.4118 10.4693 28.8762 11.219 28.4937 11.5074L23.329 15.8325C22.4108 16.5245 21.99 15.9286 21.8944 15.5442V12.3724C21.0337 12.1802 18.968 12.084 17.5907 13.2374Z' fill='var(--logo-color)' />
												</svg>
											</a>
										</div>
									</div>";
 }
 echo "</article>";
}
?>
				</section>
			</div>
		</main>
		<?php include 'php/footer.php'; ?>

		<script src="js/nav.js"></script>
		<script src="js/darkmode.js"></script>
	</body>
</html>
