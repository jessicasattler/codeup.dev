'use strict'

//•		for - loops through a block of code a number of times
// •	for/in - loops through the properties of an object
// •	while - loops through a block of code while a specified condition is true
// •	do/while - also loops through a block of code while a specified condition is true


// Time exercise to print the time it would be between 1 and 5 o'clock

// for (var i = 1; i <= 5; i += 1){
// 	for (var j = 0; j <= 59; j += 1){

// 		if (j <= 9){
// 			console.log("The time is "+ i+ ":0" + j);
// 		} else{
			
// 		console.log("The time is " + i + ":" + j);

// 		}
// 	}
// }

var extra;
for (var i = 1; i <= 5; i += 1){
	for (var j = 0; j <= 59; j += 1){
		extra = (j < 10) ? "0" : "";
		console.log("The time is " + i + ":" + extra + j);
	}
}
///////////////////////////////////////////////////////////////////////////////////////////////////
var i;
var n;

for (i = 1; i <= 10; i+= 1){
	n = i.toString();


	if (i == 10){

		n = "0";
		// console.log(n.repeat(10));

	}
	 console.log(n.repeat(i));
}

///////////////////
//Generate ten random addition questions for two integers between 1 and 15. 


//ten addition questions
//var randomNumber = Math.floor(Math.random() * 10) + 1;
//Add two integers (whole numbers) between 1 and 15

var i;
var randomNumber;
var randomNumberTwo;
var sum;

for (i = 1; i <= 10; i += 1 ){
randomNumber =  Math.floor(Math.random() * 15) + 1;
randomNumberTwo =  Math.floor(Math.random() * 15) + 1;
sum = randomNumber + randomNumberTwo

	console.log(i + ":" + randomNumber + "+" + randomNumberTwo + "=" + sum);
}



console.log("New Problem");


//Count positive and negative numbers and compute the average of numbers
//We want to ask user to start and continue inputting numbers until he/she enters a zero
//We want to know how many numbers the user has inputted (how many positive and how many negative numbers)
//separately
//We want to calculate the sum of the values inputted (positive and negative together)
//We want to know the average of the numbers

// var i = 1;
// var userInputString; 
// var negCount = 0;
// var posCount = 0;
// var sum = 0;
// var average;


// while (i != 0){
//  	userInputString = prompt("Enter an integer, the input ends if it is 0:");
// 	i = parseInt(userInputString);
// 	console.log (i);

// 	if (i < 0){
// 		negCount += 1;
// 	}else if(i > 0){
// 		posCount += 1;
// 	}

// 	sum += i;

// }
// 	average = sum / (negCount + posCount);
// 		console.log("We have " + negCount + " negative numbers");


// 		console.log("We have " + posCount + " positive numbers");

// 		console.log("The total is " + sum);

// 		console.log("The average is " + average.toFixed(2));

console.log("New Problem");

//Write a program that displays the following table
//note that 1 mile is 1.609 kilometers
//console.log('KILOGRAMS \t POUNDS')
//We want the table to display Miles on the left and Kilometers on the right
//We will do calculate the equivalent of mile(s) 1 through 10

console.log("Miles" + "\t" + "Kilometers")

var i;
var kilometers;

for(i = 1; i <= 10; i += 1){
	
	kilometers = i * 1.609;
	console.log (i + "\t" + kilometers)
}

console.log("New Problem");


//Program should prompt the user how many students took the test
//One at a time ask the user to enter in the scores that the students scored
//Only ask for  the number of scores the amount of times as many students took the test
//Using an alert, tell the user what the highest score is

// var numberOfStudentsString;
// var numberOfStudentsInt;
// var scoresString;
// var scoresInt;
// var i;
// var highestScore = 0;

// numberOfStudentsString = prompt("Enter the number of students who took the test:");
// numberOfStudentsInt = parseInt(numberOfStudentsString);
// 	console.log(numberOfStudentsInt);



// 	for (i = 1; i <= numberOfStudentsInt; i += 1){

// scoresString = prompt("Please enter the score of student " + i);
// scoresInt = parseInt(scoresString);
// 	console.log(scoresInt);

// 	if (scoresInt > highestScore ){
// 		highestScore = scoresInt;
// 		console.log(highestScore);

