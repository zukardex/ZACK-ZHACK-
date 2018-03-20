<?php

include '../head.php';
?>
<br>
<br>
<br>
<center> <form method="GET">
<label>URL for pinging: <input type="text" name="url" required  /></label><br />
<input type="submit" name="submit" value="Ping" align="center" style="margin-left: 50px; font-size: 15px;"/>

</form>
<table border="7px">
<th> Result </th>
<td>
<?php

if( isset($_GET['url'])){
	$url = $_GET['url'];
	echo shell_exec("ping $url");
}
?>
</td>
</table>
</center>