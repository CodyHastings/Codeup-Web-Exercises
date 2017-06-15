"use strict";

//#2 


var pickANumber = prompt("Pick a number between 1 and 10");
for (var i = 1; i <= 10; i++){
	console.log("you picked " + pickANumber);
	console.log(pickANumber + "x" + i + "=" + (pickANumber * i));
}


//#3

for (var i = 1; i <= 10; ){
	 var random = Math.floor(Math.random() * 200) + 20;
	 if (random > 200){
	 	continue;
	 }
	 if (random % 2 === 0){
	 	console.log(random + " is an even number");
	 	i++;
	 }else{
	 	console.log(random + " is an odd number");
	 	i++;	
	 }
}


