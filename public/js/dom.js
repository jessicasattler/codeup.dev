'use strict';
var navbarLinkElements = document.getElementsByTagName('a');
//console.log(navbarElement);

var delay = 2000;
setTimeout(function () {
	for (var i = 0; i<navbarLinkElements.length; i++){
		var link = "http://mylittlepony.com";
		navbarLinkElements[i].setAttribute("href",link);
	}
	// navbarLinkElements.forEach(function(element){
	// 	console.log(element);
	// });

}, delay);

// navbarElement.innerHTML = "";
//setTimeout(what's going to happen, after how long)