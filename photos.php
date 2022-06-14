<?php
include 'webadmin/getData.php';
include 'php/connect.php';
$categ_id = $_GET['categ_id'];
$q1 = 'SELECT category FROM images WHERE categ_id = ' . $categ_id . ' LIMIT 1';
$r1 = mysqli_query($conn, $q1);
$data = mysqli_fetch_object($r1);
$category = $data->category;
$q = 'SELECT caption, img_path FROM images WHERE categ_id = ' . $categ_id . ' ORDER BY sort';
$r = mysqli_query($conn, $q);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Photos - <?php echo $category; ?></title>
		<meta name="description" content="My name is Viraj Shukla and these are my <?php echo $category; ?> photos" />
		<meta name="KeyWords" content="Viraj Shukla, personal website, project, photography, <?php echo $category; ?> photography">
		<link rel="stylesheet" href="css/style.min.css?v=9" />
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="apple-touch-icon" href="images/favicon.png" />
		<style>
			section {
				padding-bottom: 3em;
			}
			.active {
				color: var(--hover-clr) !important;
			}
		</style>
	</head>
	<body>
		<nav>
			<img src="images/logo.svg" alt="logo" class="nav-img" />
			<ul class="nav-ul">
				<li class="nav-li"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-li dropdown active"><a href="photoCateg.php" class="nav-link active">Photos</a>
				<ul class="extra-items">
					<li><a href="photos.php?categ_id=3" class="<?php if ('3' === $_GET['categ_id']) {echo 'active';} ?>">Macro</a></li>
					<li><a href="photos.php?categ_id=2" class="<?php if ('2' === $_GET['categ_id']) {echo 'active';} ?>">Nature</a></li>
					<li><a href="photos.php?categ_id=1" class="<?php if ('1' === $_GET['categ_id']) {echo 'active';} ?>">Abstract</a></li>
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
while ($row = mysqli_fetch_array($r)) {
 $c = $b - 1;
 $d = $b + 1;
 echo "<div class='fullSizeImage' id='img$b'>
							<div class='content_lightbox'>
								<a href='#!' class='close'>&times;</a>
								<img src='" . $row['img_path'] . "' class='imgP' />
								<p class='captionImg'>" . $row['caption'] . "</p>
								<a href='#img$c' class='arr arrL'><</a>
								<a href='#img$d' class='arr arrR'>></a>
							</div>
						</div>";
 $b++;
}
?>
			</div>
			<div class="photos-c">
				<h1 class="title-about title-cd" style="margin-left: 20px"><?php echo strtoupper($category); ?></h1>
				<section class="photos-container">
						<?php
$q2 = 'SELECT url_small FROM images WHERE categ_id = ' . $categ_id . ' ORDER BY sort';
$r2 = mysqli_query($conn, $q2);
$a = 1;
while ($ro = mysqli_fetch_array($r2)) {
 echo "<a href='#img$a'>";
 echo "<img src='" . $ro['url_small'] . "' height='200px' width='300px' class='photoP' /> </a>";
 $a++;
}
?>
				</section>
				<?php include 'php/footer.php'; ?>
			</main>
		</div>

		<script src="js/nav.js"></script>
		<script src="js/lightbox.js"></script>
		<script src="js/darkmode.js"></script>
	</body>
</html>
