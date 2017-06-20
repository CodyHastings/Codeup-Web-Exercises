var input;

function identity(input){
	return input;
}

identity(input);

// Write a function called `identity(input)` that takes in an argument called input and returns that input.
var x = 5;
var y = 100;

function getRandomNumber(min, max) {
	return Math.floor(Math.random() * (max - min)) + min;
}

var randomNumber = getRandomNumber(x,y)

console.log(randomNumber)



// Write a function called `getRandomNumber(min, max)` that returns a random number between min and max values sent to that funciton call.

function first(input) {
	return input.slice(0,1);
} 

var firstLetter = first("bob");

console.log(firstLetter);


// Write a function called `first(input)` that returns the first character in the provided string. 

function last(input) {
	return input.slice(-1);
} 

var lastLetter = last("bob");

console.log(lastLetter);

// Write a fuction called `last(input)` that returns the last character of a string

function rest(input) {
	return input.slice(-1);
} 

var restLetter = rest("bob");



console.log(restLetter);



// Write a function called `rest(input)` that returns everything but the first character of a string.

// Write a function called `reverse(input)` that takes a string and returns it reversed.

// Write a function called `isNumeric(input)` that takes an input and returns a boolean if the input is numeric.

// Write a function called `count(input)` that takes in a string and returns the number of characters.

// Write a function called `add(a, b)` that returns the sum of a and b

// Write a function called `subtract(a, b)` that return the difference between the two inputs.

// Write multiply(a, b) that returns the product

// Write a divide(numerator, denominator) function that returns a divided by b

// Write a remainder(number, divisor) function that returns the remainder left over when dividing `number` by the `divisor`

// Write the function `square(a)` that takes in a number and returns the number multiplied by itself.

// # Super Duper Gold-Star Bonus

// Write a function called sumOfSquares(a, b) that uses only your add() function and your square function and not + or * operators

// Write a function called doMath(operator, a, b) that takes 3 parameters. The first parameter is the name of the math function you want to apply. a and b are the two numbers to run that function on.