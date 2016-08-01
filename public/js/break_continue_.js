'use strict'
//This will evaluate what house we are in

// var house = "Griffendor"

// switch(house){
// 	case "Griffendor":
// 	console.log("Known for the integrity, strength, and courage.");
// 	break;

// 	case "Slytherin":
// 	console.log("Known for their ambition");
// 	break;

// 	case "Hufflepuff":
// 	console.log("Being red shirts");
// 	break;

// 	case "Ravenclaw":
// 	console.log("Smart butts");
// 	break;
// }

// var random = Math.floor((Math.random()*100)+1);

// console.log('Random stopping point is: ' + random);

// for (var i = 1; i < 100; i++) {

//     console.log('Loop counter is: ' + i);

//     if (random == i) {

//         console.log('We have reached the random stopping point: break!');

//         // use the break keyword to exit from the while loop
//         break;

//         // nothing after the break will get processed
//         console.log('You will never see this line.');
//     }
// }

var randomNumber = Math.floor((Math.random()*50)+1);
//creates a random number between 1

 	console.log("Random odd number to skip is: " + randomNumber)

for (var i = 1; i < 50; i++) {

    if (i % 2 == 0) {
        
        // this is saying that if i is even, then
        //skip the rest of the loop and continue with the next iteration (meaning go back to the top and
        //run again until you get i be an odd number)

        continue;
    }

    if (i == randomNumber){
    	console.log('Yikes! Skipping number ' + randomNumber);
    	continue;

    }

    console.log('Here is a lovely odd number: ' + i);

     
    
 }

