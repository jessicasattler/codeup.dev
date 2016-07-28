// ternary -- three

(condition) ? returnIfTrue : returnIfFalse;


// if statement syntax, curly braces, indentation

// DO NOT DO THIS
if (condition)
// do something

// do this instead
// notice the curly brace placement and indentation
if (condition) {
    // do something
}
// same goes for while and for


// control structures: if-else, switch, while, for
// control what code is executed and how many times
// anything can go inside of control structures
if (condition) {
    if (condition) {

    } else {
        for (/*...*/) {
            if (condition2) {

            }
        }
    }
} else {
    while (something) {
        if (somethingElse) {
            for (/*...*/) {

            }
        }
    }
}
