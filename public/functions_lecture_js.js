'use strict';

// what a function is
// how to use a function
// how to get something out of a function
// how to pass something in to a function

// function: reusable block of code
// takes an input(s), gives us an output
// syntax -- function name (params) { body }
//   - defines the function *does not* run the code in the body
//   - syntax errors will be caught, not logical ones 

function doSomething () {
    1 + 1;
    console.log('happy monday guys!');
}

// function call
// syntax -- functionName(params)
//   - runs the code in the function
//   - note the parentheses

doSomething();

// values can be returned out of a function
// a function call will be replaced with its return value
// function calls without a return statemtent return 'undefined'

1 + 2; // -> 3

function returnThree(){
    return 3;
}

returnThree(); // -> 3

// function calls are an expression, i.e. they can be part of a statement

var six = 3 + (1 + 2);
// same as
var six = 3 + returnThree();

// functions can take an input called an argument, or parameter
// parameters are valid identifiers, separated by commas
// parameter names only exist inside the function, have no relation (other than
// ones we assign by convention) to other variable names

function addTwo (number) {
    var result = number + 2;
    return result;
}

function multiply (x, y) {
    return x * y;
}

function yell (phrase) {
    return phrase.toUpperCase() + '!';
}

// this phrase is totally different than the phrase parameter in the function
var phrase = 'happy monday';
console.log(yell(phrase));

////////////////////////////////////////////////////////////////////////////////
// Refactor
////////////////////////////////////////////////////////////////////////////////

// functions can interact with eachother
// multiple small functions are encouraged
// refactor code to use functions

var phrase = 'So long, and thanks for all the fish.';

// pseudocode
while (/*there is a space in the string*/) {
    // remove the space
}

while (phrase.indexOf(' ') !== -1) {
    phrase = phrase.replace(' ', '');
}


console.log(phrase);

// refactored to 

function stringContains (needle, haystack) {
    index = haystack.indexOf(needle);
    return index !== -1;
}

function hasASpace (string) {
    return stringContains(' ', string);
}

function removeWhitespace (string) {
    while (hasASpace(string)) {
        string = string.replace(' ', '');
    }
    return string;
}
