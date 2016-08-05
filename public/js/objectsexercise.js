

var student = {
    "name": "Bob",
    "pizzaPreference": "black olives and mushrooms",
    "grades": {
        "html": [90, 77],
        "css":  [82],
        "js":   [91, 90, 89]
    },
    "languages": [
        "html", "css", "js"
    ],
    "cars": [
        {
            "make":  "honda",
            "model": "civic",
            "parkingPermits": [
                {"name": "Travis Park Garage", "isActive": true},
                {"name": "Apartment Complex",  "isAvcive": false}
            ]
        },
        {
            "make":  "honda",
            "model": "accord",
            "parkingPermits": []
        }
    ]
};

//   Task                                                        Output
//   ----                                                        ------
// student.cars[1].make to get the second item in the array
//get Bob's name .............................................. 'Bob'
console.log(student.name)
// get Bob's pizzaPreference ................................... 'black olives and mushrooms'
console.log(student.pizzaPreference)
// get Bob's 2nd language ...................................... 'css'
console.log(student.languages[1])
// get Bob's grades for html ................................... [90, 77]
console.log(student.grades.html)
// get Bob's last grade for javascript ......................... 89
console.log(student.grades.js[student.grades.js.length-1])
//this is how we get the last grade even if his grade changes, it will always work on the last one
// get Bob's first language .................................... 'html'
console.log(student.languages[0])
// get the make of Bob's second car ............................ 'honda'
console.log(student.cars[1].make)
// number of parking permits for Bob's civic ................... 2
console.log(student.cars[0].parkingPermits.length)
//                           for Bob's accord .................. 0
console.log(student.cars[1].parkingPermits.length)
// find out if Bob's parking permit for travis park is active .. true
console.log(student.cars[0].parkingPermits[0].isActive)
// find the average of Bob's grades for html (your solution should   not break if more items are added to the grades.html array)
    

var studentGrade = 0;

for (var i = 0; i <= student.grades.html.length-1 ; i += 1){
    var studentGrade = studentGrade + student.grades.html[i];
   
}
    var htmlGradeAverage = ((studentGrade )/ student.grades.html.length)

console.log(htmlGradeAverage)

//arrays are great with lists but objects are great with lists with identifiers of what that actual value is 


//or if I want to use a forEach loop

var htmlGrades = student.grades.html;
var total = 0;

htmlGrades.forEach(function(grade){
    total = total + grade;
});

console.log(student.name + " made the folllowing grade in HTML: " + (total/ htmlGrades.length) + "!" );

//or

function getAverageGrade(arrayOfNumbers){
    var numberofGrades = arrayOfNumbers.length;
    var total = 0;
    var average;

    arrayOfNumbers.forEach(function(grade){
        total += grade;
    });
    average = total / numberofGrades;
    return average 
}

