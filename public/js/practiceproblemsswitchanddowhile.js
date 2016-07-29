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
var amountYouPay;

 switch(luckyNumber){
 	case 0:
 	amountYouPay = receipt - (receipt * 0) 
 	console.log("You will pay " + amountYouPay + " dollars");
 	break;

 	case 1: 
 	amountYouPay = receipt - (receipt * .10) 
 	console.log("You will pay " + amountYouPay + " dollars");
 	break;

 	case 2:
 	amountYouPay = receipt - (receipt * .25) 
 	console.log("You will pay " + amountYouPay + " dollars");
 	break;

 	case 3:
 	amountYouPay = receipt - (receipt * .35) 
 	console.log("You will pay " + amountYouPay + " dollars");
 	break;

 	case 4:
 	amountYouPay = receipt - (receipt * 50) 
 	console.log("You will pay " + amountYouPay + " dollars");
 	break;

 	case 5:
 	amountYouPay = receipt - (receipt * 1) 
 	console.log("You will pay " +amountYouPay + " dollars");
 	break;

 }

 var i = 0;

while (i < 10) {
    console.log('while loop iteration #' + i);
    i++;
}


// An ice cream seller can't go home until she sells all of her cones. Write a 
// JS program that generates a random number between 50 and 100 representing the
//  amount of cones to sell. Your code should generate numbers between 1 and 5, 
//  simulating the amount of cones being bought by her clients. Use a do-while loop to 
//  log to the console the amount of cones sold to each person. This is how you get the 
//  random numbers.

// // This is how you get a random number between 50 and 100
// var allCones = Math.floor(Math.random() * 50) + 50;
// // This is how you get a random number between 1 and 5
// var cones = Math.floor(Math.random() * 5) + 1;
// The output should be similar to the following:

// 5 cones sold...  // if there are enough cones
// Cannot sell you 6 cones I only have 3...  // If there are not enough cones
// Yay! I sold them all! // If there are no more cones

var allCones = Math.floor(Math.random() * 50) + 50;
//the amount of cones she needs to sell
var cones;
//the amount of cones customers want at a time


do{

	cones = Math.floor(Math.random() * 5) + 1;
	var extra = (cones == 1) ? "" : "s"
	var allExtra = (allCones == 1) ? "" : "s"

	console.log("Customer would like " + cones + " cone" + extra);
	if (allCones >= cones){
		allCones -= cones
		console.log (cones + " cone" + extra + " sold");

	}else {
		console.log ("I can't sell you " + cones + " cone" + extra + ", but I can sell you " + allCones + " cone" + allExtra + ".");
		allCones = 0;


	}


}

while (allCones > 0);
console.log("Yay! I sold them all!");






