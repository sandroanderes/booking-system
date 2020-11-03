document.getElementById("searchCalendar").onclick = function () { SearchFunction() };

function SearchFunction() {
    var token = "pk.ca9ce77020c3b62efb353458027755dc";
    var address = "Aarau";

    fetch('https://us1.locationiq.com/v1/search.php?key='+token+'&format=json&q='+address)
        .then(response => response.json())
        .then(data => console.log(data[1].lat+"+"+data[1].lon));
}

