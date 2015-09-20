<html>
<head>
<title>Wonderbolt Radio</title>
</head>
<style>
div {
  border-radius: 15px 15px;
  width: 55%;
  margin: 10px;
  border: none;
  padding: 5px;
  background: rgba(0,0,0,.7);
  overflow: visible;
}
body {
  background-image: url("/bg.png");
  background-position: top;
  background-repeat: no-repeat;
  background-size: 100%;
}
h1 {
  font-family: serif;
  color: white;
}
h2 {
  font-family: sans-serif;
  color: white
}
#logo {
  border-radius: 15px 15px;
  width: 75px;
  height: 75px;
  float: left;
  overflow: auto;
  border: none;
  background: rgba(0,0,0,0.0);
}
#player {
  border-radius: 30px 30px;
  border: none;
  height: 150px
  position: relative;
  width: 35%;
  background: rgba(0,0,0,0.0);
  margin: 10px;
  overflow: visible;
}
#Logotext{
  border: none;
  position: relative;
  background: rgba(0,0,0,0.0);

}
#logoarea {
  padding-bottom: 10px;
  }
#tumblr {
  width: 90%;
  padding: 10px;
  background: rgba(0,0,0,0.0);
}
h4 {
  color: lightgrey;
  font-family: monospace;
}
p {
  color: lightblue;
}
a {
  color: gold;
}
a:hover {
  color: skyblue;
}
#tumblrpost {
 width: 95%;
 background: rgba(0,0,0,0.4);
}
</style>
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
