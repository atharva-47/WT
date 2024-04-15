<?php
    function array_to_xml($array, &$xml) 
    {
        foreach($array as $key => $value) 
        {
            if(is_array($value)) 
            {
                if(!is_numeric($key))
                {
                    $subnode = $xml->addChild("$key");
                    array_to_xml($value, $subnode);
                } 
                else
                {
                    $subnode = $xml->addChild("item$key");
                    array_to_xml($value, $subnode);
                }
            } 
            else 
            {
                $xml->addChild("$key",htmlspecialchars("$value"));
            }
        }
    }

    $students = array(
        array(
            'roll_no' => 101,
            'name' => 'John Doe',
            'address' => '123 Main St',
            'college' => 'ABC College',
            'course' => 'Engineering'
        ),
        array(
            'roll_no' => 102,
            'name' => 'Alice Smith',
            'address' => '456 Elm St',
            'college' => 'XYZ College',
            'course' => 'Computer Science'
        ),
        array(
            'roll_no' => 103,
            'name' => 'Bob Johnson',
            'address' => '789 Oak St',
            'college' => 'DEF College',
            'course' => 'Engineering'
        ),
        array(
            'roll_no' => 104,
            'name' => 'Emily Brown',
            'address' => '321 Pine St',
            'college' => 'GHI College',
            'course' => 'Mathematics'
        )
    );
    $xml = new SimpleXMLElement('<students/>');

    array_to_xml($students, $xml);

    $xmlFile = 'students.xml';
    $xml->asXML($xmlFile);

    echo "XML file created successfully: $xmlFile<br><br>";

    $course = isset($_GET['course']) ? $_GET['course'] : '';

    if (!empty($course)) 
    {
        echo "<h2>Students Details for Course: $course</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Roll No</th><th>Name</th><th>Address</th><th>College</th><th>Course</th></tr>";
        foreach ($students as $student) {
            if ($student['course'] == $course) 
            {
                echo "<tr>";
                echo "<td>{$student['roll_no']}</td>";
                echo "<td>{$student['name']}</td>";
                echo "<td>{$student['address']}</td>";
                echo "<td>{$student['college']}</td>";
                echo "<td>{$student['course']}</td>";
                echo "</tr>";
            }
        }
        echo "</table>";
    }
?>