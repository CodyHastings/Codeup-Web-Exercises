<!-- In your HTML, you will need two links. One that says up and another that says down.
Add a heading that shows a number representing the current counter value. This value will start at zero. 
When up is clicked, the counter value should increase; when down is clicked, it should decrease.
The up and down links will send GET requests back to the counter page itself.
Create a function that will access the $_GET superglobal variable. It should determine what the new counter value is and return it.
Use the extract() function to change the return value of the pageController() into variables for your HTML. -->


<?php 



function pageController(){



if (isset($_GET["counter"])){
	if($_GET["counter"] == "up"){
		$number = $_GET["count"] + 1;
	} else if ($_GET["counter"] == "down"){
		$number = $_GET["count"] - 1;

		} 
} else {
	$number = 0;
}


$counter = ['counter' => $number];


return $counter;

}

extract(pageController());


?>



<!DOCTYPE html>
<html>
<head>
	<title>Counter</title>
</head>
<body>


<h1>Counter <?= $counter  ?> </h1>

<a href="counter.php?counter=up&count=<?=$counter?>">UP </A>

<br>

<a href="counter.php?counter=down&count=<?=$counter?>">DOWN </A>


</body>
</html>

