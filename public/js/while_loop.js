
    "use strict";
        // JavaScript code goes here
//         An ice cream seller can't go home until she sells all of her cones. 
// Write a JS program that generates a random number between 
// 50 and 100 representing the amount of cones to sell. Your code 
// should generate numbers between 1 and 5, simulating the amount of 
// cones being bought by her clients. Use a do-while loop to log to the 
// console the amount of cones sold to each person. This is how you get 
// the random numbers.

// // This is how you get a random number between 50 and 100
// var allCones = Math.floor(Math.random() * 50) + 50;
// // This is how you get a random number between 1 and 5
// var cones = Math.floor(Math.random() * 5) + 1;
// The output should be similar to the following:

// 5 cones sold...  // if there are enough cones
// Cannot sell you 6 cones I only have 3...  // If there are not enough cones
// // Yay! I sold them all! // If there are no more cones
// 	var allCones = Math.floor(Math.random() * 50) + 50;;



// 	 do{

// 	var cones= Math.floor(Math.random() * 5) + 1
// 	var conesLeft = allCones - cones
		
// 		if (allCones >= conesLeft){
// 			console.log("I have " + cones " left.");
// 		}
	
// 	console.log("The number of cones I have is: " + allCones);
	

	 	


// 		if (cones < allCones){
// 			console.log ("I only have " + allCones + " left. I cannot sell you " + cones + " cones");
// 	// 	// // the if statement tells us that if the amount of cones we have is less than all the cones we have left then 
// 	// 	// say , I only have x number of cones left, I can't sell you that amount of cones because it's more than what I have 
			

// 	 	} else if (allCones == cones){
// 	 		console.log("I sold all my cones.")
// 	//  		// this says that when the amount of cones we have left is equal to the amount of cones a customer wants, then you can say
// 	//  		// yay, I sold all my cones
// 	 	}


// 	 }

// 	while (allCones > cones);

	// this says to do this while (or until) all the amount of cones we have left 
	// is greater than the amount of cones a customer wants

// // Use inline JavaScript to create a while loop that uses console.log() to create the output shown below.

//  2
//  4
//  8
//  16
//  32
//  64
//  128
//  256
//  512
//  1024
//  2048
//  4096
//  8192
//  16384
//  32768
//  65536

// var i = 2;

// while (i < 65537) {

// 	console.log (i);
// 		i *= 2;
// 		//same as i = i * 2
// }
    









// var allCones = Math.floor(Math.random() * 50) + 50;
// var cones;

// //do sell cones
// do{

// 	//If I have enough cones >=
// 	// subtract cones from allCones
// 	//console.log how many cones we sold
	
//  	cones = Math.floor(Math.random() * 5) + 1;

// 	if(allCones >= cones) {
// 		//update inventory to be old inventory minues what we just sold
// 		allCones = allCones - cones;
// 		console.log("I sold " + cones +  " ice cream cones!");
// 	} else {
// 		console.log ("Cannot sell you" + cones + ". I only have" + allCones);
// 	}

// 	//else
// 	console.log("Cannot sell you " + cones + ". I only have" + allCones);



// }while (allCones > 0);
// console.log("I sold them all")






 2
 4
 8
 16
 32
 64
 128
 256
 512
 1024
 2048
 4096
 8192
 16384
 32768
 65536

var i = 2;

while (i < 65537) {

	console.log (i);
		i *= 2;
		//same as i = i * 2
}












 	