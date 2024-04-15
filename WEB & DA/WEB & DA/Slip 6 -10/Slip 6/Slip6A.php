<?php
	$xml=simplexml_load_file('books.xml');
	if($xml!==false)
	{
		foreach($xml->book as $book)
		{
			echo "Book Number: ".$book->bookno."<br>";
			echo "Book Name: ".$book->bookname."<br>";
			echo "Book Author: ".$book->bookauthor."<br>";
			echo "Price: ".$book->price."<br>";
			echo "Year: ".$book->year."<br><br>";
		}
	}
	else
	{
		echo "Failed to load XML file";
	}
?>
