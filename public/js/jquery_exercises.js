'use strict';

// window.onload = function(){
// 	alert("The page has finished loading!");
// }

//or even better
$(document).ready(function() {

	//code for Id Exercise 
     // var contents = $('#codeup');
     // alert(contents.html());


     // var obtainID = $('#paragraph');
     // alert(obtainID.html());

     // var obtainID2 = $('#finalMessage');
     // alert(obtainID2.html());

     //code for Class Exercise
     // $('.codeup').css('border', '1px solid red');

     //code for Element Selector
    //  $('li').css('font-size', '20px');
  		
  	 // $('h1, p , li').css('border', '1px solid yellow');

  	 // var obtainH1 = $('h1');
  	 // alert(obtainH1.html());

  	 //code for multiple selector :
  	
      // $('.codeup, p').css('background-color', '#FF0');

      // $('*').css('border', '1px solid #F00');

      //code for Mouse Events:
	// Add jQuery code that will change the 
	// background color of a h1 element when clicked

	$('h1').click(function(){
		$(this).css('background-color', 'blue');
		//this refers to the thing you just clicked
	});

	//Make all paragraphs 
	//have a font size of 18px when they are double clicked

	$('p').dblclick(function(){
		$('p').css('font-size','18px');
		//we do the 'p' instead of 'this' because we want all the paragraphs,
		//not just the one we doubleclicked on
		

	});

	//Set all li text color to red when the mouse 
	//is hovering, reset to white when it is not

	$('li').hover(
		function(){
			$(this).css('color', 'red');
		},
		function(){
			$(this).css('color','white');
		}

	);
});


