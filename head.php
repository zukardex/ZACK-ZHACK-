<style>
<!-- Make visibility =visible or invisible for dropdowns-->
ul{
	list-style-type: none;
	margin:0;
	padding:0;
	display: block;
	background: rgba(1,2,3,0.3);
}
li a{
	color: rgba(03,15,01,0.7);
	background: rgba(55,00,13,0.2);
	font-size: 150%;
	text-decoration: none;
	margin:5px;
	overflow: hidden;
}
li a:hover{
	background:blue;
}
li{
	display: inline;
	float:left;
}
div{
	margin-left:40px;

}
</style>
<center>
<h1 style="font-size:200%; padding:5px;  font-weight:bold;"><u>ZUKAR HACKERS ACADEMY</u></h1>
<br><h6>Logged in as : <?php session_start(); if(isset($_SESSION['username'])){echo $_SESSION['username']; }else{ echo ' <script>document.location="login.php?epage=home.php"; </script>'; } ?> </h6>
</center>
<!-- Navigation Bar-->
<nav> 
<ul>
<li class="home"><a href="#">Home </a></li>
<li class="vuln"><a href="#">Vulnerabilities </a></li>
<li class="contact"><a href="#">Contact</a></li>
</ul>
</nav><br>
<noscript>
This site requires JavaScript to be enabled in your browser
</noscript>