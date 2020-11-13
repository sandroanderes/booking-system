/* =========== Calendar Specifications =========== */

//Knöpfe mit den Zeiteinheiten
var timeunit_minute = document.querySelector(
    '[id^="field-specificationtimeunit-"][value="0"]'
);
var timeunit_hour = document.querySelector(
    '[id^="field-specificationtimeunit-"][value="1"]'
);
var timeunit_day = document.querySelector(
    '[id^="field-specificationtimeunit-"][value="2"]'
);

//Inputfelder mit Minutenangaben
var min_reservation_minute = document.querySelector(
    '[id^="select2-field-specificationduration-min-min-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement;
var max_reservation_minute = document.querySelector(
    '[id^="select2-field-specificationduration-max-min-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement;

//Inputfelder mit Stundenangaben
var min_reservation_hour = document.querySelector(
    '[id^="select2-field-specificationduration-min-h-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement;
var max_reservation_hour = document.querySelector(
    '[id^="select2-field-specificationduration-max-h-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement;

//Inputfelder mit Tage-Angaben
var min_reservation_day = document.querySelector(
    '[id^="select2-field-specificationduration-min-d-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement;
var max_reservation_day = document.querySelector(
    '[id^="select2-field-specificationduration-max-d-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement;

//EventListener Zeiteinheit
timeunit_minute.addEventListener("click", reservation_timeunit);
timeunit_hour.addEventListener("click", reservation_timeunit);
timeunit_day.addEventListener("click", reservation_timeunit);

//Standardmässig nichts anzeigen
min_reservation_minute.style.display = "none";
max_reservation_minute.style.display = "none";
min_reservation_hour.style.display = "none";
max_reservation_hour.style.display = "none";
min_reservation_day.style.display = "none";
max_reservation_day.style.display = "none";
// Function Show Hide TimeUnits
function reservation_timeunit() {
    if (timeunit_minute.checked === true) {
        min_reservation_minute.style.display = "flex";
        max_reservation_minute.style.display = "flex";
    } else if (timeunit_hour.checked === true) {
        min_reservation_hour.style.display = "flex";
        max_reservation_hour.style.display = "flex";
    } else if (timeunit_hour.checked === true) {
        min_reservation_day.style.display = "flex";
        max_reservation_day.style.display = "flex";
    }
}