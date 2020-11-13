/* =========== Calendar Specifications =========== */


//Knöpfe mit den Zeiteinheiten
var timeunit_minute = document.querySelector('[id^="field-specificationtimeunit-"][value="0"]');
var timeunit_hour = document.querySelector('[id^="field-specificationtimeunit-"][value="1"]');
var timeunit_day = document.querySelector('[id^="field-specificationtimeunit-"][value="2"]');

//Inputfelder mit Minutenangaben
var min_reservation_minute =
var max_reservation_minute =

//Inputfelder mit Stundenangaben
var min_reservation_hour =
var max_reservation_hour =

//Inputfelder mit Tage-Angaben
var min_reservation_day =
var max_reservation_day =

//EventListener Zeiteinheit
timeunit_minute.addEventListener("click", reservation_timeunit); 
timeunit_hour.addEventListener("click", reservation_timeunit); 
timeunit_day.addEventListener("click", reservation_timeunit); 

// Function Show Hide TimeUnits
function reservation_timeunit(){
    if(timeunit_minute.checked === true){

    }
}

