'use strict';

$(document).ready(function(){

	
	 // $('.invisible').css('display','none');

	//Update the page with jQuery to add a link that toggles 
	//the class invisible on and off for all dd elements.
		$('#toggle').click(function(){
		// var showDdElements = $('.invisible').css('display','block');
			$('dd').toggleClass('invisible')
		});

	// Create jQuery code that makes 
	// the first li element in each ul have font-weight: bold
		$('ul').each(function(){

			 $(this).children().first().css('font-weight', 'bold');
			 //by using the "this", we are referencing the first part
			 //of the function, if we just put "ul", it's way too broad
			 //we are talking about working all "ul"'s in the page 
			 //this iterates through the loop one at a time

		});

	// Create jQuery code that adds the 
	// invisible class on the parent ul of any li that is clicked.

		$('li').click(function(){
			$(this).parent().addClass('invisible')


		});
		


});
