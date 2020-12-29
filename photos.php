<?php
	include('php/connect.php');
	$categ_id = $_GET['categ_id'];
	$q1 = 'SELECT category FROM images WHERE categ_id = '.$categ_id. ' LIMIT 1';
	$r1 = mysqli_query($conn, $q1);
	$data = mysqli_fetch_object($r1);
	$category = $data->category;
	$q = 'SELECT caption, img_path FROM images WHERE categ_id = '.$categ_id. ' ORDER BY sort';
	$r = mysqli_query($conn, $q);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Photos - <?php echo $category; ?></title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="apple-touch-icon" href="images/favicon.png" />
	</head>
	<body>
		<nav>
			<img src="images/logo.svg" alt="logo" class="nav-img" />
			<ul class="nav-ul">
				<li class="nav-li"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-li"><a href="about.php" class="nav-link">About</a></li>
				<li class="nav-li"><a href="photoCateg.php" class="nav-link active">Photos</a></li>
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
			<div class="lightbox_images">
				<?php
				$b = 1;
					while($row = mysqli_fetch_array($r)) {
						$c = $b - 1;
						$d = $b + 1;
						echo "<div class='fullSizeImage' id='img$b'>
							<div class='content_lightbox'>
								<a href='#!' class='close'>&times;</a>
								<img src='".$row['img_path']."' class='imgP' />
								<p class='captionImg'>".$row['caption']."</p>
								<a href='#img$c' class='arr arrL'><</a>
								<a href='#img$d' class='arr arrR'>></a>
							</div>
						</div>";
						$b++;
					}
				?>
			</div>

			<h1 class="title-about title-cd" style="margin-left: 20px"><?php echo strtoupper($category); ?></h1>
			<section class="photos-container">
					<?php
						$q2 = 'SELECT url_small FROM images WHERE categ_id = '.$categ_id. ' ORDER BY sort';
						$r2 = mysqli_query($conn, $q2);
						$a = 1;
						while($ro = mysqli_fetch_array($r2)) {
							echo "<a href='#img$a'>";
							echo "<img src='".$ro['url_small']."' height='200px' width='300px' class='photoP' /> </a>";
							$a++;
						}
					?>
			</section>
		</main>
		<script src="js/nav.js"></script>
		<script src="js/lightbox.js"></script>
		<script src="js/darkmode.js"></script>
	</body>
</html>
