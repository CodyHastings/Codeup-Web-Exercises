"use strict";

// Don't change the next two lines!
// These creates two variables for you:
//     one with the colors of the rainbow
//     another with a single random color value
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

console.log(color)

var favorite = 'orange'; // TODO: change this to your favorite color from the list





if (color == 'red'){
	console.log('apples are red')
} else if (color == 'orange'){
	console.log('oranges are orange')
}else if (color == 'yellow'){
	console.log('yellow text is not yellow')
}
else if (color == 'green'){
	console.log('the grass is green')
}
else if (color == 'blue'){
	console.log('the sky is blue')
} else{
	console.log('I do not know anything about that color')
}

color == favorite ? console.log('orange is my favorite color') : console.log(color + " is not my favorit color")


	
// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.