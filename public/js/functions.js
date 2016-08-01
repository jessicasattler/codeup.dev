'use strict'


//function doSomething(){
	// 1 + 1;
//}

// console.log('happy monday guys!');



//doSomething;

//function name (firstArgument, secondArgument){
	
//}

//function addTwo (number) {
	// var result = number + 2;
	// return result;
//}
//console.log(addTwo(2));
//4

//multiply (x,y){
	// return x * y;
//}

//function yell (phrase){
//   return phrase.toUpperCase () + '!';	
//}
// this phrase is totally different than the phrase parmeter in the function
// var phrase = 'happy monday';
// console.log(yell(phrase));


var myNameIs = 'Bob'; // TODO: Fill in your name here.

// TODO:
// Create a function called 'sayHello' that takes a parameter 'name'.
// When called, the function should log a message that says hello from the passed in name.

// TODO: Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.




function sayHello(name){
	var result = "Hello " + name;
	return result;
}

console.log (sayHello (myNameIs));
//return must be inside of function
//if you don't console.log it then you won't see anything in the console when you call the function

								console.log ("\t End of Exercise 1");
//


var random = Math.floor((Math.random()*100)+1);

// Don't modify the following line
// It generates a random number between 1 and 100 and stores it in random
// TODO:
// Create a function called 'isOdd' that takes a number as a parameter.
// The function should use the ternary operator to log a message.
// The log should tell the number passed in and whether it is odd or not.

// TODO: Call the function 'isOdd' passing the variable 'random' as a parameter.


function isOdd (number){

	random = (random % 2 != 0) ? (random + " is odd" ) : (random + " is not odd");
	return random;
}

console.log (isOdd (random));

//or (not done with the next one)

// function isOdd(number){
// 	var anyNumber = zz % 2 != 0) ? (random + " is odd" ) : (random + " is not odd");
// 	return random;
// }


console.log ("\t End of Exercise 2");


//take a string and remove the spaces

// input => "hello there lassen"
// output => "hellotherelassen"

var phrase = "hello there lassen!";

while (phrase.indexOf(' ') !== -1) {

	phrase = phrase.replace(' ','');
	//remove the space
}

console.log (phrase);
//we have written code to remove the space 




//we do the following to make the code more robust and call the function and pass any arbitrary string
function removeSpaces (phrase){

while (phrase.indexOf(' ') !== -1) {

	phrase = phrase.replace(' ','');
	//remove the space
	}

	return phrase;
}
var result = removesSpaces ('hellotherelassen');
console.log (result);


//takes a needle and a haystack
//returns true if the needle is in the haystack, otherwise false

function stringContains (haystack, needle){

		var index = haystack.indexOf('needle');
		if (index === -1){
			return false;

		} else{
			return false;
		}
	
}



stringContains ('hello codeup', 'codeup'); // =>true
stringContains ('hello codeup', 'alkdsbf'); //=>false



//while string has spaces


function removesSpaces (phrase) {
	while (stringContains(phrase, ' ')){
		phrase = phrase.replace(' ', '';)
	}

	return phrase;
}



var result = removeSpaces('hello there lassen!');
//console.log(result);

//take a string as input
//return true if there is a ' ' in the string, otherwise false
function hasASpace (stringToCheck) {
	var stringHasASpace = stringContains(stringToCheck, ' ');
	return stringHasASpace;
}



// while the string has spaces

function removesSpaces (phrase){
	while (hasASpace(phrase)){
		phrase = phrase.replace (" ", "");

	}
	return phrase;
}

var result = removeSpaces('hello there lassen!');
//console.log(result);


//definitions
//procedural code (code that does stuff, like console.log or calls functions)






















