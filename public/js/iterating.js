(function(){
    "use strict";

    // TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.
var names = ["Sarah","Carla","John","Tristan"];
    // TODO: Create a log statement that will log the number of elements in the names array.

console.log(names.length);
    // TODO: Create log statements that will print each of the names array elements individually.
    for (var i = 0; i < names.length; i += 1){
    	console.log(names[i]);
    }
//Challenge
//make a new array of the names in reverse order

 // console.log (names.reverse());

 // var namesInReverseOrder = names.reverse();

 //or do it in reverse


 for(var i = names.length - 1; i >= 0; i -= 1){
 	console.log(names[i]);

 // }
 names.forEach(function(element, index, array){
 	console.log("The name at index " + index + " is: " + element);
 });

//forEach are good to use for arrays 

})();
