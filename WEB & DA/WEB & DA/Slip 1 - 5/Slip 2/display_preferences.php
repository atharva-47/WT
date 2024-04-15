<!DOCTYPE html>
<html>
<head>
    <title>Display Preferences</title>
</head>
<body>
    <h2>Display Preferences</h2>
    
     <?php
    $font_style = isset($_COOKIE['font_style']) ? $_COOKIE['font_style'] : 'Arial';
    $font_size = isset($_COOKIE['font_size']) ? $_COOKIE['font_size'] : 'medium';
    $font_color = isset($_COOKIE['font_color']) ? $_COOKIE['font_color'] : '#000000';
    $bg_color = isset($_COOKIE['bg_color']) ? $_COOKIE['bg_color'] : '#ffffff';
    ?>
    
    <p style="font-family: <?php echo $font_style; ?>;
              font-size: <?php echo $font_size; ?>;
              color: <?php echo $font_color; ?>;
              background-color: <?php echo $bg_color; ?>;">
        
        Hello There! this is sample Text!
    </p>
    <a href="Slip2A.php">Change Preferences again :)</a>
</body>
</html>

