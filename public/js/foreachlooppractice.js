"use strict";

//make an array called shopping 
//produce a string that's an acronym of the items of the list
//array.charAt(0) gives us the first letter of each item

var shopping = ["Milk", "Toothpaste","Fish","Grapes","Cereal"];

var firstLetter = ""//an empty "" (empty string) is the equivalent of zero
shopping.forEach(function(element, index, array){
	
	
	 firstLetter = firstLetter + element.charAt(0);

});
   console.log(firstLetter);

	console.log("End of Exercise");

//make an array of numbers
//use a foreach loop to crete a second new array 
//if the element of the first array is even then divide it by two and 
//put it into the new array 
//if the element of the first array is odd, then multiply it by two


var numbers = [3,4,6,8,11,34,67,90,45];

var newArray = []

numbers.forEach(function(element, index, array){

	if (element % 2 == 0){
		var divideBy2 = element / 2;
		newArray.push(divideBy2);

	}else{
		var multiplyBy2 = element * 2;
		newArray.push(multiplyBy2);
	}


});

console.log(newArray);
