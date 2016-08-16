(function(){
'use strict';
	const myAPIKey = "bc70679db56ba9368d4c85b48da30cf3";
	//it's a matter of preference to put the key in const

// function addBlogPost(blogss){
// 			blogss.forEach(function(blog){
// 				var content = "";
// 				content += "<h2>" + blog.title + "</h2>";
// 				content += "<h5>" + blog.content + "</h5>";
// 				content += "<h6>" + blog.categories + "</h6>";
// 				content += "<h4>" + blog.date + "</h4";

// 				$('#posts').append(content);
// 			})
// 		}

	// function addWeather(weather){
	// 	for (var i = 0; i < weather.length; i += 1){
	// 		var content = "";
	// 		content += weather.clouds ;

	// 		$('#posts').append(content);
	// 	}
		
	// }
//http://api.openweathermap.org/data/2.5/weather
//weather forecast for the day

// $.get("http://api.openweathermap.org/data/2.5/weather",{
// 		APPID: myAPIKey,
// 		q: "San Antonio, TX",
// 		units: "imperial"
// }).done(function (data){
// 	console.log(data);
// 	$("#posts").append("<h2>"+ data.main.temp_max + "/" + data.main.temp_min + "</h2>");
// 	$("#posts").append("<h4>"+ "Pressure: " + data.main.pressure + "</h4>" );
// 	$("#posts").append("<h4>"+ "Rain:  " + data.weather[0].description+ "</h4>");
// 	$("#posts").append("<h4>"+"Wind Speed:  "+ data.wind.speed +"</h4>");
// 	console.log(data.name)
// 	console.log(data.weather[0].description)

// }).fail(function(xhr, err, msg){
// 	alert('something went wrong');
// })
   var latitude = $('#latitude').val()
   console.log(latitude)


$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
    APPID: myAPIKey,
    // q: "San Antonio, TX",
    lat:    29.423017,
    lon:   -98.48527,
    units: "imperial"
}).done(function(data) {
    console.log(data);
    var date = new Date(data.list[0].dt  * 1000)
    $("#posts").append(date.toLocaleString());
    $("#posts").append("<h4>"+"Min & Max Temp:"+ "<br>"+ parseInt(data.list[0].temp.max)+ "/"+ parseInt(data.list[0].temp.min)  + "</h4>");
 	$("#posts").append("<h4>"+ "Pressure: " + data.list[0].pressure + "</h4>" );
	$("#posts").append("<h4>"+ "Humidity:  " + data.list[0].humidity + "</h4>");
	//second box
	var dateForSecondDay = new Date(data.list[1].dt  * 1000)
	$("#posts2").append(dateForSecondDay.toLocaleString());
	$("#posts2").append("<h4>"+"Min & Max Temp:"+ "<br>"+ parseInt(data.list[1].temp.max)+ "/"+ parseInt(data.list[1].temp.min)  + "</h4>");
	$("#posts2").append("<h4>"+ "Pressure: " + data.list[1].pressure + "</h4>" );
	$("#posts2").append("<h4>"+ "Humidity:  " + data.list[1].humidity + "</h4>");
	//third box
	var dateForThirdDay = new Date(data.list[2].dt  * 1000)
	$("#posts3").append(dateForThirdDay.toLocaleString());
	$("#posts3").append("<h4>"+"Min & Max Temp:"+ "<br>"+ parseInt(data.list[2].temp.max)+ "/"+ parseInt(data.list[2].temp.min)  + "</h4>");
	$("#posts3").append("<h4>"+ "Pressure: " + data.list[2].pressure + "</h4>" );
	$("#posts3").append("<h4>"+ "Humidity:  " + data.list[2].humidity + "</h4>");
}).fail(function(xhr, err, msg){
	alert('something went wrong');
});





})();