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
window.onload = function(){
	var numButtons = document.querySelectorAll(".numbtns");
	var opbuttons = document.querySelectorAll(".opbtns");
	var output = document.getElementById("output");
	var operatorOutput = document.getElementById("screen-relay");
	var clear = document.getElementById("clear");
	var equals = document.getElementById("equals");
	var calculator = document.getElementById("calculator");
	var result;
	var result2;
	var outputState;
	equals.addEventListener("click", doMath)

	numButtons.forEach(function (button){
		button.addEventListener("click", function(){
			output.innerHTML += button.innerHTML;
			// if operatorOutput.innerHTML = 
		});

	});

	opbuttons.forEach(function (button){
		button.addEventListener("click", function(){
			operatorOutput.innerHTML = button.innerHTML;
			result = output.innerHTML;
		});

	});

	clear.addEventListener("click", function(){
		output.innerHTML = "";
		operatorOutput.innerHTML = "";
	});

	function doMath(){
		// eval(result + operatorOutput.innerHTML + result2)


	}




	// function clrOutput(){
	// 	output.innerHTML = "";
		
	// }
};

// on next 

// output.innerHTML = (result operatorOutput result2)

// function check(){
// 	if (some conditions) {
// 		ouptutState = state1
// 	} else {
// 		outputState = stat2 
// 	} if state 2 clear display and concat state2
// }










