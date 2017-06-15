"use strict";

// Don't change the next two lines!
// This creates two variables:
//     one with the colors of the rainbow, and another with a single randome
//     another with a single random color value
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

switch (color) {
	case 'red':
		console.log("apples are red");
		break;
	case 'orange':
		console.log("oranges are orange");
		break;	
	case 'yellow':
		console.log("yellow txt is not yellow");
		break;	
	case 'green':
		console.log("grass is green");
		break;	
	case 'blue':
	break;
		console.log("sky is blue");
		break;	
	default:
		console.log("I don't know anything about that color");
		break;
}
var cameronSpent = 180;
var ryanSpent = 250;
var georgeSpent = 320;
var luckyNumber = Math.floor(Math.random()* 6);
var flipACoin = Math.floor(Math.random()* 2);
var receipt = 60;
var discount;
var amtOfDiscount = receipt * discount;
console.log('cameron bought $180 worth of items');
console.log('ryan bought $250 worth of items');
console.log('george bought $320 worth of items');



if (cameronSpent >= 200) {
		cameronSpent = 162
		console.log("Cameron gets a discount and spent " + cameronSpent);
} else{
		console.log("Cameron doesn't get a discount");
}
if (ryanSpent >= 200) {
		ryanSpent = 180
		console.log("Ryan gets a discount and spent " + ryanSpent);
}else{
		console.log("Ryan doesn't get a discount");
}
if (georgeSpent >= 200) {
		georgeSpent = 288
		console.log("George gets a discount and spent " + georgeSpent);
}else{
		console.log("George doesn't get a discount");
}

if (flipACoin === 1){
	console.log("buy a house");
} else {
	console.log("buy a car");
}

switch(luckyNumber){
	case 0:
		discount = 0;
		console.log("no discount for you");
		break;
	case 1:
		discount = .1;
		console.log("10% discount for you");
		break;
	case 2:
		discount = .25;
		console.log("25% discount for you");
		break;
	case 4:
		discount = .5;
		console.log("50% discount for you");
		break;
	case 5:
		discount = "It's all free"
		console.log("It's free!!!!");
		break;
	default:
		console.log("Double the price for you!!!!");
		break;
}

console.log(receipt - amtOfDiscount);
var number;

if (confirm("Would you like to enter a number?") == true) {
	var number = prompt("Pick a number");
	if (number % 2 == 1){
		console.log("the number is odd");
	} else {
		console.log("the number is even");
		alert("The number is even")
	}
	
	if (number > 1){
			alert(number + " is a positive number");
	} else {
		alert(number + " is not a positive number");
	}
else {
		alert(number + " is not a number I recognize");
	}
}

var proceed = confirm("Would you like tyo enter a number?");

if (proceed) {
	var number = prompt("Please enter a numaber.");

	if (isNaN(parseFloat(number))) {
		console.log("Not a valid number.");
	} else{
		if (numbaer % 2 === 0){
			alert("Your number is even.");
		} else {
			alert("Your number is odd.");
		}
		alert("Your number plus 100 is " ((parseFloat(number) + 100));
		if (number < 0) {
			console.log(number + " is negative");
		} else {
			console.log(number + " is positive");
		}
	}
	}
}




    // TODO: create a case statement that will handle every color except indigo and violet
    // TODO: when a color is encountered log a message that tells the color, and an object of that color
    //       example: Blue is the color of the sky.

    // TODO: create a default case that will catch indigo and violet
    // TODO: for the default case, log: I do not know anything by that color.
