<?php 



function pageController(){



if (isset($_GET["was"])){
	if($_GET["was"] == "hit"){
		$number = $_GET["count"] + 1;
		$gameOver = null;
	} else if ($_GET["was"] == "miss"){
		$gameOver = "GAME OVER YOU MISSED!!!";
		$number = 0;

		} 
} else {
	$number = 0;
	$gameOver = null;
}


$counter = ['counter' => $number, 'gameOver' => $gameOver];


return $counter;

}

extract(pageController());


?>



<!DOCTYPE html>
<html>
<head>
	<title>Pong</title>
</head>
<body>

<h1>PONG</h1>
<h1> <?=$gameOver ?></h1>

<h1>Counter <?= $counter  ?> </h1>

<a href="ping.php?count=<?=$counter?>&was=hit">HIT </A>

<br>

<a href="ping.php?count=<?=$counter?>&was=miss&end=<?=$gameOver?>">MISS </A>
<br>

<a href="ping.php">Reset </A>


</body>
</html>

