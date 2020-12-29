<?php
    include('webadmin/getData.php');
    function addATag ($string) {
        $regex = '/(\b(https?|ftp):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/im';
        return preg_replace($regex, '<a href="$1" target="_blank" class="linkFilm">$1</a>', $string);
	}
?>
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
			<?php
				$key = YOUR_KEY_HERE;
				$url = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=20&playlistId=PLNUNNqPwkQe-67Wlv8WkoK7fZO96I07wf&access_token=AIzaSyBY5Fyycf5sZ9CWDFMZjrDSw32MW0i9SGc&key=$key";
                $client = curl_init($url);
				curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
				$response = curl_exec($client);
                $jsonArr = json_decode($response, true);
				$items = $jsonArr['items'];
				for ($i=0; $i < sizeof($items); $i++) {
					$videoId = $items[$i]['snippet']['resourceId']['videoId'];
					$a = $i + 1;
					echo "<div id='film$a' class='filmE'>";
					echo "<div class='left-side'><div class='video-container'>";
					echo "<iframe width='800' height='491' src='https://www.youtube.com/embed/$videoId' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
					echo "</div></div>";
					echo "<div class='right-side'><a href='#!' class='close1'>&times;</a>";
					echo "<h1 class='title'>".strtoupper($items[$i]['snippet']['title'])."</h1>";
					echo "<p class='desc'>".nl2br(addATag($items[$i]['snippet']['description']))."</p>";
					echo "</div>";
					echo "</div>";
				}
			?>
		</div>
		<nav>
			<img src="images/logo.svg" alt="logo" class="nav-img" />
			<ul class="nav-ul">
				<li class="nav-li"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-li"><a href="about.php" class="nav-link">About</a></li>
				<li class="nav-li"><a href="photoCateg.php" class="nav-link">Photos</a></li>
				<li class="nav-li">
					<a href="films.php" class="nav-link active">Filmmaking</a>
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
				<?php
					for ($i=0; $i < sizeof($items); $i++){
						$thumbnail = $items[$i]['snippet']['thumbnails']['medium']['url'];
                        $title = $items[$i]['snippet']['title'];
						$b = $i + 1;
						echo "<div class='filmThumb'>";
						echo "<a href='#film$b' class='filmL'>";
						echo "<img height='0' width='0' src='$thumbnail' alt='Njaan Karshakan' class='filmThumbImg' />";
						echo "<div class='filmTitle'>$title</div>";
						echo "</a>";
						echo "</div>";
					}
				?>
			</section>
		</main>
		<script src="js/nav.js"></script>
		<script src="js/darkmode.js"></script>
	</body>
</html>
