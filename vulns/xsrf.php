<?php
include "../head.php";
if(isset($_GET['name'])){
	//A value is detected
	if(! $_GET['name'] == NULL){
		//Value is not empty
		$name= $_GET['name'];
		$old_n = $_SESSION['username'];
		$_SESSION['username'] = $name;
		echo "<br><br>Your old name was <b>$old_n</b> and now your name is <b>$name</b>";
	}
}
?>

<style>
input[type=text], input[type=number]{
	box-sizing:border-box;
	border: 2px solid green;
	border-radius:4px;
	border-bottom: 2px solid blue;
	  -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
input[type=text]:focus, input[type=number]:focus {
    background-color: lightblue;
	 width:100%;
}
</style>
<center>
<table border="5px" style="border-color: blue;" caption="Login Form" colspan="12px">
<tr style="font-size:20px;"><th>Change your username</tr>
<td>
<form method="GET">
<label>New name: <input type="text" name="name" required  /></label><br />
<input type="submit" name="submit" value="Change Username" align="center" style="margin-left: 50px; font-size: 15px;"/>
</form>
</th>
</table>
</center>
<noscript>
This site requires JavaScript to be enabled in the browser
</noscript>
NOTE: This will not change your login details. This will only modify the session variables.