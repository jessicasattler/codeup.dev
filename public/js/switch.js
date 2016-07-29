"use strict";
// The following line generates a random number between 0 and 5.
// var luckyNumber = Math.floor(Math.random()* 6)
// Now, suppose there's a promotion in Walmart, 
// If your lucky number is 0 you have no discount, if your lucky 
// number is 1 you'll get a 10% discount, if it's 2, discount is 25%, 
// if it's 3, 35%, if it's 4, 50%, and if it's 5 you'll get all for free!. 
// 	Write a JS program that logs to the console, how much you will have to pay 
// if your receipt is for $60. Every time you reload your page you should see a different result. 
// 	Use a switch statement for this exercise.

var luckyNumber = Math.floor(Math.random()* 6)
var receipt = 60
var totalPrice;

switch (luckyNumber) {
	case 0:
	console.log("No discount applied. You will pay the full price of " + receipt );
	break;

	case 1: 
	totalPrice = receipt -(receipt * .10) 
	console.log("A 10% discount will be applied, therefore you will pay " + totalPrice);
	break;

	case 2:
	totalPrice = receipt - (receipt * .25)
	console.log("A 25% discount will be applied, therefore you will pay " + totalPrice);
	break;

	case 3:
	totalPrice = receipt - (receipt * .35)
	console.log("A 35% discount will be applied, therefore you will pay  " + totalPrice);
	break;

	case 4:
	totalPrice = receipt - (receipt * .50)
	console.log("A 50% discount will be applied, therefore you will pay  " + totalPrice);
	break;

	case 5:
	totalPrice = receipt - (receipt *1)
	console.log(" A discount of 100% will be applied, therefore you will pay " + totalPrice);
	break;

}

// Suppose you have been assigned a task and you need to convert a number to the name 
// of a month. 1 should be shown as January, 2 as February and so on. 
// Using a switch statement write the JS code that shows the names of the months in the console.
var luckyMonth = Math.floor(Math.random()* 12)
var month;
	
	switch (luckyMonth) {
		case 1:
		month = "January";
		console.log("This is the first month, therefore it is: " + month);
		break;

		case 2:
		month = "February";
		console.log("This is the second month, therefore it is: " + month);
		break;

		case 3: 
		month = "March";
		console.log("This is the 3rd month, therefore it is: " + month);
		break;


		case 4: 
		month = "April";
		console.log("This is the 4th month, therefore it is: " + month);
		break;

		case 5: 
		month = "May";
		console.log("This is the 5th month, therefore it is: " + month);
		break;

		case 6: 
		month = "June";
		console.log("This is the 6th month, therefore it is: " + month);
		break;

		case 7: 
		month = "July";
		console.log("This is the 7th month, therefore it is: " + month);
		break;

		case 8: 
		month = "August";
		console.log("This is the 8th month, therefore it is: " + month);
		break;

		case 9: 
		month = "September";
		console.log("This is the 9th month, therefore it is: " + month);
		break;

		case 10: 
		month = "October";
		console.log("This is the 10th month, therefore it is: " + month);
		break;

		case 11:
		month = "November";
		console.log("This is the 11th month, therefore it is: " + month);
		break;

		case 12:
		month = "December";
		console.log("This is the 12th month, therefore it is: " + month);
		break;

	}













