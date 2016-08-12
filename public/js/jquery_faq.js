'use strict';

$(document).ready(function(){

	

	


		 // $('.invisible').css('display','none');

	//Update the page with jQuery to add a link that toggles 
	//the class invisible on and off for all dd elements.
		$('#toggle').click(function(){
		// var showDdElements = $('.invisible').css('display','block');
			$('dd').toggleClass('invisible')
		});


});
