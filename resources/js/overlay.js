import * as RealtimeIRL from '@rtirl/api';

var mapboxClient = mapboxSdk({ accessToken: 'pk.eyJ1IjoiZHVua3N0b3JtZW4iLCJhIjoiY2xidGY2cWM2MWtzaDNvbXJ2N3QwaHUyaCJ9.WjvyntyGJ391cS9wnP6WUg' });

var params = new URLSearchParams(window.location.search);
var pullKey = params.get('key');

var i = 0;

if(!pullKey) {
    window.location.href = "/";
}



RealtimeIRL.forPullKey(pullKey).addLocationListener(function (location) {
    if(i++ % 50 == 0) {
        mapboxClient.geocoding.reverseGeocode({
            query: [location.longitude, location.latitude],
            types: ['country', 'region', 'postcode', 'district', 'place', 'locality', 'neighborhood', 'address', 'poi'],
            language: 'en'
        })
        .send()
        .then(function(response) {
            var neighborhoodMatch = response.body.features.find((feature) =>
                feature.place_type.includes("neighborhood")
            );
            var cityMatch = response.body.features.find((feature) =>
                feature.place_type.includes("place")
            );
            var addressMatch = response.body.features.find((feature) =>
                feature.place_type.includes("address")
            );
            var countryMatch = response.body.features.find((feature) =>
                feature.place_type.includes("country")
            );

            if (cityMatch) {
                document.getElementById("city").innerText = cityMatch.text + ", " + countryMatch.properties['short_code'].toUpperCase();
            } else if (addressMatch) {
                document.getElementById("city").innerText = addressMatch.text + ", " + countryMatch.properties['short_code'].toUpperCase();
            } else {
                document.getElementById("city").innerText = "-";
            }
        });
    }
});

RealtimeIRL.forPullKey(pullKey).addSpeedListener(function(speed) {
    if(!speed) {
        return;
    }

    speed = (speed * 3.6) | 0;

    //document.getElementById("speedometer").innerText = speed + " km/t";
});
