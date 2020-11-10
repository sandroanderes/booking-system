// Privater Link Feld
var calendarPublicSwitch = document.getElementById('field-calendarpublic-70b17328819d614c3e7fca94804b19b91a3e1651');
var calendarPublicLink = document.getElementById('field-calendarprivatelink-e214161646df417e1c98b63c42bacedcf980bf94');

calendarPublicLink.parentElement.parentElement.style.display = "none";
calendarPublicSwitch.addEventListener("click", privateLink);

function privateLink() {
    var publicCalendar = calendarPublicSwitch.checked;
    if (publicCalendar === true) {
        calendarPublicLink.parentElement.parentElement.style.display = "none";
    } else {
        var randomValue = randomString(16, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
        calendarPublicLink.parentElement.parentElement.style.display = "inline";
        calendarPublicLink.value = window.location.hostname + "/" + randomValue;
    }
}

// Kalender kopieren
calendarPublicLink.addEventListener("click", function (event) {
    event.preventDefault();
    calendarPublicLink.select();
    document.execCommand("copy");
    alert("Link wurde in die Zwischenablage kopiert");
   }); 

// Randmom URL
function randomString(length, chars) {
    var result = '';
    for (var i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
    return result;
}
