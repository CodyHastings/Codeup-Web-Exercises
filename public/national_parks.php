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
	<style type="text/css">
	#can {
		position: absolute;
	}
	#buttonWrap {
		position: absolute;
		margin-left: 1%;
		margin-right: 10%;
	}
	#tableDiv {
		position: absolute;
		margin-left: 10%;
		margin-right: 10%;
	}
	h1 {
		text-align: center;
	}
	.skewTable {
		transform: skewX(20deg);
	}

	</style>
</head>
<body>
<canvas id="can"></canvas>
<div id="buttonWrap">
<button class="btn btn-primary btn-block" id="bt1">Prev </button>
<button class="btn btn-primary btn-block" id="bt2">Next </button>
<button class="btn btn-success btn-block" id="addBall">Drop a Ball</button>
<button class="btn btn-success btn-block" id="dropTable">Drop Table</button>
</div>


<h1> National Parks!!!</h1>
<div id="tableDiv">
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
</div>

<!-- <form>

<input type="text" name="name">
<input type="text" name="location">
<input type="text" name="date_established">
<input type="text" name="area_in_acres">



</form> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script> 
$(document).ready(function() {

	var canvas = document.querySelector("canvas");
	var gravity = 0.2;
	var friction = 0.98;
	var c = canvas.getContext("2d");
	var colors = [
	'#04e5de',
	'#421384',
	'#c7d9e0',
	'#e0c7dd'
	];
	canvas.width = window.innerWidth;
	canvas.height = window.innerHeight - 20;

	function randomIntFromRange(min,max) {
		return Math.floor(Math.random() * (max - min + 1) + min);
	}

	function randomColor(colors) {
		return colors[Math.floor(Math.random() * colors.length)];
	}
	
	function Ball(x, y, dx, dy, radius, color) {
		this.x = x;
		this.y = y;
		this.dx = dx;
		this.dy = dy;
		this.radius = radius;
		this.color = color;

		this.update = function() {
			if (this.y + this.radius + this.dy> canvas.height) {
				this.dy = -this.dy;
				this.dy = this.dy * friction;
				this.dx = this.dx * friction;
			} else {
				this.dy += gravity;
			}

			if (this.x + this.radius >= canvas.width || this.x - this.radius <= 0) {
				this.dx = -this.dx * friction;
			}

			this.x += this.dx;
			this.y += this.dy;
			this.draw();
		};

		this.draw = function() {
			c.beginPath();
			c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);	
			c.fillStyle = this.color;
			c.fill();
			c.stroke();
			c.closePath();
			};
		}

	var ballArray = [];
	console.log(ballArray);
	function init() {
		var radius = randomIntFromRange(8, 20);
		var x = randomIntFromRange(radius, canvas.width - radius);
		var y = randomIntFromRange(0, canvas.height - radius);
		var dx = randomIntFromRange(-3, 3)
		var dy = randomIntFromRange(-2, 2)
		ballArray.push(new Ball(x, y, dx, dy, radius, randomColor(colors)));
	}

	function animate() {

  		requestAnimationFrame(animate);
  		c.clearRect(0, 0, innerWidth , innerHeight);

  		for (var i = 0; i < ballArray.length; i++) {
		ballArray[i].update();
		}
  	}

  	animate();


  	function dTable(){
  		// $("#tableDiv").animate({"top": "-=2 * .2"},"fast")
  		$("#tableDiv").animate({
  			"top": "500"
  		});
  		setTimeout(function(){
  		$("#tableDiv").addClass("skewTable")
  	
		}, 400);

  	};



	var getRequest = "<?=$pageNum?>";

	$("#addBall").click(init);
	$("#dropTable").click(dTable);

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