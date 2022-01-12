<?php
    // include('webadmin/getData.php');
    function addATag ($string) {
        $regex = '/(\b(https?|ftp):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/im';
        return preg_replace($regex, '<a href="$1" target="_blank" class="linkFilm">$1</a>', $string);
	}

	function sortArrayByKey(array &$array, array $orderArray) {
		$ordered = [];
		for($i = 0; $i < count($orderArray); $i++) {
			$ordered[$orderArray[$i]] = $array[$orderArray[$i]];
		}

		return $ordered;
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Filmmaking</title>
		<meta name="description" content="My name is Viraj Shukla and I'm a film student, here are some of my college film projects" />
		<meta name="KeyWords" content="Viraj Shukla, website, personal website, portfolio, filmmaking">
		<link rel="stylesheet" href="css/style.min.css?v=5" />
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
				$key = YOUR_API_KEY;
				$token = YOUR_ACCESS_TOKEN;
				$url = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=20&playlistId=PLNUNNqPwkQe-67Wlv8WkoK7fZO96I07wf&access_token=$token&key=$key";
                $client = curl_init($url);
				curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
				$response = curl_exec($client);
                $jsonArr = json_decode($response, true);
				$items = $jsonArr['items'];
				$video_ids = [];

				for ($i=0; $i < sizeof($items); $i++) {
					$id = $items[$i]['id'];
					array_push($video_ids, $id);
				}

				include('php/connect.php');

				$q = 'SELECT * FROM films';
				$r = mysqli_query($conn, $q);

				if($r) {
					$a = 0;
					$roles = [];
					$film_ids_db = [];
					while($row = mysqli_fetch_array($r)) {
						// add film id as index in array and roles as value
						$film_ids_db[$row['film_id']] = $row['my_role'];
					}

					$sorted = sortArrayByKey($film_ids_db, $video_ids);

					for($i = 0; $i < count($sorted); $i++) {
						$id = $items[$i]['id'];
						$thumbnail = $items[$i]['snippet']['thumbnails']['medium']['url'];
                    	$title = $items[$i]['snippet']['title'];
						$videoId = $items[$i]['snippet']['resourceId']['videoId'];

						$a = $i + 1;
						$b = $a - 1;
						$c = $a + 1;
						echo "<div id='film$a' class='filmE'>";
						echo "<div class='left-side'><div class='video-container'>";
						echo "<iframe width='800' height='491' src='https://www.youtube.com/embed/$videoId' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
						echo "</div></div>";
						echo "<div class='right-side'><a href='#!' class='close1'>&times;</a>";
						echo "<div class='title_id'>";
						echo "<h1 class='title'>".strtoupper($items[$i]['snippet']['title'])."</h1>";
						echo "<p class='role'>My Role: ".$sorted[$id]."</p>";
						echo "</div>";
						echo "<p class='desc'>".nl2br(addATag($items[$i]['snippet']['description']))."</p>";
						echo "<div class='arrowsGridInside'>";
						echo "<a href='#film$b'><svg width='62' height='62' viewBox='0 0 62 62' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M43 6L18 31L43 56' style='stroke: var(--arr-c); transition: stroke 250ms ease;' stroke-width='4'/></svg>
							</a><a href='#film$c'><svg width='62' height='62' viewBox='0 0 62 62' fill='none' xmlns='http://www.w3.org/2000/svg'>
							<path d='M18 6L43 31L18 56' style='stroke: var(--arr-c); transition: stroke 250ms ease;' stroke-width='4'/>
							</svg></a>";
						echo "</div>";
						echo "</div>";
						echo "</div>";

						echo '</div>';
					}

				} else {
					echo "MySQL Error: ".mysqli_error($conn);
				}

			?>
		</div>
		<nav>
			<img src="images/logo.svg" alt="logo" class="nav-img" />
			<ul class="nav-ul">
				<li class="nav-li"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-li"><a href="photoCateg.php" class="nav-link">Photos</a></li>
				<li class="nav-li">
					<a href="films.php" class="nav-link active">Filmmaking</a>
				</li>
				<li class="nav-li">
					<a href="other.php" class="nav-link">Coding and Design</a>
				</li>
				<li class="nav-li"><a href="contact.php" class="nav-link">Contact</a></li>
				<li class="nav-li"><a href="about.php" class="nav-link">About</a></li>
				<li class="nav-li" style='margin-right: 70px'></li>
			</ul>
		</nav>
		<label class="switch">
			<input type="checkbox" class="darkmode-toggle" aria-label="dark mode toggle" />
			<span class="slider"></span>
		</label>
		<main style="margin-top: 100px">
			<h1 class="title-about title-cd">FILMMAKING</h1>
			<section class="films-grid">
				<?php
					for ($i = 0; $i < count($sorted); $i++){
						$id = $items[$i]['id'];
						$thumbnail = $items[$i]['snippet']['thumbnails']['medium']['url'];
                        $title = $items[$i]['snippet']['title'];
						$b = $i + 1;
						echo "<div class='filmThumb'>";
						echo "<a href='#film$b' class='filmL'>";
						echo "<img height='0' width='0' src='$thumbnail' alt='Njaan Karshakan' class='filmThumbImg' />";
						echo "<div class='filmTitle'>";
						echo "<p class='title'>$title</p>";
						echo "<p class='role'>My Role: ".$sorted[$id]."</p>";
						echo "</div>";
						echo "</a>";
						echo "</div>";
					}
				?>
			</section>
			<?php include('php/footer.php') ?>
		</main>

		<script src="js/nav.js"></script>
		<script src="js/darkmode.js"></script>
	</body>
</html>
