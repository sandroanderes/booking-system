/* =========== Calendar Opening Hours =========== */

// selected Openingdays
var checked_monday = document.querySelector('[id^="field-openingday-monday-"]');
var checked_tuesday = document.querySelector('[id^="field-openingday-tuesday-"]');
var checked_wednesday = document.querySelector('[id^="field-openingday-wednesday-"]');
var checked_thursday = document.querySelector('[id^="field-openingday-thursday-"]');
var checked_friday = document.querySelector('[id^="field-openingday-friday-"]');
var checked_saturday = document.querySelector('[id^="field-openingday-saturday-"]');
var checked_sunday = document.querySelector('[id^="field-openingday-sunday-"]');

// openinghours_repeat "Ja"-Knopf
var oh_repeat = document.querySelector('[id^="field-openinghours-repeat-"][value="1"]');
var oh_repeat_none = document.querySelector('[id^="field-openinghours-repeat-"][value="0"]');

// Daily Buttons
var general_open_allday = document.querySelector('[id^="field-halfday-closed-general-"][value="0"]');
var general_open_halfday = document.querySelector('[id^="field-halfday-closed-general-"][value="1"]');
var general_lunch_closed = document.querySelector('[id^="field-lunchbreak-general-"][value="1"]');
var general_lunch_notclosed = document.querySelector('[id^="field-lunchbreak-general-"][value="0"]');

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
checked_monday.addEventListener("click", openinghours_repeat);
checked_tuesday.addEventListener("click", openinghours_repeat);
checked_wednesday.addEventListener("click", openinghours_repeat);
checked_thursday.addEventListener("click", openinghours_repeat);
checked_friday.addEventListener("click", openinghours_repeat);
checked_saturday.addEventListener("click", openinghours_repeat);
checked_sunday.addEventListener("click", openinghours_repeat);

general_open_allday.addEventListener("click", openinghours_halfday);
general_open_halfday.addEventListener("click", openinghours_halfday);
general_lunch_closed.addEventListener("click", openinghours_halfday);
general_lunch_notclosed.addEventListener("click", openinghours_halfday);



// Hide all Days
oh_halfday_lunch_monday.style.display = "none";
oh_monday.style.display = "none";
oh_lunchtime_monday.style.display = "none";

oh_halfday_lunch_tuesday.style.display = "none";
oh_tuesday.style.display = "none";
oh_lunchtime_tuesday.style.display = "none";

oh_halfday_lunch_wednesday.style.display = "none";
oh_wednesday.style.display = "none";
oh_lunchtime_wednesday.style.display = "none";

oh_halfday_lunch_thursday.style.display = "none";
oh_thursday.style.display = "none";
oh_lunchtime_thursday.style.display = "none";

oh_halfday_lunch_friday.style.display = "none";
oh_friday.style.display = "none";
oh_lunchtime_friday.style.display = "none";

oh_halfday_lunch_saturday.style.display = "none";
oh_saturday.style.display = "none";
oh_lunchtime_saturday.style.display = "none";

oh_halfday_lunch_sunday.style.display = "none";
oh_sunday.style.display = "none";
oh_lunchtime_sunday.style.display = "none";

// Function Show Hide Days & General
function openinghours_repeat() {
    if (oh_repeat.checked === true) {
        oh_halfday_lunch.style.display = "flex";
        oh_general.style.display = "flex";
        oh_lunchtime.style.display = "flex";

        oh_halfday_lunch_monday.style.display = "none";
        oh_monday.style.display = "none";
        oh_lunchtime_monday.style.display = "none";

        oh_halfday_lunch_tuesday.style.display = "none";
        oh_tuesday.style.display = "none";
        oh_lunchtime_tuesday.style.display = "none";

        oh_halfday_lunch_wednesday.style.display = "none";
        oh_wednesday.style.display = "none";
        oh_lunchtime_wednesday.style.display = "none";

        oh_halfday_lunch_thursday.style.display = "none";
        oh_thursday.style.display = "none";
        oh_lunchtime_thursday.style.display = "none";

        oh_halfday_lunch_friday.style.display = "none";
        oh_friday.style.display = "none";
        oh_lunchtime_friday.style.display = "none";

        oh_halfday_lunch_saturday.style.display = "none";
        oh_saturday.style.display = "none";
        oh_lunchtime_saturday.style.display = "none";

        oh_halfday_lunch_sunday.style.display = "none";
        oh_sunday.style.display = "none";
        oh_lunchtime_sunday.style.display = "none";
    }
    if (checked_monday.checked == true && oh_repeat.checked === false) {
        oh_halfday_lunch_monday.style.display = "flex";
        oh_monday.style.display = "flex";
        oh_lunchtime_monday.style.display = "flex";
    }
    if (checked_tuesday.checked == true && oh_repeat.checked === false) {
        oh_halfday_lunch_tuesday.style.display = "flex";
        oh_tuesday.style.display = "flex";
        oh_lunchtime_tuesday.style.display = "flex";
    }
    if (checked_wednesday.checked == true && oh_repeat.checked === false) {
        oh_halfday_lunch_wednesday.style.display = "flex";
        oh_wednesday.style.display = "flex";
        oh_lunchtime_wednesday.style.display = "flex";
    }
    if (checked_thursday.checked == true && oh_repeat.checked === false) {
        oh_halfday_lunch_thursday.style.display = "flex";
        oh_thursday.style.display = "flex";
        oh_lunchtime_thursday.style.display = "flex";
    }
    if (checked_friday.checked == true && oh_repeat.checked === false) {
        oh_halfday_lunch_friday.style.display = "flex";
        oh_friday.style.display = "flex";
        oh_lunchtime_friday.style.display = "flex";
    }
    if (checked_saturday.checked == true && oh_repeat.checked === false) {
        oh_halfday_lunch_saturday.style.display = "flex";
        oh_saturday.style.display = "flex";
        oh_lunchtime_saturday.style.display = "flex";
    }
    if (checked_sunday.checked == true && oh_repeat.checked === false) {
        oh_halfday_lunch_sunday.style.display = "flex";
        oh_sunday.style.display = "flex";
        oh_lunchtime_sunday.style.display = "flex";
    }
    if (oh_repeat.checked === false) {
        oh_halfday_lunch.style.display = "none";
        oh_general.style.display = "none";
        oh_lunchtime.style.display = "none";
    }
}

// Function Show Hide Elements of Days
function openinghours_halfday() {
    if (general_open_allday.checked === true && general_lunch_closed.checked === true ){
        oh_lunchtime.style.display = "flex";
        document.querySelector('[id^="field-lunchbreak-general-"]').parentElement.parentElement.parentElement.parentElement.parentElement.style.display = "flex";
    }
    if (general_open_allday.checked === true){
        document.querySelector('[id^="field-lunchbreak-general-"]').parentElement.parentElement.parentElement.parentElement.parentElement.style.display = "flex";
    }
    if (general_open_halfday.checked === true){
        oh_lunchtime.style.display = "none";
        document.querySelector('[id^="field-lunchbreak-general-"]').parentElement.parentElement.parentElement.parentElement.parentElement.style.display = "none";
    }
    if (general_lunch_notclosed.checked === true){
        oh_lunchtime.style.display = "none";
    }
}
