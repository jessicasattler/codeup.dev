var map = new google.maps.Map(document.getElementById('my-map'), {
    zoom: 5,

    // position of codeup
    center: {
        lat:  29.426791,
        lng: -98.489602
    }
});

var g = new google.maps.Geocoder();
g.geocode({ address: 'austin' }, function(results, status) {
    // Check for a successful result
    if (status == google.maps.GeocoderStatus.OK) {
        map.setZoom(map.zoom);
        results.forEach(function(place) {
            var marker = new google.maps.Marker({
                position: results[i].geometry.location,
                map: map
            });

            var iw = new google.maps.InfoWindow({
                content: results[i].formatted_address
            });

            iw.open(map, marker);
        })
    } else {
        // Show an error message with the status if our request fails
        alert("Geocoding was not successful - STATUS: " + status);
    }
});

document.getElementById('zoom-btn').addEventListener('click', function(e){
    var zl = document.getElementById('change-zoom').value;
    m.setZoom(parseInt(zl));


});