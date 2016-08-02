'use strict';

function sayHello (name) {
   var hello = 'hello ' + name;
    return hello; 
}

console.log(sayHello('zach'));

// expect to see 'hello zach' in the console

// ----------------------------------------------------------------------------

function sayHelloToEveryoneExceptZach (name) {

    if (name == 'zach') {
        return('goodbye');
    } else {
        return('hello ' + name);
    }
}

console.log(sayHelloToEveryoneExceptZach("Ryan"));

// expect to see 'hello Ryan' in the console

// ----------------------------------------------------------------------------

// returns a random number between 1 and 100
function getRandomNumber () {
    return Math.floor(Math.random() * 100) + 1;
}

console.log(getRandomNumber());
    console.log("------");

//returns true if number is odd, otherwise false
function isOdd (number) {
    if(number % 2 == 1){

    return true;

    } else{
    return false;

    }
}
console.log(isOdd(4));



var rand = getRandomNumber();

if (isOdd(rand)) {
    console.log (rand + ' is odd');
} else {
    console.log(rand + 'is not odd');
}

console.log(isOdd(rand));

// expect to see '4 is not odd'

// expect to see '4 is not odd'

// ----------------------------------------------------------------------------

for (var i = 1; i <= 10; i += 1) {
    console.log(i);
}

// expect to see 1 through 10

// ----------------------------------------------------------------------------

for (var i = 10; i >= 1; i -= 1) {
    console.log(i);
}

// expect to see 10 through 1

// ----------------------------------------------------------------------------

function sum(x, y) {
    return x + y;
}


console.log(sum(3,5));

// expect to see 8

//the following also works for returning a boolean value and reducing redundancy
//function isOdd(number){
//     return number % 2 == 1;
// }

// var userInput = prompt('enter something');
// alert('You entered: '+ userInput);




