'use strict';


var myString = 'codeup';

var stringsAsArray = myString.split('');

var arrayReversed = stringAsArray.reverse();

var reversedString = arrayReversed.join('');

console.log(reversedString)

// sum the digits in a number 
// turn my number into a string
// turn that string into an array of digits
// loop through that array and add together the digits


function sumTheDigits(number){


var numberString = number.toString();
var numberArray = number.String.split('');
var sum = 0;

numberArray.forEach(function(number){
	sum += parseInt(number);

});

return sum;

}