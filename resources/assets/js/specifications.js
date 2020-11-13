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
    '[id^="field-specificationduration-all-"]'
).parentElement.parentElement.parentElement;

//Button Min, Hour, Day
var timeunit_button = document.querySelector(
    '[id^="field-specificationtimeunit-"]'
).parentElement.parentElement.parentElement.parentElement;
//Button Min, Hour, Day standardmässig ausblenden
timeunit_button.style.display = "none";

//EventListener Reservationsadauer
switcher_fixed_res.addEventListener("click", reservation_duration_fixed); //bezieht es sich auf diese Funktion? ja genau eine eigene...
timeunit_button.addEventListener("click", reservation_duration_fixed);

// Function Show Hide reservation_duration_fixed
function reservation_duration_fixed() {
    if (switcher_fixed_res.checked === true) {
        //Remove Active Class der einzelnen Buttons -man muss die einzelnen Knöpfe auslesen... nicht die Gruppe...
        timeunit_minute.parentElement.classList.remove("active");
        timeunit_hour.parentElement.classList.remove("active");
        timeunit_day.parentElement.classList.remove("active");

        //Alle Min, Std, Tage-Inputfelder entfernen, wenn gedrückt
        min_reservation_minute.style.display = "none";
        max_reservation_minute.style.display = "none";
        min_reservation_hour.style.display = "none";
        max_reservation_hour.style.display = "none";
        min_reservation_day.style.display = "none";
        max_reservation_day.style.display = "none";

        timeunit_minute.checked = false;
        timeunit_hour.checked = false;
        timeunit_day.checked = false;

        //Button "minuten, Stunden, Tage" ausblenden
        timeunit_button.style.display = "none";

        //Selector "Fixe Reservationsdauer" einblenden
        select_fixed_dur.style.display = "inline";
    } else if (switcher_fixed_res.checked === false) {
        //Button "minuten, Stunden, Tage" einblenden
        timeunit_button.style.display = "inline";

        //Selector "Fixe Reservationsdauer" ausblenden
        select_fixed_dur.style.display = "none";
    }
}