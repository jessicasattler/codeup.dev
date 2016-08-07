'use strict';

//make a list of breakfast foods
//using a foreach loop, turn the elements of that list into an unordered list 
//return this as a string 

var breakfastFood = ["bacon", "sausage", "eggs","cereal","muffins" ];

var breakfastString = "<ul>"
	breakfastFood.forEach(function(element,index,array){

	breakfastString = breakfastString + "<li>" +element+ "</li>"

});

	breakfastString = breakfastString + "</ul>"

	console.log(breakfastString);



//make a list of words that start with "w" and "j"
//using a forEach loop, put  the elements of that list into two 
//separate arrays depending
//on their first letter
//console.log both arrays

var wordsStartWithJAndW = ["Whitney","Jessica", "Whitley", "Jason", "Wesley","Wrappers", "Jogging"];
var wordsStartWithW = [];
var wordsStartWithJ = [];
wordsStartWithJAndW.forEach(function(element, index, array){

	if (element.charAt(0)== "W"){
		wordsStartWithW.push(element); 
	}else{
		
		wordsStartWithJ.push(element);
	} 

});

console.log(wordsStartWithW);
console.log(wordsStartWithJ);


//Use a list provided by Whitney 
//Go through that list and if the name is in the Sattler family, console.log("Sattlers")
//If the name is in the Campos family, console.log("Campos") 
//If the name is in both, console.log ("Campler")
//If the name is in neither one, console.log("Stranger");

var Sattlers = ["Whitney", "Jessica", "Nathaniel", "Peter", "Klara", "Jeramey", "Kelda", "Jeff"];
var Campos = ["Whitney", "Jessica", "Jocelyn", "Ericka", "Pedro", "Laura"];

var test = ["Jonathan","Jessica","Clarence","Pedru","Peter","Laura","Lexi","Jocelyn","Batman"];

test.forEach(function(element,index,array){
	 if(Sattlers.indexOf(element) >= 0 && Campos.indexOf(element) >= 0 ){
		console.log("Campler");
	}else if(Sattlers.indexOf(element) >= 0){
		console.log("Sattlers");
	}else if(Campos.indexOf(element) >= 0){
		console.log("Campos");

	}else{
		console.log("Stranger");
	}
});




