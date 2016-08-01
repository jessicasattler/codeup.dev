"use strict";

//Exercise 1
//make a new file called math.html
//write functions that perform the following actions
//sum two numbers
//subtract one number from another
//multiply two numbers
//divide two numbers
//square a number (without using the * operator)
	//this means use the multiply () function you just made

//sums two squares (without using * or +) sumOfSquares (a,b)
	//this means use multiply () and sum() you just made

//Add functionality for each function that makes sure the parameters are numbers
//if one of the parametes is not a number, return "inputs must be numeric"

//Add functionality to divide () to notify if you divide by zero

//write a function called isNumeric that returns a boolean

//sum two numbers:
function sum (numberOne, numberTwo) {
	var sum = numberOne + numberTwo;

	return sum;
}

console.log(sum(3,4));

	console.log("----------")

//subtract one number from another
function subtract (number1, number2){
	var subtract = number1 - number2;

	return subtract;

}

console.log(subtract(4,2));

	console.log("----------")

//multiply two numbers
function multiply (numberOne, numberTwo){
	var multiply = numberOne * numberTwo;

	return multiply;
}

console.log(multiply(4,5))

	console.log("----------")

//divide two numbers

function divide (number1, number2){
	var divide = number1 / number2;

	return divide;
}

console.log(divide(12,3));

	console.log("----------")

//square a number (without using the * operator)
	//this means use the multiply () function you just made
console.log(multiply(7,7));
	
	console.log("----------")

// //sums two squares (without using * or +)
// 	//this means use multiply () and sum() that you just made
// console.log (sum(multiply(7,7),(multiply(2,2))));

//sums two squares (without using * or +) sumOfSquares (a,b)
	//this means use multiply () and sum() you just made

function sumOfSquares(numberOne,numberTwo) {

	var b1 = multiply(numberOne,numberOne);
	var b2 = multiply(numberTwo,numberTwo);


	return sum(b1, b2);

}

console.log(sumOfSquares(3,2));

	console.log("-----Hello-----")


//Add functionality for each function that makes sure the parameters are numbers
//if one of the parameters is not a number, return "inputs must be numeric"



function sum (numberOne, numberTwo) {
	if (isNaN(numberOne)|| isNaN(numberTwo)){
		return "Inputs must be numberic";

	}else{

	var sum = numberOne + numberTwo;

	return sum;
}

}

console.log(sum(3,7));

	console.log("----------")


function subtract (number1, number2){

	if (isNaN(number1) || isNaN(number2)){
		return "Inputs must be numeric";
	}else {
	var subtract = number1 - number2;

	return subtract;
	}
}

console.log(subtract(4,"six"));

	console.log("----------")


function multiply (numberOne, numberTwo){
	if(isNaN(numberOne)|| (numberTwo)){
		return "Inputs must be numeric";

	}else {
	var multiply = numberOne * numberTwo;

	return multiply;
	}
}

console.log(multiply(4,5));

	console.log("----------")



function divide (number1, number2){
	var divide = number1 / number2;

	return divide;
}

console.log(divide(12,3));

	console.log("----------")


console.log(multiply(7,7));
	
	console.log("----------")



function sumOfSquares(numberOne,numberTwo) {

	var b1 = multiply(numberOne,numberOne);
	var b2 = multiply(numberTwo,numberTwo);


	return sum(b1, b2);

}

console.log(sumOfSquares(3,2));

	console.log("----------")




















