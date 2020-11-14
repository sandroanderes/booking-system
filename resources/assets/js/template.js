/* =========== Calendar KalenderTemplate Auswahl =========== */

//Auslesen des Template-Selectors
var select_template = document.querySelector('[id^="field-calendartemplate-"]');
var selected_template = document.querySelector(
    '[id^="field-calendartemplate-"]'
).value;

var select_none = document.querySelector(
    '[id^="select2-field-calendartemplat"][id$="-none"]'
);
var select_gastronomy = document.querySelector(
    '[id^="select2-field-calendartemplat"][id$="-gastronomy"]'
);
var select_sports = document.querySelector(
    '[id^="select2-field-calendartemplat"][id$="-sports"]'
);
var select_room = document.querySelector(
    '[id^="select2-field-calendartemplat"][id$="-room"]'
);
var select_services = document.querySelector(
    '[id^="select2-field-calendartemplat"][id$="-services"]'
);

//auszublendende und einzublendende Variablen
var res_objekt = document.querySelector('[id^="field-calendarunit-"]')
    .parentElement.parentElement;

var title_oh_days = document.querySelector('[id^="field-openingday-monday"]')
    .parentElement.parentElement.previousElementSibling;
var title_oh_identical = document.querySelector(
    '[id^="field-openinghours-repeat-"][value="1"]'
).parentElement.parentElement.parentElement.previousElementSibling;

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

//EventListener
select_template.addEventListener("change", reservation_template);

//Funktion Hide Show je nach Template
function reservation_template() {
    switch (select_template.value) {
        case "none":
            title_oh_days.innerHTML="Sandro stinkt.";
            console.log("none");
        break;
        case "gastronomy":
            title_oh_days.innerHTML="Sandro stinkt.";
            console.log("gastronomy");
        break;
        case "sports":
            title_oh_days.innerHTML="Sandro stinkt.";
            console.log("sports");
        break;
        case "room":
            title_oh_days.innerHTML="Sandro stinkt.";
            console.log("room");
        break;
        case "services":
            title_oh_days.innerHTML="Sandro stinkt.";
            console.log("services");
        break;
    }
}
