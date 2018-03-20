<?php

//IP Blacklist check

$blackf = fopen("user/system/black_ips.php","r");
$blackips = fread($blackf, filesize("user/system/black_ips.php"));
if(strpos($blackips, $_SERVER['REMOTE_ADDR']) !==false){
	echo '<script> document.location="black.html";</script>';
}
fclose($blackf);

?>