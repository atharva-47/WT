<html>
<head>
	<title>Membership Form</title>
</head>

<body>
	<center>
	<form method="POST">
	Enter USERNAME: <input type="text" name="user" id="username"><br>
	Enter PASSWORD: <input type="password" name="pwd" id="password"><br><br>
	<center>
	<input type="submit" value="VALIDATE" onclick="validate_form()">
	</center>
	</center>
	</form>
	
	<script>
		function validate_form()
		{
			var username=document.getElementById("username").value;
			var password=document.getElementById("password").value;	
			if(username=="user" && password=="pwd")
			{
				alert("Authenticated");
			}
			else
			{
				alert("Invalid Username or Password");
			}
		}
	</script>
</body>
</html>
