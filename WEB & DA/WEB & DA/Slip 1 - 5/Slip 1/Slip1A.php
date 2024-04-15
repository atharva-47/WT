<?php

/*
1) Write a PHP script to keep track of number of times the web page has been accessed (Use Session
Tracking).
*/

	session_start();
	if(isset($_SESSION['page_views']))
	{
		$_SESSION['page_views']++;
	} 
	else 
	{
		$_SESSION['page_views'] = 1;
	}
	echo "You have visited this page ".$_SESSION['page_views']."times.";
	
?>
