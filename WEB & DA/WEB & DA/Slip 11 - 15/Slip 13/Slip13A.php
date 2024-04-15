<html>
    <head>
        <title>Greetings</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() 
            {
                $('#nameInput').keyup(function() 
                {
                    var name = $(this).val();
                    if (name === '') 
                    {
                        $('#response').text('Stranger, please tell me your name!');
                    } 
                    else if (name === 'Rohit' || name === 'Virat' || name === 'Dhoni' || name === 'Ashwin' || name === 'Harbhajan') 
                    {
                        $('#response').text('Hello, master!');
                    } 
                    else 
                    {
                        $('#response').text("I don't know you!");
                    }
                });
            });
        </script>
    </head> 

    <body>
        <label for="nameInput">Enter your name: </label>
        <input type="text" id="nameInput">
        <div id="response"></div>
    </body>
</html>
