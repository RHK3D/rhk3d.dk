import * as RealtimeIRL from '@rtirl/api';

var mapboxClient = mapboxSdk({ accessToken: 'pk.eyJ1IjoiZHVua3N0b3JtZW4iLCJhIjoiY2xkYWM1bmxyMGhwODN5bGkwcHFodWs0bSJ9.zrl0dfyH39Vxpwyu6M4haQ' });

var params = new URLSearchParams(window.location.search);
var pullKey = params.get('key');

var i = 0;

if(!pullKey) {
    window.location.href = "/";
}

const interval = setInterval(function() {
    const today = new Date();
    let clock = '--:--';
    let minutes = today.getMinutes();
    let hours = today.getHours();

    minutes = minutes < 10 ? "0" + minutes : minutes;
    hours = hours < 10 ? "0" + hours : hours;

    clock = hours + ":" + minutes;

    $('#clock').html(clock);
}, 1000);

Echo.channel('overlay')
.listen('.overlay.speedometer.toggle', function (e) {
    var element = $('#speedometer-container');

    (element.hasClass("hidden")) ? element.removeClass('hidden') : element.addClass('hidden');
});

Echo.channel('overlay')
.listen('.overlay.reload', function (e) {
    window.location.reload();
});

RealtimeIRL.forPullKey(pullKey).addLocationListener(function (location) {
    if(i++ % 50 == 0) {
        mapboxClient.geocoding.reverseGeocode({
            query: [location.longitude, location.latitude],
            types: ['country', 'region', 'postcode', 'district', 'place', 'locality', 'neighborhood', 'address', 'poi'],
            language: ['en']
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


        fetch(
            "https://api.openweathermap.org/data/2.5/weather?lat=" +
              location.latitude +
              "&lon=" +
              location.longitude +
              "&appid=64fb789b4ab267d578a5b1c24fd4b5ba",
          )
            .then(function (response) {
              return response.json();
            })
            .then(function (json) {
              const temp = json["main"]["temp"] - 273.15;
              document.getElementById("temperature").innerText =
                (temp || 0).toFixed(0) + " °C";
            });

        
    }
});

RealtimeIRL.forPullKey(pullKey).addSpeedListener(function(speed) {
    if(!speed) {
        return;
    }

    speed = (speed * 3.6) | 0;

    document.getElementById("speedometer").innerText = speed + " km/t";
});
