<?php

if(isset($_POST['submit'])){
	
	if(isset($_POST['user']) && isset($_POST['pass'])){
		
		//get the value
		$username = $_POST['user']; 
		$password = $_POST['pass'];
	
			//check the input
			if(!($username =="") && !($password =="")){
				//checks if user exists
				
				if(! (filter_var($password, FILTER_VALIDATE_INT) == FALSE)){
			
					if(strpos($password, "-") ==FALSE && $password>0== TRUE){
				
				
				if(!(file_exists("user/" . $username . ".php"))){
					//password is not empty
					$file= fopen("user/system/register.php", "a");
					//converts to array
					$input = array('Username' => $username, 'Password'=> $password, 'IP'=> $_SERVER['REMOTE_ADDR'], 'UA'=> $_SERVER['HTTP_USER_AGENT']);
					$json = json_encode($input);
					$data = fread($file, filesize("user/register.php")+1);
					print $data;
					fwrite($file, $data . $json . "\n");
					fclose($file);
				
					//user file
					$ufolder= fopen("user/$username.php","a");
					fwrite($ufolder, $password + 20031001);
					fclose($ufolder);
					echo 'Your account has been successfully created. You can login <a href="login.php">here</a>';
					
				}else{
					//the username is already taken
					die("The username you selected is already taken.");
				}
					}else{
						//strpos of -ve value
						die("The password you had selected is not valid");
					}
				//Is an integer
				}
			}
	}
}
include 'black_checker.php';
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
<table border="5px" style="border-color: blue;" caption="Registration Form" colspan="12px">
<tr style="font-size:20px;"><th>Registration Form</tr>
<td>
<form method="POST">
<label>Username: <input type="text" name="user" required autofocus /></label><br />
<label>Password: <input type="number" name="pass" required /></label><br />
<input type="submit" name="submit" value="Register" align="center" style="margin-left: 50px; font-size: 15px;"/>
</form></td>
</th>
</table>
</center>
<noscript>
This site requires JavaScript to be enabled in the browser
</noscript>