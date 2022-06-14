<?php
function addATag($string)
{
    $regex = '/(\b(https?|ftp):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/im';
    return preg_replace($regex, '<a href="$1" target="_blank" class="linkFilm">$1</a>', $string);
}

function addHashTagLink($string)
{
    $expression = "/#+([a-zA-Z0-9_]+)/";
    $url = "https://www.youtube.com/hashtag/";
    $string = preg_replace($expression, '<a href="//www.youtube.com/hashtag/$1" target="_blank">$0</a>', $string);
    return $string;
}

$id = $_GET['id'];
$video_id = $_GET['video_id'];

$key = YOUR_API_KEY_HERE;
$url = "https://www.googleapis.com/youtube/v3/videos?part=snippet&id=$video_id&key=$key";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($client);
$jsonArr = json_decode($response, true);
$items = $jsonArr['items'][0];

$title = $items['snippet']['title'];
$desc = $items['snippet']['description'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Film - <?php echo $title; ?></title>
    <meta name="description" content="My name is Viraj Shukla and I'm a film student, here are some of my college film projects" />
	<meta name="KeyWords" content="Viraj Shukla, website, personal website, portfolio, filmmaking">
	<link rel="stylesheet" href="css/style.min.css?v=11" />
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="apple-touch-icon" href="images/favicon.png" />
    <style>
        :root {
            --arrow-clr: #023DD4;
            --arr-clr-hover: rgb(143, 0, 0);
        }

        .backarrow-container {
            position: fixed;
            top: 1em;
            left: 1em;
        }

        .darkmode {
            --arrow-clr: #fff;
            --arr-clr-hover: #D00000;
        }

        a.back:hover {
            --arrow-clr: var(--arr-clr-hover);
        }

        body {
            font-family: var(--font-pmry);
        }
        .active {
            color: var(--hover-clr) !important;
        }
    </style>
</head>
<body>
    <?php
include 'php/connect.php';
$q = 'SELECT * FROM films WHERE film_id =\'' . $id . '\'';
$r = mysqli_query($conn, $q);

if ($r) {
    $arr = mysqli_fetch_array($r);
    $role = $arr['my_role'];
    $categ = $arr['category'];
    $images = $arr['images'];

    $image = explode(",", $images);
    ?>
    <label class="switch">
        <input type="checkbox" class="darkmode-toggle" aria-label="dark mode toggle" />
        <span class="slider"></span>
    </label>
    <div class="backarrow-container">
		<a href="filmCateg.php?category=<?php echo $categ; ?>" class="back" style="cursor: pointer">
			<svg width="32" height="21" viewBox="0 0 32 21" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M10.4516 0.315825C10.8875 -0.105275 11.6131 -0.105275 12.0643 0.315825C12.5002 0.722699 12.5002 1.39987 12.0643 1.8058L3.88695 9.43777H30.871C31.5 9.43871 32 9.90534 32 10.4924C32 11.0795 31.5 11.5613 30.871 11.5613H3.88695L12.0643 19.179C12.5002 19.6001 12.5002 20.2782 12.0643 20.6842C11.6131 21.1053 10.8865 21.1053 10.4516 20.6842L0.338392 11.2455C-0.112798 10.8386 -0.112798 10.1614 0.338392 9.75549L10.4516 0.315825Z"
					style="
							fill: var(--arrow-clr);
							cursor: inherit;
							transition: fill 150ms ease;
						"
				    />
			</svg>
		</a>
	</div>
    <main>
        <div class="content-container">

            <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            <details class="desc">
                <summary>
                    <h1><?php echo $title; ?></h1>
                    <p class="role_details">My Role: <?php echo $role; ?></p>
                </summary>
                <p class="film-desc">
                    <?php echo nl2br(addATag(addHashTagLink($desc))); ?>
                </p>
            </details>

            <div class="images-container">
                <?php
if ('demo_reel' !== $categ) {
        echo "<h1>Film Stills</h1>";
        for ($i = 0; $i < count($image); $i++) {
            echo "<picture>";
            echo "<source type='image/webp' srcset='../filmImages/" . $image[$i] . ".webp'>";
            echo "<source type='image/jpeg' srcset='../filmImages/" . $image[$i] . ".jpg'>";
            echo "<img src='../filmImages/" . $image[$i] . ".jpg' alt='thumb image'>";
            echo "</picture>";
        }
    }
    ?>
            </div>
        </div>
    </main>
<?php
} else {
    echo mysqli_error($conn);
}
?>
    <script src="js/darkmode.js"></script>
</body>
</html>
