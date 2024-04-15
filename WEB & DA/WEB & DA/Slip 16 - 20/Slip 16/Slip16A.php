<html>
    <head>
        <title>Book Details</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() 
            {
                $('#bookSelect').change(function() 
                {
                    var selectedBook = $(this).val();
                    if (selectedBook !== '')
                    {
                        $.ajax(
                            {
                                url: 'books.xml',
                                dataType: 'xml',
                                success: function(data) 
                                {
                                    $(data).find('book').each(function() 
                                    {
                                        var title = $(this).find('title').text();
                                        if (title === selectedBook) 
                                        {
                                            var author = $(this).find('author').text();
                                            var year = $(this).find('year').text();
                                            var price = $(this).find('price').text();
                                            $('#bookDetails').html('<p>Title: ' + title + '</p>' +
                                                                '<p>Author: ' + author + '</p>' +
                                                                '<p>Year: ' + year + '</p>' +
                                                                '<p>Price: ' + price + '</p>');
                                        }
                                    });
                                }
                            });
                    } 
                    else 
                    {
                        $('#bookDetails').empty();
                    }
                });
            });
        </script>
    </head>
    <body>
        <label for="bookSelect">Select a book:</label>
        <select id="bookSelect">
            <option value="">Select Book</option>
        </select>
        <div id="bookDetails"></div>
    </body>
</html>