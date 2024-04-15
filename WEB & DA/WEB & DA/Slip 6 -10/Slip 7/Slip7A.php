<?php
	$xml = new DOMDocument();
	$xml->load('Movie.xml');

	$movies = $xml->getElementsByTagName('Movie');

	foreach ($movies as $movie) 
	{
		$movieTitle = $movie->getElementsByTagName('MovieTitle')->item(0)->nodeValue;
		$actorName = $movie->getElementsByTagName('ActorName')->item(0)->nodeValue;
		echo "Movie Title: $movieTitle, Actor Name: $actorName <br>";
	}
?>

