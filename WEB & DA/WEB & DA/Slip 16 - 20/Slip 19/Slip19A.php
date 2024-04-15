<html>
    <head>
        <title>User Login</title>
        <script>
            function validateForm() 
            {
                var username = document.forms["loginForm"]["username"].value;
                var password = document.forms["loginForm"]["password"].value;
                
                if (username.trim() === "") 
                {
                    alert("Please enter your username.");
                    return false;
                }
                if (password.trim() === "") 
                {
                    alert("Please enter your password.");
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body>
        <h2>User Login</h2>
        <form name="loginForm" onsubmit="return validateForm()">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            
            <button type="submit">Login</button>
        </form>
    </body>
</html>
