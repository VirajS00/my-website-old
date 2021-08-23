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
				<div class="resources-grid">
					<article class="resource">
						<h1>Lorem, ipsum.
							<p>Youtuber</p>
						</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum
							ab molestias architecto facilis corporis ratione inventore eos
							facere ut dolor.
						</p>
						<div class="links-res">
							<a href="" data-type="youtube" class="link-resources">YouTube
								<svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.86942 3.39453C8.28899 3.11399 7.04815 3.04386 6.50029 3.04386L8.67693 0.983648C8.90397 0.691418 9.71046 0.0865012 11.1201 0.00467706C12.5297 -0.0771471 13.7607 0.93494 14.2 1.45121C14.8633 2.1058 15.0094 3.41889 14.9995 3.9936C14.8337 5.31448 14.2493 6.09278 13.9779 6.31683L10.8832 9.32679C9.8763 10.1567 8.6177 10.1694 8.11426 10.072C6.33741 9.84987 5.47861 8.77155 5.27131 8.26015L6.73721 6.90128C6.82013 7.39223 7.29494 7.82668 7.52198 7.98253C8.48148 8.50854 9.36299 8.14326 9.68381 7.89486L12.2454 5.32325C12.5771 5.11284 12.8673 4.69008 12.971 4.50501C13.3856 3.17244 12.6502 2.39122 12.1862 2.12334C11.2534 1.58474 10.2465 2.02106 9.95034 2.34251L8.86942 3.39453Z" fill="var(--link-clr-res)"/>
									<path d="M6.13058 10.6055C6.71102 10.886 7.95185 10.9561 8.49971 10.9561L6.32307 13.0164C6.09603 13.3086 5.28954 13.9135 3.87991 13.9953C2.47028 14.0771 1.23932 13.0651 0.800039 12.5488C0.136683 11.8942 -0.00941389 10.5811 0.000457735 10.0064C0.166297 8.68552 0.750682 7.90722 1.02214 7.68317L4.11682 4.67322C5.1237 3.84328 6.3823 3.83062 6.88574 3.92803C8.66259 4.15013 9.52139 5.22845 9.72869 5.73985L8.26279 7.09872C8.17987 6.60777 7.70506 6.17332 7.47802 6.01747C6.51852 5.49146 5.63701 5.85674 5.31619 6.10514L2.75457 8.67675C2.42289 8.88716 2.13267 9.30992 2.02902 9.495C1.61443 10.8276 2.34984 11.6088 2.8138 11.8767C3.74664 12.4153 4.75352 11.9789 5.04966 11.6575L6.13058 10.6055Z" fill="var(--link-clr-res)"/>
								</svg></a>
							<a href="" data-type="twitch" class="link-resources">Twitch
								<svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.86942 3.39453C8.28899 3.11399 7.04815 3.04386 6.50029 3.04386L8.67693 0.983648C8.90397 0.691418 9.71046 0.0865012 11.1201 0.00467706C12.5297 -0.0771471 13.7607 0.93494 14.2 1.45121C14.8633 2.1058 15.0094 3.41889 14.9995 3.9936C14.8337 5.31448 14.2493 6.09278 13.9779 6.31683L10.8832 9.32679C9.8763 10.1567 8.6177 10.1694 8.11426 10.072C6.33741 9.84987 5.47861 8.77155 5.27131 8.26015L6.73721 6.90128C6.82013 7.39223 7.29494 7.82668 7.52198 7.98253C8.48148 8.50854 9.36299 8.14326 9.68381 7.89486L12.2454 5.32325C12.5771 5.11284 12.8673 4.69008 12.971 4.50501C13.3856 3.17244 12.6502 2.39122 12.1862 2.12334C11.2534 1.58474 10.2465 2.02106 9.95034 2.34251L8.86942 3.39453Z" fill="var(--link-clr-res)"/>
									<path d="M6.13058 10.6055C6.71102 10.886 7.95185 10.9561 8.49971 10.9561L6.32307 13.0164C6.09603 13.3086 5.28954 13.9135 3.87991 13.9953C2.47028 14.0771 1.23932 13.0651 0.800039 12.5488C0.136683 11.8942 -0.00941389 10.5811 0.000457735 10.0064C0.166297 8.68552 0.750682 7.90722 1.02214 7.68317L4.11682 4.67322C5.1237 3.84328 6.3823 3.83062 6.88574 3.92803C8.66259 4.15013 9.52139 5.22845 9.72869 5.73985L8.26279 7.09872C8.17987 6.60777 7.70506 6.17332 7.47802 6.01747C6.51852 5.49146 5.63701 5.85674 5.31619 6.10514L2.75457 8.67675C2.42289 8.88716 2.13267 9.30992 2.02902 9.495C1.61443 10.8276 2.34984 11.6088 2.8138 11.8767C3.74664 12.4153 4.75352 11.9789 5.04966 11.6575L6.13058 10.6055Z" fill="var(--link-clr-res)"/>
								</svg></a>
						</div>
					</article>
					<?php
						include('php/connect.php');
						$q = "SELECT name, type, short_desc, links FROM resources WHERE category = 'CD' ORDER BY sort";
						$r = mysqli_query($conn, $q);
						if($r) {
							while($row = mysqli_fetch_array($r)) {
								$links = json_decode($row['links'], true);
								echo "<article class='resource'>
									<h1>".$row['name']."<p>".$row['type']."</p></h1>
									<p>".nl2br($row['short_desc'])."</p>";

									echo "<div class='links-res'>";
									foreach($links as $link) {
										echo "<a href='".$link['url']."' class='link-resources' target='_blank' rel='noopener noreferrer' data-type>".$link['link_type']."
												<svg width='15' height='14' viewBox='0 0 15 14' fill='none' xmlns='http://www.w3.org/2000/svg'>
													<path d='M8.86942 3.39453C8.28899 3.11399 7.04815 3.04386 6.50029 3.04386L8.67693 0.983648C8.90397 0.691418 9.71046 0.0865012 11.1201 0.00467706C12.5297 -0.0771471 13.7607 0.93494 14.2 1.45121C14.8633 2.1058 15.0094 3.41889 14.9995 3.9936C14.8337 5.31448 14.2493 6.09278 13.9779 6.31683L10.8832 9.32679C9.8763 10.1567 8.6177 10.1694 8.11426 10.072C6.33741 9.84987 5.47861 8.77155 5.27131 8.26015L6.73721 6.90128C6.82013 7.39223 7.29494 7.82668 7.52198 7.98253C8.48148 8.50854 9.36299 8.14326 9.68381 7.89486L12.2454 5.32325C12.5771 5.11284 12.8673 4.69008 12.971 4.50501C13.3856 3.17244 12.6502 2.39122 12.1862 2.12334C11.2534 1.58474 10.2465 2.02106 9.95034 2.34251L8.86942 3.39453Z' fill='var(--link-clr-res)' />
													<path d='M6.13058 10.6055C6.71102 10.886 7.95185 10.9561 8.49971 10.9561L6.32307 13.0164C6.09603 13.3086 5.28954 13.9135 3.87991 13.9953C2.47028 14.0771 1.23932 13.0651 0.800039 12.5488C0.136683 11.8942 -0.00941389 10.5811 0.000457735 10.0064C0.166297 8.68552 0.750682 7.90722 1.02214 7.68317L4.11682 4.67322C5.1237 3.84328 6.3823 3.83062 6.88574 3.92803C8.66259 4.15013 9.52139 5.22845 9.72869 5.73985L8.26279 7.09872C8.17987 6.60777 7.70506 6.17332 7.47802 6.01747C6.51852 5.49146 5.63701 5.85674 5.31619 6.10514L2.75457 8.67675C2.42289 8.88716 2.13267 9.30992 2.02902 9.495C1.61443 10.8276 2.34984 11.6088 2.8138 11.8767C3.74664 12.4153 4.75352 11.9789 5.04966 11.6575L6.13058 10.6055Z' fill='var(--link-clr-res)' />
												</svg></a>";
									}
									echo "</div>";
									echo "</article>";
							}
						} else {
							echo "MySQL Error: ".mysqli_error($conn);
						}
					?>
				</div>
			</section>
		</main>
		<script src="js/nav.js"></script>
		<script src="js/darkmode.js"></script>
	</body>
</html>
