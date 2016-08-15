'use strict';

$(document).ready(function(){

	
	 // $('.invisible').css('display','none');

	//Update the page with jQuery to add a link that toggles 
	//the class invisible on and off for all dd elements.
		$('#toggle').click(function(){
		
			$('dd').toggleClass()
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

		// $('li').click(function(){
		// 	$(this).parent().hide();


		// });
		
	// Update the h3 and ul lists to work like the example above. 
	// Clicking the h3 should show or hide the associated ul list items.
	//  Use fading effects for hiding and showing 
	// the list items. Discard code that hid list when li was clicked.

		// $('h3').click(function(){
		// 	$('ul').children().slideToggle();
		// })

		// or 
		$('h3').click(function(){
			$(this).next().slideToggle();
		})

		


});
