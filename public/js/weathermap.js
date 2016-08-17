(function(){
'use strict';
	const myAPIKey = "bc70679db56ba9368d4c85b48da30cf3";


   // $("#coordinates").click(function(event){
   // 		latitude = $("#latitude").val();
   // 		longitude = $("#longitude").val();
   		
   // 		$("#posts").html("");
   // 		$("#posts2").html("");
   // 		$("#posts3").html("");
   // 		map.setCenter({lat: parseFloat(latitude), lng: parseFloat(longitude)});
   // 		getAnotherRequest();

   // });
//#coordinates is to get the coordinates that the user inputs when we click, 
//which calls the function
//the variables "latitude" and "longitude" give us the coordinates the user inputs
//the $("#posts").html("") and the rest of posts 2 and 3 clear the information in the boxes 
//when we call the function
//we center the map by the latitude and longitude the user chooses
//since the request only runs once per request, in order to see the new changes we have
//to get another request
//only use the previous code if we want to manually put in the coordinates, uncomment out
//the inputs on the html

  

   var latitude = 29.423017;
   var longitude = -98.48527;
   //so that when we load the page something shows up on the screen, we set the
   //coordinates of San Antonio, Tx as default

var getAnotherRequest = function(){
$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
    APPID: myAPIKey,
    // q: "San Antonio, TX",
    lat:    latitude,
    lon:   longitude,

    units: "imperial"
}).done(function(data) {
    console.log(data);
    //first box
    var date = new Date(data.list[0].dt  * 1000)
    $("h3").html(data.city.name)
    $("#posts").append(date.toLocaleString());
    $("#posts").append("<h4>"+"Max & Min Temp:"+ "<br>"+ parseInt(data.list[0].temp.max)+ "°"+"/"+ parseInt(data.list[0].temp.min) + "°" + "</h4>");
 	$("#posts").append("<h4>"+ "Pressure: " + data.list[0].pressure + "</h4>" );
	$("#posts").append("<h4>"+ "Humidity:  " + data.list[0].humidity + "</h4>");
	//second box
	var dateForSecondDay = new Date(data.list[1].dt  * 1000)
	$("#posts2").append(dateForSecondDay.toLocaleString());
	$("#posts2").append("<h4>"+"Max & Min Temp:"+ "<br>"+ parseInt(data.list[1].temp.max)+ "°"+ "/"+ parseInt(data.list[1].temp.min) + "°" + "</h4>");
	$("#posts2").append("<h4>"+ "Pressure: " + data.list[1].pressure + "</h4>" );
	$("#posts2").append("<h4>"+ "Humidity:  " + data.list[1].humidity + "</h4>");
	//third box
	var dateForThirdDay = new Date(data.list[2].dt  * 1000)
	$("#posts3").append(dateForThirdDay.toLocaleString());
	$("#posts3").append("<h4>"+"Max & Min Temp:"+ "<br>"+ parseInt(data.list[2].temp.max)+"°"+ "/"+ parseInt(data.list[2].temp.min) + "°" + "</h4>");
	$("#posts3").append("<h4>"+ "Pressure: " + data.list[2].pressure + "</h4>" );
	$("#posts3").append("<h4>"+ "Humidity:  " + data.list[2].humidity + "</h4>");
}).fail(function(xhr, err, msg){
	alert('something went wrong');

});

};
   getAnotherRequest();


        // Set our map options
       	var mapOptions = {
            // Set the zoom level
            zoom: 10,

            // This sets the center of the map at our location
            center: {
                lat:  latitude,
                lng: longitude
            },



            //Show this map in satellite view
            mapTypeId: google.maps.MapTypeId.TERRAIN

        }

        // Render the map
   		 var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
        
   		map.addListener("click",function(event){
   			latitude = event.latLng.lat;
   			longitude = event.latLng.lng;

   			$("#posts").html("");
   			$("#posts2").html("");
   			$("#posts3").html("");

   			getAnotherRequest();
   			map.setCenter(event.latLng);

   			marker.setPosition(event.latLng);
   		 });




        // Add the marker to our existing map
		var marker = new google.maps.Marker({
    	position: {
                lat:  latitude,
                lng: longitude
            },
   	 	map: map,

   	 	animation: google.maps.Animation.DROP
		});

		




})();