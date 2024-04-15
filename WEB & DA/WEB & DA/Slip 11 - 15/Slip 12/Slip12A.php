<html>
    <head>
        <title>Contact Details</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() 
            {
                $("#printButton").click(function() 
                {
                    $.ajax(
                        {
                            url: 'contact.dat',
                            dataType: 'text',
                            success: function(data) 
                            {
                                var rows = data.split('\n');
                                var table = '<table border="1"><tr><th>Sr No</th><th>Name</th><th>Residence Number</th><th>Mobile Number</th><th>Address</th></tr>';
                                for (var i = 0; i < rows.length; i++) 
                                {
                                    var cells = rows[i].split(',');
                                    table += '<tr>';
                                    for (var j = 0; j < cells.length; j++) 
                                    {
                                        table += '<td>' + cells[j] + '</td>';
                                    }
                                    table += '</tr>';
                                }
                                table += '</table>';
                                $('#output').html(table);
                            }
                        }
                    );
                });
            });
        </script>
    </head>
            
    <body>
        <button id="printButton">Print Contact Details</button>
        <div id="output"></div>
    </body>
</html>
