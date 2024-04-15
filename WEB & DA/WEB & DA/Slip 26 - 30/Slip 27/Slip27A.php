<html>
    <head>
        <title>Voter Registration</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() 
            {
                $('#submitForm').submit(function(e) 
                {
                    e.preventDefault();
                    var name = $('#name').val();
                    var age = $('#age').val();
                    var nationality = $('#nationality').val();
                    
                    $.ajax(
                    {
                        type: 'POST',
                        url: 'validate_voter.php',
                        data: 
                        {
                            name: name,
                            age: age,
                            nationality: nationality
                        },
                        success: function(response) 
                        {
                            alert(response);
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <h2>Voter Registration</h2>
        <form id="submitForm">
            <label for="name">Name (Upper Case):</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="age">Age (>= 18):</label>
            <input type="number" id="age" name="age" min="18" required><br><br>
            
            <label for="nationality">Nationality (Indian):</label>
            <input type="text" id="nationality" name="nationality" required><br><br>
            
            <button type="submit">Submit</button>
        </form>
    </body>
</html>