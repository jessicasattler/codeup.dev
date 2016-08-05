(function(){
    "use strict";

    // TODO: Create an array holding the names of the eight planets in our solar system in order, starting closest to the sun.
    var planets = ['Mercury','Venus','Earth','Mars','Jupiter','Saturn', 'Uranus','Neptune'];

    // function for logging the planets array
    function logPlanets() {
        console.log("Here is the list of planets:");
        console.log(planets);
        console.log("---- ---- ---- ----");
    }

    logPlanets();

    console.log('Adding "The Sun" to the beginning of the planets array.');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.

    planets.unshift("The Sun");
    logPlanets();


    console.log('Adding "Pluto" to the end of the planets array.');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    planets.push("Pluto");
    logPlanets();

    console.log('Removing "The Sun" from the beginning of the planets array.');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    planets.shift();
    logPlanets();

    console.log('Removing "Pluto" from the end of the planets array.');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    planets.pop();
    logPlanets();

    console.log('Finding and logging the index of "Earth" in the planets array.');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    var index = planets.indexOf("Earth");
    console.log(index);

    console.log('Using splice to remove the planet after "Earth".');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    var index = planets.indexOf('Mars');
    var removed = planets.splice((index),1);
    // var removed = planets.splice(planets.indexOf('Mars'),1);
    console.log(removed)
    logPlanets();

    console.log('Using splice to add back the planet after "Earth".');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
     var index = planets.indexOf("Earth");
     planets.splice((index)+1,0,"Mars");
     // planets.splice(planets.indexOf('Earth') + 1,0,"Mars");
     //var remove = planets.splice(3,1) but this is not as robust as my original method
     //that we have right now
    
    logPlanets();

    console.log("Reversing the order of the planets array.");
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    planets.reverse();
    logPlanets();

    console.log("Sorting the planets array.");
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    planets.sort();
    logPlanets();


    //write a function that takes an array and returns  a random element from that array

    var myArray = ['Leonardo','Rafael','Sofia','Elena'];


    // console.log(myArray[randomIndex]);


    function getRandomElement (arr) {
    var randomIndex = Math.floor(Math.random()* arr.length);
      
      return arr[randomIndex];
       
    }

    // getRandomElement([1,2,3,4]); //should return 1 - 4 at random
    console.log(getRandomElement(myArray));

    //converts a string that represents a 12 hour time to a string that represents 
    //a 24 hour time

    function twelveToTwentyFour (timeString){
         timeString = timeString.split(":")
        
    }

    console.log(twelveToTwentyFour(12:30pm))
    twelveToTwentyFour('4:30 pm');//Should return '16:30'
    twelveToTwentyFour ('12:22 pm');//should return '12:22'
    twelveToTwentyFour ('12:45 am');//should return '0:45'
    twelveToTwentyFour ('9:00 am');//should return '9:00'
    



})();
