<?php
include "../head.php";
$val = rand(0,2);
echo "<br><br>";
switch($val){
	case(0):
		$f= "c_1.png";
		break;
	case(1):
		$f="c_2.png";
		break;
	case(2):
		$f= "c_3.png";
		break;
}
?>
<center>Complete the captcha to continue<br>
<img src="<?php echo "captchas/" . $f; ?>" alt="captcha" width="100px" height="100px"/>
<form method="POST">
<input type="text" name="captcha" placeholder="enter the words you see above"/><br>
<input type="submit" name="submit" value="Submit"/>
</form>
</center>
<?php
if(isset($_POST['captcha'])){
	if($_POST['captcha'] !== NULL){
		if($f= "c_1.png" && $_POST['captcha'] =="W6 8HP"){
			$s = 1;
		}else{  $s=0;}
		if($f= "c_2.png" && $_POST['captcha'] =="qGphJ"){
			$s = 1;
		}else{  $s=0;}
		if($f= "c_3.png" && $_POST['captcha'] =="Google"){
			$s = 1;
		}else{  $s=0;}
		
		//check if correct
		if($s==1){
			echo '<script> alert("You are a human"); </script>';
		}else{
			echo "You are not human";
		}
	}
}
?>