/*******************
Variable definitions
********************/
var mainFilterInput, locationFilterInput, categoryFilterInput;

//get input fields
mainFilterInput = document.getElementById("mainFilter")
locationFilterInput = document.getElementById("locationFilter")
categoryFilterInput = document.getElementById("categorySelect")

//trigger press enter keyboard key
mainFilterInput.addEventListener("keyup", function (e) {
    if (e.code === 'Enter') {
        document.getElementById("searchCalendar").click();
    }
});
locationFilterInput.addEventListener("keyup", function (e) {
    if (e.code === 'Enter') {
        document.getElementById("searchCalendar").click();
    }
});
categoryFilterInput.addEventListener("keyup", function (e) {
    if (e.code === 'Enter') {
        document.getElementById("searchCalendar").click();
    }
});

document.getElementById("searchCalendar").onclick = function () {
    /*******************
    Variable definitions
    ********************/
    var mainFilter, locationFilter, categorieFilter, locationCards, cardInformation, categorieCards, allCards;

    //get title input
    mainFilter = document.getElementById("mainFilter").value.toUpperCase();
    //get search location
    locationFilter = document.getElementById("locationFilter").value;
    //get selected categorie
    categorieFilter = document.getElementById("categorySelect").value;
    //get all locations
    /* locations = document.getElementsByClassName("location"); */
    //get all cards
    allCards = document.querySelectorAll('div.col.mb-4');

    cardInformation = [];


    //elements[key].children[0].children[0].children[1].children[0].children[1].children[2].innerText

    console.log("mainFilter");
    mainFilterFunction(mainFilter, allCards);

    if (categorieFilter && (categorieFilter != "all")) {
        //Get all visible cards with category
        categorieCards = document.querySelectorAll('div.col.mb-4:not(.' + categorieFilter + '):not([style*="display:none"]):not([style*="display: none"])');
        categorieFilterFunction(categorieCards);
    }
    if (locationFilter) {
        //start loading animation
        document.getElementById("loader").style.display = "block";
        console.log("locationFilter");
        locationCards = document.querySelectorAll('div.col.mb-4:not([style*="display:none"]):not([style*="display: none"])');
        const objectArray = Object.entries(locationCards);

        objectArray.forEach(([key, value]) => {
            cardInformation[key] = {
                id: parseInt(key),
                info: "location: " + key,
                name: value.children[0].children[0].children[1].children[0].children[1].children[2].innerText
            };
        });
        locatonFilterFunction(cardInformation, locationFilter, locationCards);
    }
}

async function locatonFilterFunction(cardInformation, locationFilter, locationCards) {

    var selected_distance, location;

    //Get selected distance from dropdown
    selected_distance = document.getElementById('locationSelect').value;

    //Make array
    location = [];

    /* selected_distance = (selected_distance == "Alle" ? 10000 : selected_distance.slice(0, -2)) */
    console.time('for {}');

    console.log(cardInformation);

    for (const [i, value] of cardInformation.entries()) {
        const response = await fetch(`https://nominatim.openstreetmap.org/search?q=${value.name}&format=json&limit=1`);
        const data = await response.json();
        console.log(data);
        location[i] = {
            id: parseInt(i),
            info: "location name",
            name: data[0].display_name,
            lat: data[0].lat,
            lon: data[0].lon,
        };

        if (i == (cardInformation.length - 1)) {
            const response = await fetch(`https://nominatim.openstreetmap.org/search?q=${locationFilter}&format=json&limit=1`);
            const data = await response.json();
            /* console.log(data); */
            location[cardInformation.length] = {
                id: parseInt(cardInformation.length),
                info: "location name",
                name: data[0].display_name,
                lat: data[0].lat,
                lon: data[0].lon,
            };
        }
    }

    if (location.length == cardInformation.length + 1) {
        for (var j = 0; j < (location.length - 1); j++) {

            //console.log("Distanz zwischen " + location[j].name + " und " + location[location.length - 1].name + " beträgt " + distance(parseFloat(location[j].lat), parseFloat(location[j].lon), parseFloat(location[location.length - 1].lat), parseFloat(location[location.length - 1].lon), "K") + " km");

            locationCards[j].style.display = "block";
            if (selected_distance <= distance(parseFloat(location[j].lat), parseFloat(location[j].lon), parseFloat(location[location.length - 1].lat), parseFloat(location[location.length - 1].lon), "K")) {

                //console.log(location[j].name + " is too far away!");
                locationCards[j].style.display = "none";
            }
        }
    } else {
        console.log("Error after coordinate search!")
    }

    document.getElementById("loader").style.display = "none";
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

function mainFilterFunction(mainFilter, allCards) {
    var title;
    for (var i = 0; i < allCards.length; i++) {
        title = allCards[i].querySelector(".card-body h5.card-title");
        if (title.innerText.toUpperCase().indexOf(mainFilter) > -1) {
            allCards[i].style.display = "block";
        } else {
            allCards[i].style.display = "none";
        }
    }
}

function categorieFilterFunction(categorieCards) {
    for (var i = 0; i < categorieCards.length; i++) {
        categorieCards[i].style.display = "none";
    }
}

//calculates the distance between two coordinates
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