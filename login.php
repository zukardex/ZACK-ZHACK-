<?php

if(isset($_POST['submit']) && is_numeric($_POST['pass'])){
	//submitted
	if(!($_POST['user']=="") && !($_POST['pass']=="")){
		if(!((int)$_POST['pass'] < 0)){
		//check passed
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		if(file_exists("user/$user" . ".php")){
			//user exists
			$file = fopen("user/$user" . ".php","r") or die("User not found");
			$data = fread($file, filesize("user/$user" . ".php")) or die("Can't read\n");
			$intd = (int)$data;
			if($intd - 20031001 == $pass){
				//password matches
				echo "Login Successful";
				session_start();
				$_SESSION['username'] = $user;
				$_SESSION['IP'] = $_SERVER['REMOTE_ADDR'];
				$_SESSION['UA'] = $_SERVER['HTTP_USER_AGENT'];
				echo ' <script> document.location="home.php"; </script>';
			}else{
				//password do not match
				echo "Username or password do not match or account not found";
			}
			fclose($file);
		}else{
			//user not exists
			echo "Username or password do not match or account not found";
		}
		}
	}else{
		die("Give a valid value please");
	}
	//login log
	$input= array('Username' => $_POST['user'], 'Password' => $_POST['pass'], 'IP' => $_SERVER['REMOTE_ADDR'], 'UA' => $_SERVER['HTTP_USER_AGENT'], 'Time' => time());
	$json= json_encode($input);
	$jsonf = fopen("user/system/logger.php", "a");
	$jsond= fread($jsonf, filesize("user/system/logger.php"));
	fwrite($jsonf, $jsond . $json . "\n");
	fclose($jsonf);
}
include "black_checker.php";
if(isset($_GET['epage'])){
	echo '<center><font color="red">You must login first to access your home page</font></center>';
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
<form method="POST">
<label>Username: <input type="text" name="user" required  /></label><br />
<label>Password: <input type="number" name="pass" required /></label><br />
<input type="submit" name="submit" value="Login" align="center" style="margin-left: 50px; font-size: 15px;"/>

</form>
<tr>don't have an account? <a href="register.php"> Create a new one</a></tr></td>
</th>
</table>
</center>
<noscript>
This site requires JavaScript to be enabled in the browser
</noscript>