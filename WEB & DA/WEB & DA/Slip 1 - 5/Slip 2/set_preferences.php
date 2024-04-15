<?php

setcookie("font_style", $_POST['font_style']);
setcookie("font_size", $_POST['font_size']);
setcookie("font_color", $_POST['font_color']);
setcookie("bg_color", $_POST['bg_color']);

header("Location: display_preferences.php")
?>
