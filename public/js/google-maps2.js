'use strict';

  (function() {
        

        // Set our map options
        var mapOptions = {
            // Set the zoom level
            zoom: 10,

            // This sets the center of the map at our location
            center: {
                lat:  29.610268,
                lng: -98.497716
            },



            //Show this map in satellite view
            mapTypeId: google.maps.MapTypeId.TERRAIN

        }

        // Render the map
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
        

        //Create latitude lat and long for our marker position
		// var kumori = {lat: 29.610268, lng: -98.497716 };

  //       // Add the marker to our existing map
		// var marker = new google.maps.Marker({
  //   	position: kumori,
  //  	 	map: map
		// });


		// // Create a new infoWindow object with content
		// var infowindow = new google.maps.InfoWindow({
  //   	content: "Chamagauchas:<br> The perfect place for special occassions.<br>Their steak selection is exquisite,<br>but their fried bananas are the true reason why I go."
		// });

		// // Open the window using our map and marker
		// infowindow.open(map, marker);

    

    //Before we get things back like an address, we must first get a new instance of the Geocoder() 
    //object.
    //The Geocoder object has a method .geocode
   var geocoder = new google.maps.Geocoder();


   //Set our address to to geocode
  
   var address = "San Antonio, TX";
   // var address = "300 Alamo Plaza, San Antonio, TX, 78205";

   var addressLatLng;

   geocoder.geocode({"address": address }, function(results, status){

   	//Check for a succesful result
   	if (status == google.maps.GeocoderStatus.OK){
   		var lat = results[0].geometry.location.lat();
   		var lng = results[0].geometry.location.lng();

   		addressLatLng = {"lat":lat, "lng":lng};

   		console.log(results[0]);
   		console.log(addressLatLng);
   		//Recenter the map over the address
   		map.setCenter(results[0].geometry.location);

   		//Add the marker to our existing map
   		var marker = new google.maps.Marker({
   			position: addressLatLng,
   			map:map
   		})
   	}
   })

   //Init geocoder object
  //  var geocoder = new google.maps.Geocoder();

  //  //Geocode our address
  //  geocoder.geocode({"address":address}, function(results,status){

  //  		//Check for a succesful result

  //  		if (status == google.maps.GeocoderStatus.OK){

  //  			//Recenter the map over the address
  //  			map.setCenter(results[0].geometry.location);
		// } else{

		// 	//Show an error message with the status if our request fails
		// 	alert("Geocoding was not succesful - STATUS: "+ status);
		// }
  //  });



   })();
