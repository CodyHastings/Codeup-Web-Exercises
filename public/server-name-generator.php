<?php

// Create two arrays.
// One containing at least 10 adjectives.
// Another containing at least 10 nouns.
// Create a function that will return a random element from an array.
// Create a function that returns the string value of our new server name made by 
// combining a random adjective with a random noun.
// Each time you refresh the page a different result should be displayed.

function pageController()
{

	$adjarr = ["Sassy", "Tremendous", "Old-Fashioned", "Mere", "Substantial", "Outrageous", "Ruthless", "Puzzled", "Redundant", "Jazzy", "Atomic", "Quaint", "Wooden", "Shiny", "Ruddy"];

	$nounarr = ["Coffee", "Covfefe","Hand-Shake", "HI-5","Fish", "Jams","Lyrics", "Battle","Doug", "Emmett","Avery", "Narwhals", "Yo-yo", "Elbows", "Knee-caps"];

	$data = [
		"adjarr" => $adjarr,
		"nounarr" => $nounarr
	];


	
	return $data;

}
function randomElm($adj, $noun)
{
	$adjindex = array_rand($adj);
	$nounindex = array_rand($noun);

	return $adj[$adjindex] . " " . $noun[$nounindex];

}

extract(pageController());

$serverName = randomElm($adjarr, $nounarr);

?>

<!DOCTYPE html>
<html>
<head>
	<title>server name generator</title>
</head>
<body>

	<h1><?= $serverName ?> </h1>

</body>
</html>