<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        $name = strtoupper($_POST['name']);
        $age = intval($_POST['age']);
        $nationality = strtoupper($_POST['nationality']);

        if ($name !== $_POST['name']) 
        {
            echo "Name should be in upper case letters only.";
            exit();
        }

        if ($age < 18) 
        {
            echo "Age should not be less than 18 years.";
            exit();
        }

        if ($nationality !== "INDIAN") 
        {
            echo "Nationality should be Indian.";
            exit();
        }

        echo "Validation successful. Voter details accepted.";
    }
?>
