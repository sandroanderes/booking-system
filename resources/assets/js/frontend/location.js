document.getElementById("searchCalendar").onclick = function () {
    var search_location = document.getElementById("CityFilter").value;
    var card_locations = document.getElementsByClassName("location");
    var card_locations_array = [];
    const objectArray = Object.entries(card_locations);

    objectArray.forEach(([key, value]) => {
        card_locations_array.push(value.innerText);
    });
    if (search_location) {
        card_locations_array.push(search_location)
        asyncCall(card_locations_array);
    }
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

async function asyncCall(locations) {
    var selected_distance = document.getElementById('locationSelect').value;
    var card_locations = document.getElementsByClassName("location");
    var location = [];

    selected_distance = (selected_distance == "Alle" ? 10000 : selected_distance.slice(0, -2))
    console.time('for {}');

    for (const [i, value] of locations.entries()) {
        const response = await fetch(`https://nominatim.openstreetmap.org/search?q=${value}&format=json&limit=1`)
        const data = await response.json()
        location.push(data[0]);

        if (i == (locations.length - 1)) {
            for (var j = 0; j < (locations.length - 1); j++) {

                console.log("Distanz zwischen " + location[j].display_name + " und " + location[location.length - 1].display_name + " beträgt " + distance(parseFloat(location[j].lat), parseFloat(location[j].lon), parseFloat(location[location.length - 1].lat), parseFloat(location[location.length - 1].lon)) + "km");

                card_locations[j].parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.style.display = "";
                if (selected_distance <= distance(parseFloat(location[j].lat), parseFloat(location[j].lon), parseFloat(location[location.length - 1].lat), parseFloat(location[location.length - 1].lon))) {
                    console.log(location[j].display_name + " is too far away!");
                    card_locations[j].parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.style.display = "none";
                }
            }
        }

    }
    console.timeEnd('for {}');

    /*     console.time('.map()');
        await Promise.all(
            locations.map(async (value) => {
                const response = await fetch(`https://nominatim.openstreetmap.org/search?q=${value}&format=json&limit=1`)
                const location = await response.json()
                console.log(location[0].display_name)
            })
        )
        console.timeEnd('.map()'); */
}