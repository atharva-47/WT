<html>
    <head>
        <title>Student Registration</title>
        <script>
            function showMessage() 
            {
                alert("Hello, Good Morning!");
            }
        </script>
    </head>
    <body onload="showMessage()">
        <h1>Welcome to Student Registration</h1>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required><br><br>
            
            <label for="course">Course:</label>
            <select id="course" name="course" required>
                <option value="">Select Course</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Engineering">Engineering</option>
                <option value="Mathematics">Mathematics</option>
            </select><br><br>
            
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
