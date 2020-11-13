/* =========== Calendar Opening Hours =========== */

// openinghours_repeat "Ja"-Knopf
var oh_repeat = document.querySelector('[id^="field-openinghours-repeat-"][value="1"]');
var oh_repeat_none = document.querySelector('[id^="field-openinghours-repeat-"][value="0"]');


// openinghours_halfday_closed_general und openinghourslunchbreak_general auslesen
var oh_halfday_lunch = document.querySelector(
    '[id^="field-halfday-closed-general-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement
    .parentElement;

// openinghours_general und closinghours_general auslesen
var oh_general = document.querySelector('[id^="field-openinghours-general-"]')
    .parentElement.parentElement.parentElement.parentElement;

// lunchbreakstart_general und lunchbreakend_general auslesen
var oh_lunchtime = document.querySelector(
    '[id^="field-lunchbreakstart-general-"]'
).parentElement.parentElement.parentElement.parentElement;

//Montag
var oh_halfday_lunch_monday = document.querySelector(
    '[id^="field-lunchbreak-monday-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement
    .parentElement;
var oh_monday = document.querySelector('[id^="field-openinghours-monday-"]')
    .parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_monday = document.querySelector(
    '[id^="field-lunchbreackstart-monday-"]'
).parentElement.parentElement.parentElement.parentElement;

//Dienstag
var oh_halfday_lunch_tuesday = document.querySelector(
    '[id^="field-lunchbreak-tuesday-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement
    .parentElement;
var oh_tuesday = document.querySelector('[id^="field-openinghours-tuesday-"]')
    .parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_tuesday = document.querySelector(
    '[id^="field-lunchbreackstart-tuesday-"]'
).parentElement.parentElement.parentElement.parentElement;

//Mittwoch
var oh_halfday_lunch_wednesday = document.querySelector(
    '[id^="field-lunchbreak-wednesday-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement
    .parentElement;
var oh_wednesday = document.querySelector(
    '[id^="field-openinghours-wednesday-"]'
).parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_wednesday = document.querySelector(
    '[id^="field-lunchbreackstart-wednesday-"]'
).parentElement.parentElement.parentElement.parentElement;

//Donnerstag
var oh_halfday_lunch_thursday = document.querySelector(
    '[id^="field-lunchbreak-thursday-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement
    .parentElement;
var oh_thursday = document.querySelector('[id^="field-openinghours-thursday-"]')
    .parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_thursday = document.querySelector(
    '[id^="field-lunchbreackstart-thursday-"]'
).parentElement.parentElement.parentElement.parentElement;

//Freitag
var oh_halfday_lunch_friday = document.querySelector(
    '[id^="field-lunchbreak-friday-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement
    .parentElement;
var oh_friday = document.querySelector('[id^="field-openinghours-friday-"]')
    .parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_friday = document.querySelector(
    '[id^="field-lunchbreackstart-friday-"]'
).parentElement.parentElement.parentElement.parentElement;

//Samstag
var oh_halfday_lunch_saturday = document.querySelector(
    '[id^="field-lunchbreak-saturday-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement
    .parentElement;
var oh_saturday = document.querySelector('[id^="field-openinghours-saturday-"]')
    .parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_saturday = document.querySelector(
    '[id^="field-lunchbreackstart-saturday-"]'
).parentElement.parentElement.parentElement.parentElement;

//Sonntag
var oh_halfday_lunch_sunday = document.querySelector(
    '[id^="field-lunchbreak-sunday-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement
    .parentElement;
var oh_sunday = document.querySelector('[id^="field-openinghours-sunday-"]')
    .parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_sunday = document.querySelector(
    '[id^="field-lunchbreackstart-sunday-"]'
).parentElement.parentElement.parentElement.parentElement;

// EventListener onClick => Ja/Nein Button
oh_repeat.addEventListener("click", openinghours_repeat);
oh_repeat_none.addEventListener("click", openinghours_repeat);

function openinghours_repeat() {
    if (oh_repeat.checked === true) {
        oh_halfday_lunch_monday.style.display = "none";
        oh_monday.style.display = "none";
        oh_lunchtime_monday.style.display = "none";
        console.log("none");
    } else {
        oh_halfday_lunch_monday.style.display = "inline";
        oh_monday.style.display = "inline";
        oh_lunchtime_monday.style.display = "inline";
        console.log("inline");
    }
}
