/* when clicking a number or when key is pressed, append value of # to end of string in ouput div

operator click or matching key, outputs operator to screen relay, converts output string to number and stores in a result variable

while screen relay  = null disable operator buttons. 
otherwise activate operator buttons. 

click clear, change output to " " and screen relay to null

operator plus = +

operator minus = -

operator multiply = *

operator divide = /

equals = (convert current output to number and update ouptut to result operator output)

*/
// window.onload = function(){
	var numButtons = document.querySelectorAll(".numbtns");
	var opbuttons = document.querySelectorAll(".opbtns");
	var output = document.getElementById("output");
	var operatorOutput = document.getElementById("screen-relay");
	var clear = document.getElementById("clear");
	var equals = document.getElementById("equals");
	var calculator = document.getElementById("calculator");
	var result;
	var result2;
	var outputState = 1;
	var finalTotal;
	equals.addEventListener("click", doMath)

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




	
// };











































