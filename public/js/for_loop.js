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
	//("i" means the loop will start at 1; the loop will continue as long as "i" is 
	//less than or equal to 10; "i" will increase by 1 after each iteration of the loop.  

	var num = i.toString();
	//we create a variable called num and this variable turns "i" into a string. 
	num = num.repeat(i);
	//when we turn this variable into a string, we can have it repeat "i" number of times
	
	
	if (i == 10){
		num = "0";
		num = num.repeat(i);

//we want to add this if statement because we want to end up with ten zeroes and to do this, 
//we would have an if statement that tells us , if i is equal to "10" (but not assigning a 
//a value of 10 to it), then set the variable "num" to now be equal to zero. Once we have
// this, we say num is equal to num.repeat (i) so that we repeat the number zero ten times. 

	}
	console.log(num);

//we want to use console log at the end so that it can go through the loop and then give 
//us the desired output, including the 
}
//-------------------------------------------------------------------------

// for # 3
//Write the JS code to log to the console the multiplication table for 
//a random number between 1 and 10. 
//For instance, if the random number is 7, the console output should look like


var randomNumber = Math.floor(Math.random() * 10) + 1;

for (var i = 1 ; i <= 10; i += 1 ) {
	
console.log(randomNumber + " x " + i + " =");
console.log (randomNumber * i);

}
//-------------------------------------------------------------------
//Exercise 4
// Using a for loop and the code to generate a random number from the 
// previous lessons, generate 10 random numbers between 20 and 200 and output to the 
// console whether each number is odd or even. For example:
// 123 is odd
// 80 is even
// 24 is even
// 199 is odd
// ...

//-------------------------
//



for (var i = 1; i <= 10; i += 1){

var randomNumber = Math.floor(Math.random() * 200) + 20;

	if (randomNumber % 2 == 0){
		console.log(randomNumber + " is even");
	} else {
		console.log(randomNumber + " is odd");
	}
}


//Exercise 5
//Use inline JavaScript to create a
// for loop that uses console.log to 
//create the output shown below.
for (var i = 100; i >= 5 ; i -= 5){

	console.log(i);
}






