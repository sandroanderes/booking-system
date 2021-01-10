/* =========== Calendar Private Link =========== */
// Private Link Field
var calendarPublicSwitch = document.querySelector('[id^="field-calendarpublic-"]');
var calendarPublicLink = document.querySelector('[id^="field-calendarprivatelink-"]');
var calendarKey = document.querySelector('[id^="field-calendarbuecherkey-"]');

// calendarPublicLink.value = "";

// Get Calendar Name
var calendarName = document.querySelector('[id^="field-calendarname-"]').value;
var calendarNameField = document.querySelector('[id^="field-calendarname-"]');

// Get Random Value
var randomValue = randomString(16, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
calendarPublicLink.parentElement.parentElement.style.display = "inline";

// EventListener onClick => Switch
document.addEventListener("DOMContentLoaded", privateLink);
calendarPublicSwitch.addEventListener("click", privateLink);

// Function KeyDown Calendar Name
calendarNameField.addEventListener("keyup", function (event) {
    calendarPublicLink.value = window.location.hostname + "/" + 'buecher/' + randomValue;
    calendarKey.value = randomValue;
});

// Function PrivateLink
function privateLink() {
    var publicCalendar = calendarPublicSwitch.checked;
    if (publicCalendar === true) {
        calendarPublicLink.parentElement.parentElement.style.display = "none";
    } else {
        calendarPublicLink.parentElement.parentElement.style.display = "inline";
    }
}

// Function Calendar copy
calendarPublicLink.addEventListener("click", function (event) {
    event.preventDefault();
    calendarPublicLink.select();
    document.execCommand("copy");
    alert("Link wurde in die Zwischenablage kopiert");
});

// Function Random URL
function randomString(length, chars) {
    var result = '';
    for (var i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
    return result;
};

/* =========== Usage of an Template =========== */
