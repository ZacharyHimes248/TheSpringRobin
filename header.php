<?php
session_start();
?>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link href="login.css" rel="stylesheet" type="text/css">
<link href="../includes/signup&signin.css" rel="stylesheet" type="text/css">
</head>
<div class="box">

	<div class="img">
		<img src="../SiteImages/cabinLogo.png" width="356" height="223" alt=""/>
	</div>



	<div class="login">
    <?php
	$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if(strpos($fullUrl, "error=emptyfields") == true)
	{
		echo "<p class=error>Please complete all the fields</p>";
	}
	elseif(strpos($fullUrl, "error=incorrect") == true)
	{
		echo "<p class=error>Inncorrect Username or Password.</p>";
	}
	elseif(strpos($fullUrl, "error=invalidemail") == true)
	{
		echo "<p class=error>Please Enter a Valid Email Adress.</p>";
	}
	?>
		<form action="../includes/login.inc.php" method="post">
			<input type="text" id="username" name="mailuid" placeholder="Username/ E-mail">
			<input type="password" id="pass" name="pwd" placeholder="Password">
			<button class="bttn" type="submit" name="login" value="Login">Login</button>
		</form>
		<button id="signup" type="submit"><a id="signup" href="signup.php">Create a new account >></a></button>
		<form action="../includes/signup.inc.php"></form>
		<!-- <button class="logout" type="submit" name="logout-submit">Logout</button> -->
	</div>



</div>

</html>
