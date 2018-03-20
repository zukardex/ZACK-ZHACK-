<?php
include "../head.php";

$store= "s_xss_var";
//Storing data
if(isset($_POST['post']) AND $_POST['post'] !== NULL){

$f= fopen($store, "a");
fwrite($f, "<tr><td>" . $_SESSION['username'] . "</td><td>" . $_POST['post'] . "</td></tr>\n");
fclose($f);
}

?>
<br>
<br>
<center>
<table border="3px">
<th>User</th><th>Post</th>

<?php include "s_xss_var"; ?>
</table>
</center>
<div align="left">
<table border="5px" style="border-color: blue;" caption="Login Form" colspan="12px">
<tr style="font-size:20px;"><th>Post Your answer</tr>
<td>
<form method="POST">
<label>Question:<b> Who is known as 'The Father of Internet' ?</b></label><br />
<label>Your answer: <input type="text" name="post" required width="50px" height="20px"/></label><br />
<input type="submit" name="submit" value="Post your Answer" align="center" style="margin-left: 50px; font-size: 15px;"/>

</form></td>
</th>
</table>
</div>