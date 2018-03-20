
<?php
include '../head.php';

//UserAgent Blacklist check

$blackf = fopen("banned_ua.html","r");
$blackuas = fread($blackf, filesize("banned_ua.html"));
$myua= $_SERVER['HTTP_USER_AGENT'];

if (strpos($blackuas,$myua) !== false) {
	echo '<script> document.location="black_ua.html";</script>';
}
fclose($blackf);

//UserAgent Adding to blacklist

if (isset($_GET['ban']) && $_GET['ban']=="true"){
	$file= fopen("banned_ua.html", "a");
	fwrite($file, $_SERVER['HTTP_USER_AGENT'] . "\n");
	fclose($file);
	echo '<script>document.location="ua_spoof.php";</script>';
}


?>
<br><br>
Click <button onClick="ban();">here</button> to ban your User Agent from this webpage
<script>
function ban(){
	document.location="ua_spoof.php?ban=true";
}
</script>