"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.



 var response = prompt("What is your name?");

while (response.length == ""){
	response = prompt ("Please tell me your name")
}
	alert ("Hello " + response)




// TODO: Show an alert message that welcomes the user based on their input.

var userInput = prompt("What day of the week is it today?");

alert( "Oh, yes. Happy " + userInput + "!")

// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.

var pizzaQuestion = confirm("I like pizza. Do you like pizza?")

if (pizzaQuestion == true){
	alert ("I like pizza too!");
}else {
	alert ("Oh, well this is awkward...");
}




