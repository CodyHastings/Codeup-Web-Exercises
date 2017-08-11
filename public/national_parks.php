<?php
 require_once __DIR__ . '/../db_connect.php';
require_once '../Input.php';

function pageController()
{

if(!empty($_REQUEST)){
	$number = Input::get('pageNum');



	$pageNum = ['pageNum' => $number];
 
}else{

	$pageNum = ['pageNum' => 0];
	
}




return $pageNum;

}

extract(pageController());



?>

<!DOCTYPE html>
<html>
<head>
	<title>National Parks!</title>
</head>
<body>

	<h1> National Parks!!!</h1>

	<a href="national_parks.php?pageNum=<?=$pageNum-1?>">Prev </a>
	<a href="national_parks.php?pageNum=<?=$pageNum+1?>">Next </a>

	<h1>Page <?= $pageNum ?> </h1>

</body>
</html>