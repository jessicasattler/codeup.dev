'use strict';

$(document).ready(function(){

	// $('#textfield').keydown(function(){
	// 	alert('.keydown() event fired');
	// });

	// $('#textfield').keypress(function(){
	// 	alert('.keypress() event fired');
	// })

	// $('#textfield').keyup(function(){
	// 	alert('.keyup() event fired');

	// });

	// $('#textfield').on('keydown', function(){
	// 	alert('.on() event fired');
	// });

	// Allow the user to enter the
	//  Konami Code: "↑ ↑ ↓ ↓ ← → ← → b a enter" 
	//  (the return key)

	

	var konami =[38,38,40,40,37,39,37,39,66,65,13];
	var i = 0;

	//increase i by one whenever the right key in the sequency is pressed



		 $(document).keydown(function(event){
		 	// console.log(event.which);
		 	// console.log[i];
		 	//I used the console logs to keep track of the process

		 

		 	if(event.which == konami[i]) {
		 		i+=1;
		 	//event.which indicates which numeric keycode was pressed
		 	//I set my if statement so that if the arrow up is pressed first, to increase i by one 
		 	//i says which key to expect to be pressed next to complete the konami code


 
		 		if(event.which == konami[konami.length-1]){
		 			// alert('You completed the konami');
		 			$('body').css('background-image','url("img/Beethoven2.jpg")');
		 			$('#audio').html('<audio id="BeethovenSymphony" autoplay controls preload="auto"><source src="/js/BeethovenSymphony.mp3" type="audio/mp3"></audio>');
		 			$('h1').html("You just got Rick-Rolled");
		 			i=0;
		 			//this code lets the program know that if the last key in the konami code is pressed
		 			//after all the other keys have been pressed in the correct order then to 
		 			//change the background image 
		 			//play the audio
		 			//change the h1 tag message
		 			//and to reset i back to the beginning of the index 
		 	}


		 	}else {
		 		i = 0;
		 		if (event.which == konami[0]){
		 			i = 1;

		 			//this code says that if the if statement is not true (the user has not pressed the expected
		 			//key for the konami code), then to set i to zero, back to the beginning of the konami code
		 			//index, but if the first key in the konami code is pressed (the up arrow) then to change
		 			//the next expected key to be the key that is in index one
		 		}
		 	}

			});	
		
		

	 $(document).keyup(function(event){
		console.log(event.keyCode);
	});

});