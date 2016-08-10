'use strict';


// we're expecting to see an alert when we click the button


var listener = (function(event){
    
   alert('you clicked the button!');  
document.getElementById("my-btn").addEventListener("click",listener,false)

});

//End of 2


// we're expecting to see the font color of all the paragraphs turn blue




var paragraphs = document.getElementsByClassName('lorem');

for (var i = 0; i < paragraphs.length; i++) {
    var p = paragraphs[i];
    paragraphs.style.color = 'blue';
}


//4
// expect to see an alert

var alertMe = function () {
var myButton = document.getElementById('my-btn');

myButton.addEventListener('click', alertMe);

    alert('hey! you clicked a thing');
}

//5
// the 1 button doesn't work
// the 2 button replaces whatever is in the display
// the 5 button breaks everything
// the clear button doesn't do anything

// food for thought: it looks like an awful lot of duplication in our code for
// selecting and adding an event listener to all the buttons

function clearClicked (e) {
    display.value = '';
}

var display = document.getElementById('display');
var clear   = document.getElementById('clear');

var btn1 = document.getElementById('btn-1');
var btn2 = document.getElementById('btn-2');
var btn3 = document.getElementById('btn-3');
var btn4 = document.getElementById('btn-4');
var btn5 = document.getElementById('btn-5');

btn1.addEventListener('click', function(e){
    display.value = display.value + 1;
});

btn2.addEventListener('click', function(e){
    display.value = display.value + 2;
});

btn3.addEventListener('click', function(e){
    display.value += 3;
});

btn4.addEventListener('click', function(e){
    display.value += 4;
});

btn5.addEventListener('click', function(e){
    display.value += 5;
});

clear.addEventListener('click', clearClicked);

