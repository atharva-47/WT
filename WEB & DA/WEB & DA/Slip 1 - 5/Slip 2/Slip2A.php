<html>
<head>
    <title>Change Preferences</title>
</head>
<body>
    <h2>Change Preferences</h2>
    <form action="set_preferences.php" method="post">
        <label for="font_style">Font Style:</label>
        <select name="font_style" id="font_style">
            <option value="Arial">Arial</option>
            <option value="Verdana">Verdana</option>
            <option value="Times New Roman">Times New Roman</option>
        </select><br><br>

        <label for="font_size">Font Size:</label>
        <select name="font_size" id="font_size">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select><br><br>

        <label for="font_color">Font Color:</label>
        <input type="color" name="font_color" id="font_color"><br><br>

        <label for="bg_color">Background Color:</label>
        <input type="color" name="bg_color" id="bg_color"><br><br>

        <input type="submit" value="Save Preferences">
    </form>
</body>
</html>

