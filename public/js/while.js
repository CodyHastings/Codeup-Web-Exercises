//excercise 1 

var i = 2;

while (i <= 65536){
	console.log(i);
	i = i * 2;
}

//exercise 2
var allCones = Math.floor(Math.random() * 50) + 50;
var conesLeft = allCones;
var cones;

console.log("I need to sell " + allCones);
do {
	cones = Math.floor(Math.random() * 5) + 1;
	console.log("Client buys " + cones);
	conesLeft = conesLeft - cones;

} while(conesLeft > 0);

console.log("I sold all the cones!!!")