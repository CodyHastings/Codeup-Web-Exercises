<?php
require_once __DIR__ . '/../db_connect.php';
require_once '../Input.php';

function pageController($dbc)
{

if (!empty($_REQUEST)) {
	$number = Input::get('pageNum');
	$offset = $number * 4;

	$stmt = $dbc->query("SELECT * FROM national_parks limit 4 offset $offset");
	$stmt->fetch(PDO::FETCH_ASSOC);

	$data = ['pageNum' => $number, 'stmt' => $stmt];
 
}else{
	$stmt = $dbc->query("SELECT * FROM national_parks limit 4 ");
	$stmt->fetch(PDO::FETCH_ASSOC);

	$data = ['pageNum' => 1, 'stmt' => $stmt];
	
}


	return $data;

}


extract(pageController($dbc));



?>

<!DOCTYPE html>
<html>
<head>
	<title>National Parks!</title>
</head>
<body>

	<h1> National Parks!!!</h1>

<table>
	<tr>
	<th>Park Name</th>
	<th>Location</th>
	<th>Date Established</th>
	<th>Area in acres</th>
</tr>

	<?PHP foreach ($stmt as $value) : ?>
<tr>
	<td><?= $value['name'] ?></td>
	<td><?= $value['location'] ?></td>
	<td><?= $value['date_established'] ?></td>
	<td><?= $value['area_in_acres'] ?></td>
</tr>
	<?PHP endforeach ?>
</table>

	<a href="national_parks.php?pageNum=<?=$pageNum-1?>&c=prev">Prev </a>
	<a href="national_parks.php?pageNum=<?=$pageNum+1?>&c=next">Next </a>

	<h1>Page <?= $pageNum ?> </h1>

</body>
</html>