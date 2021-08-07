

<main>
			<link href="signupPage.css" rel="stylesheet" type="text/css">

			</head>

			<body>
						<div class="box">
							<h1>Sign up</h1>
								<div class="login">
											<form class="form-signup" action="../includes/signup.inc.php" method="post">

												<input class="input" type="text" name="uid" placeholder="Username">
													<input class="input" type="text" name="mail" placeholder="E-mail">
													<input class="input" type="password" name="pwd" placeholder="Password">
													<input class="input" type="password" name="pwd-repeat" placeholder="Confirm password">
													<br>
													<button class="button" type="submit" name="signup-submit">Sign Up </button>
											</form>
									</div>

								<?php

						$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
							if(strpos($fullUrl, "error=allFieldsEmpty") == true)
							{
								echo "<p class=error>Please fill out all fields.</p>";
								exit();
							}
							elseif(strpos($fullUrl, "error=invalidemail") == true)
							{
								echo "<p class=error>Please Enter a Valid Email Adress.</p>";
								exit();
							}
							if(strpos($fullUrl, "error=invaliduid&mail") == true)
							{
								echo "<p class=error> Invalid username, use all letters or numbers. </p>";
								exit();
							}
							if(strpos($fullUrl, "error=passwordcheck&uid") == true)
							{
								echo "<p class=error> Your Passwords do not match. </p>";
								exit();
							}
							if(strpos($fullUrl, "error=sqlerror") == true)
							{
								echo "<p class=error> Network Error please contact Admin. </p>";
								exit();
							}
							if(strpos($fullUrl, "error=usertaken&mail") == true)
							{
								echo "<p class=error> Sorry that username is already in use. </p>";
								exit();
							}
							if(strpos($fullUrl, "error=invalidEmailUid") == true)
							{
								echo "<p class=error> Invalid username & E-mail, try again. </p>";
								exit();
							}

							if(strpos($fullUrl, "signup=success") == true)
							{
								echo "<p class=success> Account created! please go to the login page to sign in. </p>";
								exit();
							}

							?>
</div>
			</body>
</main>
