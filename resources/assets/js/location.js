document.getElementById("searchCalendar").onclick = function () { GetLocation() };

function GetLocation() {
    var address = document.getElementById("CityFilter").value + ", Schweiz";
    var mylat;
    var mylon;

    fetch('/js/api_token.json')
        .then(response => response.json())
        .then(data => {
            api = data;
            searchFunction(address);
            getLocation(mylat, mylon);
            console.log(mylat + "+" + mylon)
        });
}

function searchFunction(address) {
    console.log(api.token);
    var token = api.token;

    fetch('https://us1.locationiq.com/v1/search.php?key=' + token + '&format=json&q=' + address)
        .then(response => response.json())
        .then(function (data) {
            return console.log("Source Latitude: " + data[1].lat + " & Longitude: " + data[1].lon);
        });
}

function getPosition() {
    navigator.geolocation.getCurrentPosition(function(position) {
        let lat = position.coords.latitude;
        let long = position.coords.longitude;
    
        console.log(lat)
        latText.innerText = lat.toFixed(2);
        longText.innerText = long.toFixed(2);
      });
}




function distance(lat1, lon1, lat2, lon2, unit) {
    if ((lat1 == lat2) && (lon1 == lon2)) {
        return 0;
    }
    else {
        var radlat1 = Math.PI * lat1 / 180;
        var radlat2 = Math.PI * lat2 / 180;
        var theta = lon1 - lon2;
        var radtheta = Math.PI * theta / 180;
        var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
        if (dist > 1) {
            dist = 1;
        }
        dist = Math.acos(dist);
        dist = dist * 180 / Math.PI;
        dist = dist * 60 * 1.1515;
        if (unit == "K") { dist = dist * 1.609344 }
        if (unit == "N") { dist = dist * 0.8684 }
        return dist;
    }
}

