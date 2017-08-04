<?php 
require_once '../Input.php';



function pageController(){



if (Input::has("was")){
	if(Input::get("was") == "hit"){
		$number = Input::get("count") + 1;
		$gameOver = null;
	} else if (Input::get("was") == "miss"){
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
	<title>Ping</title>
</head>
<body>

<h1>PING</h1>
<h1> <?=$gameOver ?></h1>

<h1>Counter <?= $counter  ?> </h1>

<a href="pong.php?count=<?=$counter?>&was=hit">HIT </A>

<br>

<a href="pong.php?count=<?=$counter?>&was=miss&end=<?=$gameOver?>">MISS </A>

<br>

<a href="ping.php">Reset </A>


</body>
</html>

