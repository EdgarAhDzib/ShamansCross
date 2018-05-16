<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="shaman.css">
	<style type="text/css">
		div {
			padding: 15px;
		}
		footer {
			text-align: center;
		}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<title id="pageName"></title>
</head>
<!-- Start of StatCounter Code -->
<script type="text/javascript" language="javascript">
var sc_project=9557355; 
var sc_invisible=1; 
var sc_partition=20; 
var sc_security="93e14c2c"; 
</script>

<script type="text/javascript" language="javascript" src="http://www.statcounter.com/counter/counter.js"></script><noscript><a href="http://www.statcounter.com/" target="_blank"><img src="http://c21.statcounter.com/counter.php?sc_project=2243800&amp;java=0&amp;security=4669e2d3&amp;invisible=0" alt="php hit counter" border="0"></a> </noscript>
<!-- End of StatCounter Code -->
<body>
<div class="container">
	<header>
		<div class="row" style="text-align:center;">
			<div class="col-xs-12 col-sm-3 col-md-3">
			<a href="http://shamanscross.com?p=2" id="2" class="link">HOME</a>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3">
			<a href="http://shamanscross.com?p=1" id="1" class="link">BUY THE BOOK</a>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3">
			<a href="http://shamanscross.com?p=4" id="4" class="link">ABOUT</a>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3">
			<a href="http://shamanscross.com?p=3" id="3" class="link">LINKS</a>
			</div>
		</div>
	</header>
	<div class="row">
		<div class="col-xs-12 col-sm-3">
		<ul>
		<li><a href="http://shamanscross.com?p=5" id="5" class="link">Preview Excerpts</a></li>
			<ul id="preview">
				<li><a href="http://shamanscross.com?p=11" id="11" class="link">The Tlaloc T-Shirt</a></li>
				<li><a href="http://shamanscross.com?p=12" id="12" class="link">The Espiritista Healer</a></li>
				<li><a href="http://shamanscross.com?p=13" id="13" class="link">Devil</a></li>
				<li><a href="http://shamanscross.com?p=14" id="14" class="link">City of Lightning: Taj&iacute;n</a></li>
				<li><a href="http://shamanscross.com?p=15" id="15" class="link">Eclipse</a></li>
				<li><a href="http://shamanscross.com?p=16" id="16" class="link">The Veracruz Aquarium</a></li>
			</ul>
		<li><a href="http://shamanscross.com?p=6" id="6" class="link">Deleted Scenes</a></li>
			<ul id="deleted">
				<li><a href="http://shamanscross.com?p=17" id="17" class="link">Museum of the Mummies</a></li>
				<li><a href="http://shamanscross.com?p=18" id="18" class="link">A Tale of the Grandma Vampire</a></li>
				<li><a href="http://shamanscross.com?p=19" id="19" class="link">To Sprout With Spirit</a></li>
				<li><a href="http://shamanscross.com?p=20" id="20" class="link">Speaker for the Gods:<br>The Mekh&aacute; Godmother</a></li>
				<li><a href="http://shamanscross.com?p=21" id="21" class="link">Holidays in the Highlands:<br>Quer&eacute;taro and Guanajuato</a></li>
				<li><a href="http://shamanscross.com?p=22" id="22" class="link">The Alternative Prologue</a></li>
				<li><a href="http://shamanscross.com?p=23" id="23" class="link">The Alternative Epilogue</a></li>
			</ul>
		<li><a href="http://shamanscross.com?p=7" id="7" class="link">Glossary and Pronunciation</a></li>
		<li><a href="http://shamanscross.com?p=8" id="8" class="link">Media</a></li>
		<li><a href="http://shamanscross.com?p=9" id="9" class="link">Map</a></li>
		<li><a href="http://shamanscross.com?p=10" id="10" class="link">Special Topics</a></li>
			<ul id="topics">
				<li><a href="http://shamanscross.com?p=24" id="24" class="link">Shamanism: The Basics</a></li>
				<li><a href="http://shamanscross.com?p=25" id="25" class="link">The Mother Goddess</a></li>
				<li><a href="http://shamanscross.com?p=26" id="26" class="link">The Huasteca: Lands and Peoples</a></li>
			</ul>
		<li><a href="http://shamanscross.com?p=28" id="28" class="link">Music</a></li>
		</ul>
		</div>
		<div id="content" class="col-xs-12 col-sm-9">
		<?php
			include_once("../above/configuration.php");
			
			$page = $_GET["p"];
			if ($page != NULL) {
				
				$sql = $database->prepare("SELECT * FROM shaman_pages WHERE entity_id=?");
				$sql->execute(array($page));
				while ($shaman = $sql->fetch(PDO::FETCH_OBJ)) {
					echo "<h1>".$shaman->title."</h1><br clear='all'>".$shaman->body_value;
				}
			} else {				
				$sql = $database->prepare("SELECT * FROM shaman_pages WHERE entity_id=?");
				$sql->execute(array(2));
				while ($shaman = $sql->fetch(PDO::FETCH_OBJ)) {
					echo "<h1>".$shaman->title."</h1><br clear='all'>".$shaman->body_value;
				}
			}
		?>
		</div>
	</div>
	<div class="row" style="height:100%;">
		<div class="col-xs-12 col-sm-4">
		<a href="https://www.facebook.com/ShamansCross/" target="_blank" class="media" style="position:relative; top:10px;"><img src="fb-likebutton-online-100.png"></a>
		</div>
		<div class="col-xs-12 col-sm-4">
		<a href="https://www.youtube.com/channel/UCju74A_kAhFnnyPjq3JXRBQ" target="_blank" class="media"><img src="YouTube-logo-full_color.png" width="120"></a>
		</div>
		<div class="col-xs-12 col-sm-4">
		<a href="https://twitter.com/EdgarTlamatini" target="_blank" class="media"><img src="twitter-100.png"></a>
		</div>
	</div>
	<footer>
		<div class="row">
		<h5><a href="mailto:ixmati@comcast.net">Contact Edgar!</a></h5>
		<h5>All text and media copyright &#0169;2016 Edgar Martin del Campo.<br>
		Updated August 8, 2016 with the Bootstrap setup.</h5>
		<h6>Powered by Bootstrap.</h6>
		</div>
	</footer>
