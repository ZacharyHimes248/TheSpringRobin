<?php
	if(isset($_GET['error']))
	{
		if($_GET['error'] == "emptyfields")
		{
			echo '<p class= "signuperror"> Fill all fields!</p>';
		}
		else if($_GET['error'] == "invaliduidmail")
		{
			echo '<p class= "signuperror"> Invalid username and e-mail!</p>';
		}
		else if($_GET['error'] == "invalidmail")
		{
			echo '<p class= "signuperror"> Invalid e-mail!</p>';
		}
		else if($_GET['error'] == "passwordcheck")
		{
			echo '<p class= "signuperror">Your passwords do not match!</p>';
		}
		else if($_GET['error'] == "usertaken")
		{
			echo '<p class= "signuperror"> Username is already taken.</p>';
		}
		else if(($_GET["signup"] == "success"))
		{
			echo '<p class= "signupsuccess"> Signup successful!</p>';
		}
	}
	
	?>