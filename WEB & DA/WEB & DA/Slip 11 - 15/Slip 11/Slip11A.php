<html>
<head>
    <title>Student Info</title>
    <style>
        #studentName 
        {
            font-size: 14px;
        }
    </style>

    <script>
    function changeStyle() 
    {
        var name = document.getElementById("studentName").value;
        var textInput = document.getElementById("studentName");

        if (name.trim() !== "") 
        {
            textInput.style.color = "red";
            textInput.style.fontSize = "18px";
        } 
        else 
        {
            var image = document.getElementById("image");
            image.style.width = "200px"; 
        }
    }

    function resetStyle() 
    {
        var textInput = document.getElementById("studentName");
        textInput.style.color = ""; // Reset font color
        textInput.style.fontSize = "14px"; // Reset font size
    }
    </script>
</head>

<body onload="resetStyle()">
    <label for="studentName">Enter student name:</label>
    <input type="text" id="studentName" onblur="changeStyle()" onmouseover="changeSize()" onmouseup="resetSize()">
    <br><br>
    <img id="image" src="https://via.placeholder.com/200" alt="Placeholder Image">
</body>

</html>