'use strict';
//HTML
// put 3 inputs on the page
//put butons on the screen
//thisInput = document.getElementById('leftInput').

//Tasks
//button elements, divs, a
//thisElement.innerText or innerHTML

//start with console.logging every number/button w/ an event listener
//move into writing numbers into the left input

//bugs/concerns:
//is the value a number or a string?parseFloat()
//each time you hit a number, the input is replaced by, not appended with the new
//number 
//var display = document.getElementById("leftInput") value
//display = display + newValue

//as soon as we hit an operator (+,-,*,/,etc..) we need our "focus"(maybe use
//an attribute)
//to point to the rightInput
//conditionals that check if leftInput has something if the operatorInput has 
//something
//undefined, getting NaN, divide by zero


//This calculator will use HTML buttons for its inputs, and three text input 
//fields for handling its data.
//When  a user presses the number keys, their value is inserted into the first input 
//("left operand")


//Once a user presses an operator button(+,-,*,or /) it gets put into the middle input

//After an operator is selected, numbers are now entered into the last input
//("right operand").

//Finally, the user presses = , and the calculation is performed with the result being
//inserted into the first input again.
//The operator is maintained so that the user can quicly repreat the operation with 
//following operand(s).

//Pressing C brings everything back to the initial state.

// You will build a JavaScript calculator 
// similar to the example shown above. 
//You can lay it out and design it however you like, but putting your data in three separate input fields (left operand, operator, right operand) will be essential. Use one or more click event listeners on the buttons to interact with your application. You can add readonly to your 
// input fields to ensure the user does not accidentally type into them.
