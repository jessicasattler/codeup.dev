"use strict";

// we're expecting to see an alert when we click the button


	var buttonAlert = function(e){
    alert('you clicked the button!');


};
document.getElementById('my-btn').addEventListener("click",buttonAlert,false);


// we're expecting to see the font color of all the paragraphs turn blue

var paragraphs = document.getElementsByClassName('lorem');

for (var i = 0; i < paragraphs.length; i++) {
    var p = paragraphs[i];
    p.style.color = 'blue';
}
//
// expect to see an alert


var alertMe = function (e) {
    alert('hey! you clicked a thing');
}
var myButton = document.getElementById('my-btn2');
myButton.addEventListener('click', alertMe,false);

//// the 1 button doesn't work
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

var i;
var btn = [btn1,btn2,btn3,btn4,btn5];
for (i = 0; i <= 4;i+=1){
	btn[i].addEventListener("click",function(e){
		display.value += event.target.innerHTML ;
	});
}


// btn1.addEventListener('click', function(e){
//     display.value += 1;
// });

// btn2.addEventListener('click', function(e){
//     display.value += 2;
// });

// btn3.addEventListener('click', function(e){
//     display.value += 3;
// });

// btn4.addEventListener('click', function(e){
//     display.value += 4;
// });

// btn5.addEventListener('click', function(e){
//     display.value += 5;
// });

clear.addEventListener('click', clearClicked);
