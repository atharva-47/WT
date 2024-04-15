<html>
    <head>
        <title>Search Suggestions</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() 
            {
                $('#searchInput').keyup(function() 
                {
                    var query = $(this).val();
                    if (query !== '') 
                    {
                        $.ajax(
                        {
                            url: 'Suggestions.php',
                            type: 'POST',
                            data: { query: query },
                            dataType: 'json',
                            success: function(data) 
                            {
                                var suggestionsHtml = '';
                                for (var i = 0; i < data.length; i++) 
                                {
                                    suggestionsHtml += '<div>' + data[i] + '</div>';
                                }
                                $('#suggestions').html(suggestionsHtml);
                            }
                        });
                    } 
                    else 
                    {
                        $('#suggestions').empty();
                    }
                });
            });
        </script>
    </head>
    <body>
        <label for="searchInput">Search: </label>
        <input type="text" id="searchInput">
        <div id="suggestions"></div>
    </body>
</html>
