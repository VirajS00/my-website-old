<?php
	include('webadmin/getData.php');
	include('php/connect.php');
	$id = $_GET['id'];
	$q = 'SELECT title, short_desc, description, video_img, platform, img_large FROM other WHERE id = '.$id;
	$r = mysqli_query($conn, $q);
	$data = mysqli_fetch_object($r);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php echo $data->title; ?></title>
		<link rel="stylesheet" href="css/otherContent.min.css?v=1" />
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="apple-touch-icon" href="images/favicon.png" />
		<style>
			pre {
				--extra-width-pre: 100px;
				width: calc(100% + var(--extra-width-pre));
			}
		</style>
	</head>
	<body>
		<main>
			<label class="switch">
				<input
					type="checkbox"
					class="darkmode-toggle"
					aria-label="dark mode toggle"
				/>
				<span class="slider"></span>
			</label>
			<section
				class="title-section"
				style="
					background-image: linear-gradient(
							180deg,
							#000000 0%,
							rgba(0, 0, 0, 0) 100%
						),
						url(<?php echo $data->img_large ?>);
				"
			>
				<div class="backarrow-container">
					<a href="other.php" class="back" style="cursor: pointer">
						<svg
							width="32"
							height="21"
							viewBox="0 0 32 21"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
								d="M10.4516 0.315825C10.8875 -0.105275 11.6131 -0.105275 12.0643 0.315825C12.5002 0.722699 12.5002 1.39987 12.0643 1.8058L3.88695 9.43777H30.871C31.5 9.43871 32 9.90534 32 10.4924C32 11.0795 31.5 11.5613 30.871 11.5613H3.88695L12.0643 19.179C12.5002 19.6001 12.5002 20.2782 12.0643 20.6842C11.6131 21.1053 10.8865 21.1053 10.4516 20.6842L0.338392 11.2455C-0.112798 10.8386 -0.112798 10.1614 0.338392 9.75549L10.4516 0.315825Z"
								style="
									fill: var(--arrow-clr);
									cursor: inherit;
									transition: fill 150ms ease;
								"
							/>
						</svg>
					</a>
				</div>
				<h1 class="title-top"><?php echo strtoupper($data->title); ?></h1>
			</section>
			<div class="wrapper">
				<section class="content-top">
					<article class="top-videoimg">
						<div class="video-container">
							<?php echo $data->video_img ?>
						</div>
					</article>
					<article class="top-text">
						<p class="content">
							<?php echo $data->short_desc ?>
						</p>
					</article>
				</section>
				<section class="main-content">
					<h1 class="title">PROJECT DETAILS</h1>
					<?php echo $data->description; ?>
					<div class="platform">
						<h1 class="title">PLATFORM USED</h1>
						<div class="platFormImgC">
							<?php
								$platforms = $data->platform;
								$q1 = 'SELECT img_code FROM platforms WHERE id IN ('.$platforms.')';
								$r1 = mysqli_query($conn, $q1);
								while($row = mysqli_fetch_array($r1)) {
									echo $row['img_code'];
								}
							?>
						</div>
					</div>
				</section>
			</div>
		</main>
		<script src="js/prism.js"></script>
		<script src="js/darkmode.js"></script>
		<script>
			const switchT = document.querySelector('.darkmode-toggle');
			let link;

			const changeArrowColour = () => {
				const topPos = document.querySelector('.content-top').offsetTop;
				if (switchT.checked) {
					document.body.style.setProperty('--arrow-clr', '#fff');
				} else {
					if (window.pageYOffset > topPos) {
						document.body.style.setProperty('--arrow-clr', '#000');
					} else {
						document.body.style.setProperty('--arrow-clr', '#fff');
					}
				}
			};

			switchT.addEventListener('click', () => {
				topPos = document.querySelector('.content-top').offsetTop;
				if (document.body.querySelector('link') !== null) {
					document.body.querySelector('link').remove();
				}
				if (switchT.checked) {
					link = 'css/prism-duotone-dark.css';
					document.body.style.setProperty('--arrow-clr', '#fff');
				} else {
					link = 'css/prism.css';
					window.addEventListener('scroll', changeArrowColour);
				}
				const linkTag = document.createElement('link');
				linkTag.rel = 'stylesheet';
				linkTag.href = link;
				document.body.appendChild(linkTag);
			});

			if (switchT.checked) {
				link = 'css/prism-duotone-dark.css';
				document.body.style.setProperty('--arrow-clr', '#fff');
			} else {
				link = 'css/prism.css';
				window.addEventListener('scroll', changeArrowColour);
			}
			const linkTag = document.createElement('link');
			linkTag.rel = 'stylesheet';
			linkTag.href = link;
			document.body.appendChild(linkTag);

			if(!!document.querySelector('pre')) {
				const styles = window.getComputedStyle(document.querySelector('pre'));
				let margin = (parseInt(styles.getPropertyValue('--extra-width-pre')) / 2) * -1;
				document.querySelectorAll('pre').forEach(pre => {
					pre.style.marginLeft = `${margin}px`;
				});
			}
		</script>
	</body>
</html>