</div>
<?php
	if ($page != NULL) {				
		$sql = $database->prepare("SELECT * FROM shaman_pages WHERE entity_id=?");
		$sql->execute(array($page));
		while ($cross = $sql->fetch(PDO::FETCH_OBJ)) {
			$categ = $cross->node;
			echo "<script>
var pageTitle = document.getElementById(\"pageName\");
pageTitle.innerHTML = \"".$cross->title."\";
var deleted = document.getElementById(\"deleted\");
var preview = document.getElementById(\"preview\");
var topics = document.getElementById(\"topics\");
";
			switch ($categ) {
				case "preview":
echo "while (deleted.firstChild) {deleted.removeChild(deleted.firstChild);}
while (topics.firstChild) {topics.removeChild(topics.firstChild);}";
				break;
				case "deleted":
echo "while (preview.firstChild) {preview.removeChild(preview.firstChild);}
while (topics.firstChild) {topics.removeChild(topics.firstChild);}";
				break;
				case "topics":
echo "while (preview.firstChild) {preview.removeChild(preview.firstChild);}
while (deleted.firstChild) {deleted.removeChild(deleted.firstChild);}";
				break;
				default:
echo "while (preview.firstChild) {preview.removeChild(preview.firstChild);}
while (deleted.firstChild) {deleted.removeChild(deleted.firstChild);}
while (topics.firstChild) {topics.removeChild(topics.firstChild);}";
			}
			echo "</script>";
			}
		} else {				
			$sql = $database->prepare("SELECT * FROM shaman_pages WHERE entity_id=?");
			$sql->execute(array(2));
			while ($cross = $sql->fetch(PDO::FETCH_OBJ)) {
				echo "<script>
					var pageTitle = document.getElementById(\"pageName\");
					pageTitle.innerHTML = \"".$cross->title."\";
var pageTitle = document.getElementById(\"pageName\");
pageTitle.innerHTML = \"".$cross->title."\";
var deleted = document.getElementById(\"deleted\");
var preview = document.getElementById(\"preview\");
var topics = document.getElementById(\"topics\");
while (preview.firstChild) {preview.removeChild(preview.firstChild);}
while (deleted.firstChild) {deleted.removeChild(deleted.firstChild);}
while (topics.firstChild) {topics.removeChild(topics.firstChild);}
				</script>";
				}
		}
?>
</body>
</html>