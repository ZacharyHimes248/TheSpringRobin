<?php
if(isset($_POST['login']))
{
    session_start();
	require 'dbh.inc.php';

	$mailuid = $_POST['mailuid'];
	$password = $_POST['pwd'];

	if(empty($mailuid) || empty($password))
	{
		header("Location: ../header.php?error=emptyfields");
		exit();
	}
	else
	{
		$sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql))
		{
			header("Location: ../header.php?error=sqlerror");
			exit();
		}

		else
		{
			mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if($row = mysqli_fetch_assoc($result))
			{
				$pwdCheck = password_verify($password, $row['pwdUsers']);
				if($pwdCheck == false)
				{
					header("Location: ../header.php?error=incorrect");
					exit();
				}
			else if($pwdCheck == true)
				{
					session_start();
					$_SESSION['userId'] = $row['idUsers'];
					$_SESSION['userUId'] = $row['uidUsers'];
					header("Location: ../HomePage.php?login=success");
					exit();
				}
			}
			else
			{
				header("Location: ../header.php?error=incorrect");
				exit();
			}
		}
	}

}
else
{
	header("Location: ../header.php?error=incorrect");
			exit();

}
?>
