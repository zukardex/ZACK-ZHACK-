<?php
include '../head.php';
// adding to blacklist
if(isset($_GET['ban'])){
	$file= fopen("bips","a");
	$data= fread($file, filesize("bips"));
	fwrite($file, $data . $_SERVER['REMOTE_ADDR'] . "\n");
	fclose($file);
	//refresh 
	header("URL: ip_spoof.php") or die("<script> document.location='ip_spoof.php';</script>");
	
}
// Getting black ips and redirects if black ip tries to access
$f= fopen("bips", "r");
$blps = fread($f, filesize("bips"));
fclose($f);
$myip = $_SERVER['REMOTE_ADDR'];
if(strpos($blps, $myip) !==false){
	echo '<script>window.location="blackip.html"</script>';
}
?>
<center>
<br><br>

Click <button onClick="ban();">here</button> to blacklist your IP.
<br><i>NOTE: You can also bypass this IP filtering without using any proxy or VPN</i>
<br><i>HINT: Since you are using ZACK on your localhost, your IP can be changed to a public IP from your local IP when you connects to the internet and vice versa</i>
</center>
<script>
function ban(){
	document.location="ip_spoof.php?ban=true";
}
</script>