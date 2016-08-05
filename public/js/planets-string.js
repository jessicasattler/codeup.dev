(function(){
"use strict";



    var planetsString = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune";

    // TODO: Convert planetsString to an array, save it to planetsArray.
    var planetsArray = planetsString.split('|');

    console.log(planetsArray);

    // TODO: Create a string with <br> tags between each planet. console.log() your results.
    var planetsStringWithBrTags = planetsArray.join('<br>');

    console.log(planetsStringWithBrTags);
    //       Why might this be useful?
    //      Using <br> tags may be useful if you want to eventually have your string
    //      have breaks in between them and maybe turn it into an array that will list
    //       the items from top to bottom versus left to right in an HTML document.  

    // Bonus: Create a second string that would display your planets in an undordered list.
    //        You will need an opening AND closing <ul> tags around the entire string, and <li> tags around each planet.
    //        console.log() your results.

    var unorderedPlanetsList = ["Mercury","Venus","Earth","Mars","Jupiter","Saturn","Uranus","Neptune"];
    unorderedPlanetsList.unshift("<ul>");
        console.log(unorderedPlanetsList);

    // unorderedPlanetsList.unshift()
    // unorderedPlanetsList.push("Neptune </ul>");

    unorderedPlanetsList.splice(unorderedPlanetsList.indexOf('Mercury'),0,"<ul> Mercury");
    unorderedPlanetsList.splice(unorderedPlanetsList.indexOf("Neptune"),1,"Neptune </ul>");
    unorderedPlanetsList.shift()
    var index = unorderedPlanetsList.indexOf('Mercury');
    var removed = unorderedPlanetsList.splice((index),1)
    console.log(unorderedPlanetsList);





        //find index of last element
     // var index= unorderedPlanetsList.indexOf("Neptune");


    //  var unorderedPlanetsList = unorderedPlanetsList.splice((index)+1,0,"</ul>");

    // // unorderedPlanetsList.push("</ul>");


    // // var index = planets.indexOf("Earth");
    // //  planets.splice((index)+1,0,"Mars");

    //     console.log(unorderedPlanetsList);
    //     var unorderedPlanetsString = unorderedPlanetsList.join('<li>');
    //     // console.log(unorderedPlanetsString);



// document.getElementById("output").innerHTML = unorderedPlanetsString;

//Bonus: Create a second string that would display your planets in an undordered list.
    //        You will need an opening AND closing <ul> tags around the entire string, and <li> tags around each planet.
    //        console.log() your results.
//start with planetsArray of planetsString

// <ul><li>Mercury</li><li> Venus</li> <li>Earth</li><li> Mars</li><li> Jupiter</li><li> 
// Saturn</li><li> Uranus</li><li> Neptune</li></ul>

 
var planetsStringTwo = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune";

var planetsArrayTwo = planetsStringTwo.split("|");

var planetsString3 = planetsArrayTwo.join("</li><li>");

console.log(planetsString3);

planetsString3 = "<ul><li>" + planetsString3 + "</li></ul>"





// var newString = "<ul><li>"
// newString += planetsArray.join("</li><li>");
// newString = newString +  "</li></ul>"

// //or 
// var newString = "<ul></ul>"


// console.log (newString)

})();