// 	}

// }

// 	alert(highestScore + " is the higest score");

console.log("New Problem");

//Write a program to sum the following series:
//The numerator starts at 1 and the denominator starts at 3
//Both the numerator and the denominator increase by 2

var numerator;
var denominator;
var makeAFraction;

var sumOfFractions = 0;

for (numerator = 1; numerator <= 97; numerator += 2){
	denominator = numerator + 2;
	makeAFraction = numerator / denominator;
	
	sumOfFractions = sumOfFractions + makeAFraction; 
}

	
console.log(sumOfFractions);


console.log("New Problem");

//Simulate flipping a coin 10,000 times
//Print out how many heads and how many tails

var flipACoin;
var randomNumber; 
var totalHeads = 0;
var totalTails = 0;



for (flipACoin = 1; flipACoin <= 10000; flipACoin += 1){
   randomNumber =  Math.floor(Math.random() * 2);

	if (randomNumber == 0){

		

 totalHeads = totalHeads + 1;


	}else {

 
 totalTails = totalTails + 1;
		

  }
 


}

console.log("The coin landed on heads " + totalHeads + " times. The coin landed on tails " + totalTails +" times");

console.log("New Problem");
//Generate a random number between 1 and 52 and based on that number print out type of card it is
//Simulate drawing a random card from a deck 
//cards 1 through 13 are hearts
//cards 14 through 26 are spades
//27 to 39 are clubs
//40 to 52 are diamonds
//They all from Ace to 1,2,3...
//You will be using modulo


var randomNumberOfCard = Math.floor(Math.random() * 52);

var cardNumberChosen;
var cardSuitPicked; 

switch (randomNumberOfCard % 13){
	case 1:
	cardNumberChosen = "Ace";
	break;

	case 2:
	cardNumberChosen = "2";

	break;

	case 3:
	cardNumberChosen = "3";
	break;

	case 4:
	cardNumberChosen = "4";
	break;

	case 5:
	cardNumberChosen = "5";
	break;

	case 6:
	cardNumberChosen = "6";
	break;

	case 7:
	cardNumberChosen = "7";
	break;

	case 8:
	cardNumberChosen = "8";
	break;

	case 9:
	cardNumberChosen = "9";
	break;

	case 10:
	cardNumberChosen = "10";
	break;

	case 11:
	cardNumberChosen = "Jack";
	break;

	case 12:
	cardNumberChosen = "Queen";
	break;

	case 0:
	cardNumberChosen = "King";

}



switch (Math.floor(randomNumberOfCard / 13)){

	case 0:
	cardSuitPicked = "hearts";
	break;

	case 1:
	cardSuitPicked = "spades";
	break;

	case 2:
	cardSuitPicked = "clubs";
	break;

	case 3:
	cardSuitPicked = "diamonds";
	break;

	
}

console.log("The card was " + cardNumberChosen + " of " + cardSuitPicked);


console.log("New Exercise")

//Find the largest n such that n to the power of 3  is < 12,000
//Use a while loop to find the largest integer n such that n to the power of 3 is
//less than 12,000 

var n = 1;

while ((Math.pow(n,3)) < 12000){
	n += 1;

}
	n -= 1;
	console.log("The largest n to the power of 3 that is less than 12,000 is " + n);

console.log("New Exercise")

//(Compute the greatest common divisor, a number that can divide two numbers with no remainder)
//First find (or assign)  d to be the minimum of n1 and n2 and then check whether d, d-1, d-2,...
//,2 or 1 is a divisor for both n1 and n2 in this order
//the first such common divisor is the greatest common divisor for n1 and n2

var d;
var n1InputString;
var n2InputString;
var n1;
var n2;

n1InputString = prompt("Enter an integer");
 	n1 = parseInt(n1InputString); 
 	 console.log(n1);

n2InputString = prompt("Enter a second integer");
	n2 = parseInt(n2InputString);
	console.log(n2);

	if(n1>n2){

		d = n2;

	}else {
		d = n1;
	}

for(d;d > 0; d -= 1){

	if (((n1 % d == 0) && (n2 % d == 0))){

		break;

	}
}

console.log(d + " is the greatest common denominator");























