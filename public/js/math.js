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


//modify your math.js file to do the following:
//1.on page load ask the user what they would like to do
//(add,subtract,divide,multiply):
//based on the user's response, get numbers from the user to pass into your 
//math functions
//ensure the user's inputs are valid!

//2.write a function averageOfThree that takes 3 numbers and returns their average 
//add functionality to allow the user to square a number, or average 3 numbers
//(note that now you will not always have 2 inputs)


function averageOfThree(number1,number2,number3){

}

var response;



response = prompt ("What would you like to do: add, subtract, divide, or multiply?");

while (response.length == 0){
	response = "Please provide a valid answer";
} 
alert ("I see that you would like to " + response);


function equations(){
	var askUserForANumber = prompt("Please give the first number in the equation");
	var askUserForAnotherNumber = prompt("Please provide the second number in the equation"); 
		var n1 = parseInt(askUserForANumber);
		var n2 = parseInt(askUserForAnotherNumber);	

}

	if (response == "sum"){
		equations();
		sum(n1,n2);
	 

}
	console.log(sum(n1,n2));

	if (response == "subtract"){
	var askUserForANumber = prompt("Please give the first number in the equation");
	var  askUserForAnotherNumber = prompt("Please provide the second number in the equation"); 
		var n1 = parseInt(askUserForANumber);
		var n2 = parseInt(askUserForAnotherNumber);
	} 
	console.log(subtract(n1,n2));


	if (response == "multiply"){
	var askUserForANumber = prompt("Please give the first number in the equation");
	var  askUserForAnotherNumber = prompt("Please provide the second number in the equation"); 
		var n1 = parseInt(askUserForANumber);
		var n2 = parseInt(askUserForAnotherNumber);

	}
	console.log(multiply(n1,n2));

	if (response == "divide"){
	var askUserForANumber = prompt("Please give the first number in the equation");
	var  askUserForAnotherNumber = prompt("Please provide the second number in the equation"); 
		var n1 = parseInt(askUserForANumber);
		var n2 = parseInt(askUserForAnotherNumber);

} 
 // console.log(divide(n1,n2));


console.log("\t End of Exercise")
function sum (numberOne, numberTwo) {
	var sum = numberOne + numberTwo;
	return sum;
	console.log(sum(n1,n2));
}


	console.log("----------")

//subtract one number from another
function subtract (number1, number2){
	var subtract = number1 - number2;

	return subtract;

}

// console.log(subtract(4,2));

	console.log("----------")

//multiply two numbers
// function multiply (numberOne, numberTwo){
// 	var multiply = numberOne * numberTwo;

// 	return multiply;
// }

// console.log(multiply(4,5))

// 	console.log("----------")

//divide two numbers

// function divide (number1, number2){
// 	var divide = number1 / number2;

// 	return divide;
// }

// console.log(divide(12,3));

// 	console.log("----------")

// //square a number (without using the * operator)
// 	//this means use the multiply () function you just made
// console.log(multiply(7,7));
	
// 	console.log("----------")

// //sums two squares (without using * or +)
// 	//this means use multiply () and sum() that you just made
// console.log (sum(multiply(7,7),(multiply(2,2))));

//sums two squares (without using * or +) sumOfSquares (a,b)
	//this means use multiply () and sum() you just made

// function sumOfSquares(numberOne,numberTwo) {

// 	var b1 = multiply(numberOne,numberOne);
// 	var b2 = multiply(numberTwo,numberTwo);


// 	return sum(b1, b2);

// }

// console.log(sumOfSquares(3,2));

// 	console.log("-----Hello-----")


//Add functionality for each function that makes sure the parameters are numbers
//if one of the parameters is not a number, return "inputs must be numeric"



// function sum (numberOne, numberTwo) {
// 	if (isNaN(numberOne)|| isNaN(numberTwo)){
// 		return "Inputs must be numeric";

// 	}else{

// 	var sum = numberOne + numberTwo;

// 	return sum;
// }



// }

// console.log(sum(3,"seven"));

	console.log("----------")


function subtract (number1, number2){

	if (isNaN(number1) || isNaN(number2)){
		return "Inputs must be numeric";
	}else {
	var subtract = number1 - number2;

	return subtract;
	}
}

// console.log(subtract(4,"six"));

	console.log("----------")


function multiply (numberOne, numberTwo){
	if(isNaN(numberOne) || isNaN(numberTwo)){
		return "Inputs must be numeric";

	}else {
	var multiply = numberOne * numberTwo;

	return multiply;
	}
}

// console.log(multiply(4,"five"));

	console.log("----------")



function divide (number1, number2){
	if(isNaN(number1)|| isNaN(number2)){
		return "Inputs must be numeric";
	}else{
	var divide = number1 / number2;

	return divide;
	}
	if(number2 = 0){
		return "Attempting to divide by zero";

	}
}

// console.log(divide(3,0));

// 	console.log("----------")


// console.log(multiply("seven",7));
	
// 	console.log("----------")



// function sumOfSquares(numberOne,numberTwo) {
// 	if(isNaN(numberOne)|| isNaN(numberTwo)){
// 		return"Inputs must be numeric";
// 	}else{

// 	var b1 = multiply(numberOne,numberOne);
// 	var b2 = multiply(numberTwo,numberTwo);


// 	return sum(b1, b2);
// 	}
// }

// console.log(sumOfSquares(3,"two"));

// 	console.log("----------")


// write a function called isNumeric(number) that returns a boolean
// Add functionality for each function that makes sure the parameters are numbers
// if one of the parameters is not a number, return "inputs must be numeric"

// function isNumeric(number) {
// 	if(isNaN(number)){
// 		return false;

// 	}else{
// 		return true;
// 	}

//     // returns true if the value is numeric
//     // returns false if the value is not a number data type
// }

// function sum(a, b) {
//     if(isNumeric(a) && isNumeric(b)) {
//         return parseFloat(a) + parseFloat(b);
//     } else {
//         return "inputs must be numeric";
//     }
// }



//modify your math.js file to do the following:
//1.on page load ask the user what they would like to do(add,subtract,divide,multiply):
//based on the user's response, get numbers from the user to pass into your 
//math functions
//ensure the user's inputs are valid!

//2.write a function averageOfThree that takes 3 numbers and returns their average 
//add functionality to allos the user to square a number, or average 3 numbers
//(note that now you will not always have 2 inputs)













