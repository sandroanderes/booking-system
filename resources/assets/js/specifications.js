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
    '[id^="field-specificationduration-min-min-"]'
).parentElement.parentElement;
var max_reservation_minute = document.querySelector(
    '[id^="field-specificationduration-max-min-"]'
).parentElement.parentElement;

//Inputfelder mit Stundenangaben
var min_reservation_hour = document.querySelector(
    '[id^="field-specificationduration-min-h-"]'
).parentElement.parentElement;
var max_reservation_hour = document.querySelector(
    '[id^="field-specificationduration-max-h-"]'
).parentElement.parentElement;

//Inputfelder mit Tage-Angaben
var min_reservation_day = document.querySelector(
    '[id^="field-specificationduration-min-d-"]'
).parentElement.parentElement;
var max_reservation_day = document.querySelector(
    '[id^="field-specificationduration-max-d-"]'
).parentElement.parentElement;

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
    min_reservation_minute.style.display = "none";
    max_reservation_minute.style.display = "none";
    min_reservation_hour.style.display = "none";
    max_reservation_hour.style.display = "none";
    min_reservation_day.style.display = "none";
    max_reservation_day.style.display = "none";

    if (timeunit_minute.checked === true) {
        min_reservation_minute.style.display = "inline";
        max_reservation_minute.style.display = "inline";
    }
    if (timeunit_hour.checked === true) {
        min_reservation_hour.style.display = "inline";
        max_reservation_hour.style.display = "inline";
    }
    if (timeunit_day.checked === true) {
        min_reservation_day.style.display = "inline";
        max_reservation_day.style.display = "inline";
    }
}

//Switcher Fixes Reservationsintervall
var switcher_fixed_res = document.querySelector(
    '[id^="field-specificationduration-fixed-"]'
);

//Selector Fixed duration 
var select_fixed_dur = document.querySelector( 
    '[id^="field-specificationtimeunit-"]'
).parentElement.parentElement.parentElement.parentElement;


//Button Min, Hour, Day
var timeunit_button = document.querySelector( 
    '[id^="field-specificationtimeunit-"]'
).parentElement.parentElement.parentElement.parentElement;

//EventListener Reservationsadauer
switcher_fixed_res.addEventListener("click", reservation_duration_fixed);

// Function Show Hide reservation_duration_fixed
function reservation_duration_fixed() {
    if (switcher_fixed_res.checked === true) {
        min_reservation_minute.style.display = "none";
        max_reservation_minute.style.display = "none";
        min_reservation_hour.style.display = "none";
        max_reservation_hour.style.display = "none";
        min_reservation_day.style.display = "none";
        max_reservation_day.style.display = "none";
        
        timeunit_button.style.display = "none";

        //ne den Select einblenden
        //ah ja, wie heisst der Min, Std aha - dann ist mein Comment falsch

    }
}
