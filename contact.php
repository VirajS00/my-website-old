<?php
	include('webadmin/getData.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Contact</title>
		<link rel="stylesheet" href="css/style.min.css" />
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="apple-touch-icon" href="images/favicon.png" />
		<style>
			.errors {
				position: absolute;
				top: 0;
				height: auto;
				padding: 10px 0;
				background-color: #ff6652;
				width: 100%;
				border-top-right-radius: 3rem;
				display: flex;
				justify-content: center;
				align-items: center;
				flex-direction: column;
				z-index: 1;
			}

			.errors:empty {
				display: none;
			}

			.success {
				position: absolute;
				top: 0;
				height: auto;
				padding: 10px 0;
				background-color: #3abd4e;
				width: 100%;
				border-top-right-radius: 3rem;
				display: flex;
				justify-content: center;
				align-items: center;
				flex-direction: column;
				z-index: 1;
			}

			.success:empty {
				display: none;
			}
			@media screen and (min-width: 768px) {
				main {
					display: flex;
					flex-direction: column;
					justify-content: center;
					align-items: center;
					height: 90vh;
				}
			}
		</style>
	</head>
	<body>
		<nav>
			<img src="images/logo.svg" alt="logo" class="nav-img" />
			<ul class="nav-ul">
				<li class="nav-li"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-li"><a href="photoCateg.php" class="nav-link">Photos</a></li>
				<li class="nav-li">
					<a href="films.php" class="nav-link">Filmmaking</a>
				</li>
				<li class="nav-li">
					<a href="other.php" class="nav-link">Coding and Design</a>
				</li>
				<li class="nav-li"><a href="contact.php" class="nav-link active">Contact</a></li>
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
			<section class="contact-container" style="margin-top: 130px">
				<div class="itemLeft">
					<div class="emailC">
						<div class="title-small-contact">
							<img src="images/ph_icon.svg" alt="" class="mailImg" />
							Talk to me
						</div>
						<span class="contactInfo"
							><a
								href="tel: +91 9773621846"
								class="contL"
								style="padding-right: 5px"
								>+91 9773621846</a
							></span
						>
					</div>
					<div class="emailC">
						<div class="title-small-contact">
							<img
								src="images/email.svg"
								alt=""
								class="mailImg"
								style="padding-right: 5px"
							/>
							Write to me
						</div>
						<span class="contactInfo"
							><a href="mailto: virajshukla2000@yahoo.com" class="contL"
								>virajshukla2000@yahoo.com</a
							></span
						>
					</div>
					<div class="emailC">
						<div class="title-small-contact">
							<img
								src="images/connect.svg"
								alt=""
								class="mailImg"
								height="22px"
								style="padding-right: 5px"
							/>
							Connect with me
						</div>
						<div class="connectIcons">
							<a
								href="https://www.instagram.com/2000viraj/"
								target="_blank"
								class="socialL"
								data-medianame="Instagram"
								><img src="images/insta.svg" alt="Instagram" class="socialImg"
							/></a>
							<a
								href="https://www.flickr.com/photos/78545204@N03/"
								target="_blank"
								class="socialL"
								data-medianame="flickr"
								><img src="images/flickr.svg" alt="flickr" class="socialImg"
							/></a>
							<a
								href="https://www.youtube.com/channel/UCFVQF4STzBq1I72GtUCfCFQ?view_as=subscriber"
								target="_blank"
								class="socialL"
								data-medianame="YouTube"
								><img src="images/yt.svg" alt="YouTube" class="socialImg"
							/></a>
							<a
								href="https://github.com/VirajS00"
								target="_blank"
								class="socialL"
								data-medianame="GitHub"
								><img src="images/github.svg" alt="flickr" class="socialImg"
							/></a>
							<a
								href="https://www.linkedin.com/in/viraj-shukla-012851202"
								target="_blank"
								class="socialL"
								data-medianame="Linkedin"
								><img src="images/linkedin.svg" alt="flickr" class="socialImg"
							/></a>
						</div>
					</div>
				</div>
				<div class="itemRight">
					<div class="errors"></div>
					<div class="success"></div>
					<h1 style="font-weight: 400; font-size: 2.2em; margin-bottom: 1.5rem">
						SEND A MESSAGE
					</h1>
					<form id="myForm" method='post'>
						<input type="text" placeholder="NAME" id="name" class="textInput" />
						<input
							type="email"
							placeholder="EMAIL"
							id="email"
							class="textInput"
						/>
						<textarea
							id="message"
							placeholder="MESSAGE"
							class="msgTA"
						></textarea
						><br />
						<input
							type="button"
							class="formButton"
							value="SEND MESSAGE"
							id="submitBut"
							style="outline: none"
						/>
					</form>
				</div>
			</section>
		</main>
		<script src="js/nav.js"></script>
		<script src="js/darkmode.js"></script>
		<script src="js/submitContact.js"></script>
	</body>
</html>
