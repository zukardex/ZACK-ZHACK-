<?php
include "../head.php";
$pass = "password123";
?>
<br>
<br>
<script>
function validate(){
	var pass= document.getElementById("input");
		if(pass.value == "<?php echo $pass; ?>"){
			document.write("You have been successfully logged in ");
			alert("Logged in");
		}
}
</script>
<center>
<input type="text" id="input" placeholder="Type your password here" required/><br />
<input type="submit" onClick="validate()" name="Login"/><br />

NOTICE: The password is saved in $pass PHP variable. But the validation is made by JavaScript.
<br />
HINT: PHP is server side and JavaScript is Client-side script. If a server side value is given to JS, the value in its plain form must be reached the browser.
</center>