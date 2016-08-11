function addMarkerAndInfoWindow(place) {
    var marker = new google.maps.Marker({
        position: place.geometry.location,
        map: map
    });

    var infowindow = new google.maps.InfoWindow({
        content: place.formatted_address
    });
    
    infowindow.open(map, marker);
}

function changeZoomLevel(e) {
    var zoomLevel = document.getElementById('change-zoom').value;
    map.setZoom(parseInt(zoomLevel));
}

function processGeocodingResults(results, status) {

    if (status != google.maps.GeocoderStatus.OK) {
        alert("Geocoding was not successful - STATUS: " + status);
        return;
    }

    map.setZoom(4);
    results.forEach(addMarkerAndInfoWindow);
}

var mapOptions = {
    zoom: 14,

    // position of codeup
    center: {
        lat:  29.426791,
        lng: -98.489602
    }
};

var mapDiv     = document.getElementById('my-map');
var map        = new google.maps.Map(mapDiv, mapOptions);

var geocoder   = new google.maps.Geocoder();
var searchTerm = 'austin';


// Procedural

geocoder.geocode({ address: searchTerm }, processGeocodingResults);

document.getElementById('change-zoom').addEventListener('change', changeZoomLevel);
