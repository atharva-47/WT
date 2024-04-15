<?php
	session_start();
	
	$valid_user="user123";
	$valid_pass="pass123";
	
	$entered_user=$_POST['username'];
	$entered_pass=$_POST['password'];
	
	if($entered_user==$valid_user && $entered_pass==$valid_pass)
	{
		include("new.php");
		exit();
	}
	else
	{
		if(isset($_SESSION['attempts']))
		{
			$_SESSION['attempts']++;
		}
		else
		{
			$_SESSION['attempts']=1;
		}
		if($_SESSION['attempts']>3)
		{
			echo "Attempts exceeded 3. Cannot login now.";
			exit();
		}
		include("welcome.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

