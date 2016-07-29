'use strict'

//maybe google 'javascript repeat a string'

//count from 10 to 1

//var i = 10;
// while (1>0) {
// 	console.log(i);
// 	i -= 1;
// }

//same as

//count from 10 t 1
// for (var i = 10; i > 0; i -= 1) {
// 	console.log (i);
// }

//for loop syntax

// for (/*initial statment*/ ; /* condition */ ; statment evaluated after each iteration){
	//body
// }

//clock from 1:00 to 5:59
// for (var i = 1; i <= 5; i += 1) {
// 	for (var j = 0; j<=59; j += 1){
// 		console.log(i + ':' + j);
// 	}
// }
//the following is the start of # 2

// var str = "Hello world!";
// str.repeat(2);

// var num = 15;
// var n = num.toString();

for (var i = 1; i <=10 ; i += 1) {

	var num = i.toString();
	num = num.repeat(i);
	
	if (i == 10){
		num = "0";
		num = num.repeat(i);



	}
	console.log(num);
}


// for # 3
var randomNumber = Math.floor(Math.random() * 10) + 1;

for (var i = 1 ; i <= 10; i += 1 ) {
	
console.log(randomNumber + " x " + i + " =");
console.log (randomNumber * i);

}

// Using a for loop and the code to generate a random number from the 
// previous lessons, generate 10 random numbers between 20 and 200 and output to the 
// console whether each number is odd or even. For example:
// 123 is odd
// 80 is even
// 24 is even
// 199 is odd
// ...



for (var i = 1; i <= 10; i += 1){

var randomNumber = Math.floor(Math.random() * 200) + 20;

	if (randomNumber % 2 == 0){
		console.log(randomNumber + " is even");
	} else {
		console.log(randomNumber + " is odd");
	}
}


for (var i = 100; i >= 5 ; i -= 5){

	console.log(i);
}






