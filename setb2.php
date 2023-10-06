<?php

$s = $_REQUEST['str'];
$sep = $_REQUEST['sep'];
$sep2 = $_REQUEST['sep2'];
$op = $_REQUEST['op'];
echo "Given string: $s";
echo"<br>";

switch($op){
    case 1: $a = explode($sep,$s);
            foreach($a as $t)
                echo "$t.<br>";
            break;

    case 2: $b = str_replace($sep,$sep2,$s);
            echo $b;
            break;

    case 3: //$a = explode($sep,$s);
            //$index = count($a)-1;
            //echo "Last word in a given string: ".$a[$index];
            //break;
            
            $a = strstr($s,' ');
            echo $a;
}


?>