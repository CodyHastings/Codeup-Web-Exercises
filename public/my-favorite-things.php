<?php


// Create a new file named my-favorite-things.php and put it in your public directory.
// Create an array of your favorite things. This array should contain at least five things.
// We will need to loop through this array and display each element inside your HTML.
// Use an HTML table for this display.
// Use CSS to add a light gray background on every other row for a nice effect.
// Have fun and make it beautiful!
function pageController(){


$thingsArr = ["Hi5s", "My Family", "Playing Guitar", "Video Games"];

$data = ["thingsArr" => $thingsArr];

return $data;

}

extract(pageController());


?>

<!DOCTYPE html>
<html>
<head>
	<title>My Favorite Things</title>
	<style type="text/css">

	ul>li:nth-child(odd){
   	background-color: grey;
}​
	</style>
</head>
<body>

<h1>My Favorite Things</h1>
<ul>
<?PHP foreach ($thingsArr as $value) :
		?> <li> <?= $value; ?> </li>
<?PHP endforeach ?>
</ul>

</body>
</html>