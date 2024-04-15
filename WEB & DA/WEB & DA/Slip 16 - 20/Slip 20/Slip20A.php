<?php
    $students = array(
        array(
            'id' => 1,
            'name' => 'Abc Efg',
            'age' => 20,
            'grade' => 'A'
        ),
        array(
            'id' => 2,
            'name' => 'Xyz Abc',
            'age' => 21,
            'grade' => 'B'
        ),
        array(
            'id' => 3,
            'name' => 'Qwerty Xyz',
            'age' => 22,
            'grade' => 'C'
        ),
        array(
            'id' => 4,
            'name' => 'Xyz Azerty',
            'age' => 19,
            'grade' => 'A'
        ),
        array(
            'id' => 5,
            'name' => 'Abc Rst',
            'age' => 20,
            'grade' => 'B'
        )
    );
    $xml = new DOMDocument('1.0', 'UTF-8');
    $xml->formatOutput = true;
    $root = $xml->createElement('students');
    $xml->appendChild($root);

    foreach ($students as $studentData) 
    {
        $student = $xml->createElement('student');

        foreach ($studentData as $key => $value) 
        {
            $element = $xml->createElement($key, $value);
            $student->appendChild($element);
        }

        $root->appendChild($student);
    }

    $xmlFile = 'students.xml';
    $xml->save($xmlFile);

    echo "XML file created successfully: $xmlFile";
?>
