<?php
    $books = array(
        'Yoga' => array(
            array(
                'title' => 'Yoga for Beginners',
                'author' => 'Xyz Abc',
                'price' => '$10.99'
            ),
            array(
                'title' => 'The Power of Now',
                'author' => 'Abc Xyz',
                'price' => '$12.50'
            )
        ),
        'Story' => array(
            array(
                'title' => 'Harry Potter and the Sorcerer\'s Stone',
                'author' => 'J.K. Rowling',
                'price' => '$15.99'
            ),
            array(
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'price' => '$9.99'
            )
        ),
        'Technical' => array(
            array(
                'title' => 'Clean Code',
                'author' => 'Robert Something',
                'price' => '$20.99'
            ),
            array(
                'title' => 'JavaScript',
                'author' => 'Qwerty ',
                'price' => '$18.75'
            )
        )
    );
    $xml = new DOMDocument('1.0', 'UTF-8');
    $xml->formatOutput = true;
    $root = $xml->createElement('Bookstore');
    $xml->appendChild($root);

    foreach ($books as $category => $categoryBooks) 
    {
        $categoryElement = $xml->createElement('Category');
        $categoryElement->setAttribute('name', $category);
        
        foreach ($categoryBooks as $bookDetails) 
        {
            $bookElement = $xml->createElement('Book');
            
            foreach ($bookDetails as $key => $value) 
            {
                $element = $xml->createElement("Book_$key", $value);
                $bookElement->appendChild($element);
            }
            
            $categoryElement->appendChild($bookElement);
        }
        
        $root->appendChild($categoryElement);
    }
    $xmlFile = 'Bookcategory.xml';
    $xml->save($xmlFile);

    echo "XML file created successfully: $xmlFile";
?>
