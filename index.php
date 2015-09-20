<html>
<head>
<title>Wonderbolt Radio</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<center>
  <div id=logoarea>
    <div id=logo><img id=logo src=https://dusky.horse/wonderbolt/icon.png></img></div>
    <center><div id=Logotext><h1>Wonderbolt Radio</h1></div></center>
  </div>
  <div>
    <h2>Radio Player</h2>
    <center><div id=player><iframe src="https://ponyvillelive.com/index/tunein/skin/dark/embed/true/autoplay/false/showonlystation/true/id/22" frameborder="0" allowtransparency="true" style="overflow: visible; width: 100%; height: 150px; border: 0;"></iframe></div></center>
    <div id=tumblr>
    <?php
    $request_url = "http://wonderboltradio.tumblr.com/api/read?type=post&start=0&num=5";
    $xml = simplexml_load_file($request_url);
    $posts = $xml->posts->post;

    foreach ($posts as $post) {
    	$title = $post->{'regular-title'};
    	$date = $post['date'];
    	$body = $post->{'regular-body'};
    	$link = $post['url'];
    	$small_post = substr($body, 0, 320);
   		echo '<div id=tumblrpost>';
    	echo '<h2>' . $title . '</h2>';
    	echo '<h4>' . $date . '</h4>';
    	echo '<p>' . $small_post.  '</p>';
    	echo "…";
    	echo "</br><a target=frame2 href='" . $link . "'>Read More</a>";
    	echo "</div>";
    }
    ?>
  </div>
  </div>
  <div><p>This site is under development. Wonderbolt Radio is a proud partner of PonyvilleLive! The webmaster for this site is Dusk <a href=mailto:dusk@dusky.horse>dusk@dusky.horse</a></p>
</div>

</html>
