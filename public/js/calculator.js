window.onload = function(){
	var numButtons = document.querySelectorAll(".numbtns");
	var opbuttons = document.querySelectorAll(".opbtns");
	var output = document.getElementById("output");
	var operatorOutput = document.getElementById("screen-relay");
	var clear = document.getElementById("clear");
	var equals = document.getElementById("equals");
	var calculator = document.getElementById("calculator");
	var demical = document.getElementById("decimal");
	var result;
	var result2;
	var outputState = 1;
	var finalTotal;
	equals.addEventListener("click", doMath)

	decimal.addEventListener("click",function(){
		if (output.innerHTML.indexOf(".") == -1){
			output.innerHTML += "."
		}
	});

	numButtons.forEach(function (button){
		button.addEventListener("click", function(){
			if (outputState === 2){
				output.innerHTML += button.innerHTML;
				result2 = output.innerHTML
				console.log("if condition is running 4 each on numbuttons");

			}else{
				output.innerHTML += button.innerHTML;
				console.log("else condition ");
			}		
		});

	});

	opbuttons.forEach(function (button){
		button.addEventListener("click", function(){
			operatorOutput.innerHTML = button.innerHTML;
			result = output.innerHTML;
			outputState = 2;
			output.innerHTML = "";
		});

	});

	clear.addEventListener("click", function(){
		output.innerHTML = "";
		console.log(operatorOutput.innerHTML);
		operatorOutput.innerHTML = "";
		outputState = 1;

	});

	function doMath(){
		if (operatorOutput.innerHTML == "+"){
			finalTotal = parseFloat(result) + parseFloat(result2);
			output.innerHTML = finalTotal;
		} else if (operatorOutput.innerHTML == "-"){
			finalTotal = parseFloat(result) - parseFloat(result2);
			output.innerHTML = finalTotal;
		} else if (operatorOutput.innerHTML == "*"){
			finalTotal = parseFloat(result) * parseFloat(result2);
			output.innerHTML = finalTotal;
		} else if (operatorOutput.innerHTML == "/"){
			finalTotal = parseFloat(result) / parseFloat(result2);
			output.innerHTML = finalTotal;
		}
	}
};
// var rect1 = {x: 5, y: 5, width: 50, height: 50}
// var rect2 = {x: 20, y: 10, width: 10, height: 10}
// rect1 += document.getElementById("calculator")
// rect2 +=document.getElementById("handiv")

// if (rect1.x < rect2.x + rect2.width &&
//    rect1.x + rect1.width > rect2.x &&
//    rect1.y < rect2.y + rect2.height &&
//    rect1.height + rect1.y > rect2.y) {
//     console.log("collision detected")
// } else{
// 	console.log("collision not detected")
// }

// // filling in the values =>

// if (5 < 30 &&
//     55 > 20 &&
//     5 < 20 &&
//     55 > 10) {
//     console.log("collision detected")
// } else {
// 	console.log("collision not detected")
// }










































