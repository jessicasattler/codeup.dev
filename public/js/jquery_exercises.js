'use strict';

// window.onload = function(){
// 	alert("The page has finished loading!");
// }

//or even better
$(document).ready(function() {
     var contents = $('#codeup');
     alert(contents.html());


     var obtainID = $('#paragraph');
     alert(obtainID.html());

     var obtainID2 = $('#finalMessage');
     alert(obtainID2.html());

  
});