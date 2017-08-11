<?php
require_once __DIR__ . '/../db_connect.php';
require_once '../Input.php';

function pageController($dbc)
{

	
if (!empty($_REQUEST) && is_numeric(Input::get('pageNum')) && Input::get('pageNum') >= 1) {
	$number = Input::get('pageNum');
	$offset = ($number-1) * 4;

	$stmt = $dbc->query("SELECT * FROM national_parks limit 4 offset $offset;");
	$stmt->fetch(PDO::FETCH_ASSOC);

	$data = ['pageNum' => $number, 'stmt' => $stmt];
 
}else{
	$stmt = $dbc->query("SELECT * FROM national_parks limit 4 ;");
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
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<h1> National Parks!!!</h1>

<table class="table">
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

<!-- <form>
	
<input>
<input>
<input>
<input>
<input>



</form> -->
<button id="bt1">Prev </button>
<button id="bt2">Next </button>

	<h1>Page <?= $pageNum ?> </h1>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script> 
$(document).ready(function() {
	var getRequest = "<?=$pageNum?>";

	$("#bt1").click(function(){
		if (parseInt(getRequest) == 1) {
			window.location.href="http://codeup.dev/national_parks.php?pageNum=1";
		}else{
				window.location.href="national_parks.php?pageNum="+ (parseInt(getRequest) - 1);
			}
	});
	$("#bt2").click(function(){
		if (parseInt(getRequest) == 15) {
			window.location.href="http://codeup.dev/national_parks.php?pageNum=1";
		}else{
				window.location.href="national_parks.php?pageNum="+ (parseInt(getRequest) + 1);
			}
	});
});


</script>
</body>
</html>