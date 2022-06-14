<?php
// include('webadmin/getData.php');

function sortArrayByKey(array &$array, array $orderArray)
{
 $ordered = [];
 for ($i = 0; $i < count($orderArray); $i++) {
  $ordered[$orderArray[$i]] = $array[$orderArray[$i]];
 }

 return $ordered;
}

$categ = $_GET['category'];
$categ_with_space = ucwords(str_replace("_", " ", $categ));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films - <?php echo $categ_with_space; ?></title>
    <meta name="description" content="My name is Viraj Shukla and I'm a film student, here are some of my college film projects" />
	<meta name="KeyWords" content="Viraj Shukla, website, personal website, portfolio, filmmaking">
	<link rel="stylesheet" href="css/style.min.css?v=8" />
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="apple-touch-icon" href="images/favicon.png" />
    <style>
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
			<li class="nav-li dropdown"><a href="photoCateg.php" class="nav-link">Photos</a>
			<ul class="extra-items">
				<li><a href="photos.php?categ_id=3">Macro</a></li>
				<li><a href="photos.php?categ_id=2">Nature</a></li>
				<li><a href="photos.php?categ_id=1">Abstract</a></li>
			</ul>
		</li>
			<li class="nav-li dropdown active">
				<a href="films.php" class="nav-link active">Filmmaking</a>
				<ul class="extra-items">
					<li><a href="filmCateg.php?category=demo_reel" class="<?php if ('demo_reel' === $categ) {echo 'active';} ?>">Demo Reel</a></li>
					<li><a href="filmCateg.php?category=fiction" class="<?php if ('fiction' === $categ) {echo 'active';} ?>">Fiction</a></li>
					<li><a href="filmCateg.php?category=non_fiction" class="<?php if ('non_fiction' === $categ) {echo 'active';} ?>">Non Fiction</a></li>
					<li><a href="filmCateg.php?category=corporate_videos" class="<?php if ('corporate_videos' === $categ) {echo 'active';} ?>">Corporate Videos</a></li>
					<li><a href="filmCateg.php?category=other" class="<?php if ('other' === $categ) {echo 'active';} ?>">Other</a></li>
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
    <label class="switch">
			<input type="checkbox" class="darkmode-toggle" aria-label="dark mode toggle" />
			<span class="slider"></span>
	</label>

    <main style="margin-top: 100px; min-height: 700px;">
    <section class="section-films">
        <h1 class="title-about title-cd" style="max-width:1000px">FILMMAKING - <?php echo strtoupper($categ_with_space); ?></h1>
        <div class="films-grid">
            <?php
$key = YOUR_API_KEY_HERE;
$token = YOUR_TOKEN_HERE;
$url = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=20&playlistId=PLNUNNqPwkQe-67Wlv8WkoK7fZO96I07wf&access_token=$token&key=$key";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($client);
$jsonArr = json_decode($response, true);
$items = $jsonArr['items'];
$video_ids = [];

for ($i = 0; $i < sizeof($items); $i++) {
 $id = $items[$i]['id'];
 array_push($video_ids, $id);
}

include 'php/connect.php';

$q = 'SELECT * FROM films';
$r = mysqli_query($conn, $q);

if ($r) {
 $a = 0;
 $roles = [];
 $film_ids_db = [];
 $film_categories = [];
 while ($row = mysqli_fetch_array($r)) {
  // add film id as index in array and roles as value
  $film_ids_db[$row['film_id']] = $row['my_role'];
  $film_categories[$row['film_id']] = $row['category'];
 }

 $sorted = sortArrayByKey($film_ids_db, $video_ids);
 $sorted_category = sortArrayByKey($film_categories, $video_ids);

 for ($i = 0; $i < count($sorted); $i++) {
  $id = $items[$i]['id'];
  if ($sorted_category[$id] == $categ) {
   $thumbnail = $items[$i]['snippet']['thumbnails']['high']['url'];
   $title = $items[$i]['snippet']['title'];
   $video_id = $items[$i]['snippet']['resourceId']['videoId'];
   $b = $i + 1;
   echo "<div class='film-thumb'>";
   echo "<a href='filmDetails.php?id=$id&video_id=$video_id' class='film-link'>";
   echo "<img src='$thumbnail' alt='$title' class='film-img' />";
   echo "<div class='film-title-block'>";
   echo "<p class='film-title'>$title</p>";
   echo "<p class='film-role'>My Role: " . $sorted[$id] . "</p>";
   echo "</div>";
   echo "</a>";
   echo "</div>";
  }
 }
}
?>
        </div>
    </section>
    </main>

    <?php include 'php/footer.php'; ?>

    <script src="js/nav.js"></script>
	<script src="js/darkmode.js"></script>
</body>
</html>