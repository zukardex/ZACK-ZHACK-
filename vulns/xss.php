<?php
if(isset($_GET['method']) &&$_GET['method'] == "post"){
	$mc = "post";
	if(isset($_POST['user'])){
		$user= $_POST['user'];
		echo "<center> Your name is: $user </center>";
	}
}
if(isset($_GET['method']) &&$_GET['method'] == "get"){
	$mc= "get";
	if(isset($_GET['user'])){
		$user= $_GET['user'];
		echo "<center> Your name is: $user </center>";
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
<header style= "color:green; font-weight: bold; text-decoration: underlined; padding: 30px; font-size: 53px; border-color: red;">ZUKAR Hacking Academy</header>
<table border="5px" style="border-color: blue;" caption="Login Form" colspan="12px">
<tr style="font-size:20px;"><th>Login Form</tr>
<td>
<?php 
if(isset($_GET['method']) && $_GET['method'] == "post"){
echo '<form method="POST">';
}else{
	echo '<form method="GET">';
}
?>
<label>Username: <input type="text" name="user" required  /></label><br />
<input type="submit" name="method" value="<?php echo $mc; ?>" align="center" style="margin-left: 50px; font-size: 15px;"/>

</form>
</td>
</th>
</table>
</center>
<noscript>
This site requires JavaScript to be enabled in the browser
</noscript>