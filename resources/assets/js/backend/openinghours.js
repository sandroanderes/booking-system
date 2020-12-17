/* =========== Calendar Opening Hours =========== */

// selected Openingdays
var checked_monday = document.querySelector('[id^="field-ohday-monday-"]');
var checked_tuesday = document.querySelector('[id^="field-ohday-tuesday-"]');
var checked_wednesday = document.querySelector(
    '[id^="field-ohday-wednesday-"]'
);
var checked_thursday = document.querySelector('[id^="field-ohday-thursday-"]');
var checked_friday = document.querySelector('[id^="field-ohday-friday-"]');
var checked_saturday = document.querySelector('[id^="field-ohday-saturday-"]');
var checked_sunday = document.querySelector('[id^="field-ohday-sunday-"]');

// openinghours_repeat "Ja"- und "Nein"-Knopf
var oh_repeat = document.querySelector('[id^="field-ohrepeat-"][value="1"]');
var oh_repeat_none = document.querySelector(
    '[id^="field-ohrepeat-"][value="0"]'
);

// Daily Buttons
var general_open_allday = document.querySelector(
    '[id^="field-ohhalfday-closed-general-"][value="0"]'
);
var general_open_halfday = document.querySelector(
    '[id^="field-ohhalfday-closed-general-"][value="1"]'
);
var general_lunch_closed = document.querySelector(
    '[id^="field-ohlunch-general-"][value="1"]'
);
var general_lunch_notclosed = document.querySelector(
    '[id^="field-ohlunch-general-"][value="0"]'
);
var monday_open_allday = document.querySelector(
    '[id^="field-ohhalfday-closed-monday-"][value="0"]'
);
var monday_open_halfday = document.querySelector(
    '[id^="field-ohhalfday-closed-monday-"][value="1"]'
);
var monday_lunch_closed = document.querySelector(
    '[id^="field-ohlunch-monday-"][value="1"]'
);
var monday_lunch_notclosed = document.querySelector(
    '[id^="field-ohlunch-monday-"][value="0"]'
);
var tuesday_open_allday = document.querySelector(
    '[id^="field-ohhalfday-closed-tuesday-"][value="0"]'
);
var tuesday_open_halfday = document.querySelector(
    '[id^="field-ohhalfday-closed-tuesday-"][value="1"]'
);
var tuesday_lunch_closed = document.querySelector(
    '[id^="field-ohlunch-tuesday-"][value="1"]'
);
var tuesday_lunch_notclosed = document.querySelector(
    '[id^="field-ohlunch-tuesday-"][value="0"]'
);
var wednesday_open_allday = document.querySelector(
    '[id^="field-ohhalfday-closed-wednesday-"][value="0"]'
);
var wednesday_open_halfday = document.querySelector(
    '[id^="field-ohhalfday-closed-wednesday-"][value="1"]'
);
var wednesday_lunch_closed = document.querySelector(
    '[id^="field-ohlunch-wednesday-"][value="1"]'
);
var wednesday_lunch_notclosed = document.querySelector(
    '[id^="field-ohlunch-wednesday-"][value="0"]'
);
var thursday_open_allday = document.querySelector(
    '[id^="field-ohhalfday-closed-thursday-"][value="0"]'
);
var thursday_open_halfday = document.querySelector(
    '[id^="field-ohhalfday-closed-thursday-"][value="1"]'
);
var thursday_lunch_closed = document.querySelector(
    '[id^="field-ohlunch-thursday-"][value="1"]'
);
var thursday_lunch_notclosed = document.querySelector(
    '[id^="field-ohlunch-thursday-"][value="0"]'
);
var friday_open_allday = document.querySelector(
    '[id^="field-ohhalfday-closed-friday-"][value="0"]'
);
var friday_open_halfday = document.querySelector(
    '[id^="field-ohhalfday-closed-friday-"][value="1"]'
);
var friday_lunch_closed = document.querySelector(
    '[id^="field-ohlunch-friday-"][value="1"]'
);
var friday_lunch_notclosed = document.querySelector(
    '[id^="field-ohlunch-friday-"][value="0"]'
);
var saturday_open_allday = document.querySelector(
    '[id^="field-ohhalfday-closed-saturday-"][value="0"]'
);
var saturday_open_halfday = document.querySelector(
    '[id^="field-ohhalfday-closed-saturday-"][value="1"]'
);
var saturday_lunch_closed = document.querySelector(
    '[id^="field-ohlunch-saturday-"][value="1"]'
);
var saturday_lunch_notclosed = document.querySelector(
    '[id^="field-ohlunch-saturday-"][value="0"]'
);
var sunday_open_allday = document.querySelector(
    '[id^="field-ohhalfday-closed-sunday-"][value="0"]'
);
var sunday_open_halfday = document.querySelector(
    '[id^="field-ohhalfday-closed-sunday-"][value="1"]'
);
var sunday_lunch_closed = document.querySelector(
    '[id^="field-ohlunch-sunday-"][value="1"]'
);
var sunday_lunch_notclosed = document.querySelector(
    '[id^="field-ohlunch-sunday-"][value="0"]'
);

// openinghours_halfday_closed_general und openinghourslunchbreak_general auslesen
var oh_halfday_lunch = document.querySelector(
    '[id^="field-ohhalfday-closed-general-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement
    .parentElement;

// openinghours_general und closinghours_general auslesen
var oh_general = document.querySelector('[id^="field-ohstart-general-"]')
    .parentElement.parentElement.parentElement.parentElement;

// lunchbreakstart_general und lunchbreakend_general auslesen
var oh_lunchtime = document.querySelector('[id^="field-ohlunch-start"]')
    .parentElement.parentElement.parentElement.parentElement;


// Werte auf 0 setzen, wenn ausgeblendet //

//General
var oh_general_start_val = document.querySelector('[id^="field-ohstart-general-"]');
var oh_general_end_val = document.querySelector('[id^="field-ohend-general-"]');
var oh_lunchtime_start_val = document.querySelector('[id^="field-ohlunch-start-"]');
var oh_lunchtime_end_val = document.querySelector('[id^="field-ohlunch-end-"]');

//Montag


//Dienstag


//Mittwoch



//Donnerstag



//Freitag



//Samstag

//Sonntag



//Montag
var oh_halfday_lunch_monday = document.querySelector(
    '[id^="field-ohlunch-monday-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement
    .parentElement;
var oh_monday = document.querySelector('[id^="field-ohstart-monday-"]')
    .parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_monday = document.querySelector(
    '[id^="field-ohlunch-start-monday-"]'
).parentElement.parentElement.parentElement.parentElement;

//Dienstag
var oh_halfday_lunch_tuesday = document.querySelector(
    '[id^="field-ohlunch-tuesday-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement
    .parentElement;
var oh_tuesday = document.querySelector('[id^="field-ohstart-tuesday-"]')
    .parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_tuesday = document.querySelector(
    '[id^="field-ohlunch-start-tuesday-"]'
).parentElement.parentElement.parentElement.parentElement;

//Mittwoch
var oh_halfday_lunch_wednesday = document.querySelector(
    '[id^="field-ohlunch-wednesday-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement
    .parentElement;
var oh_wednesday = document.querySelector('[id^="field-ohstart-wednesday-"]')
    .parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_wednesday = document.querySelector(
    '[id^="field-ohlunch-start-wednesday-"]'
).parentElement.parentElement.parentElement.parentElement;

//Donnerstag
var oh_halfday_lunch_thursday = document.querySelector(
    '[id^="field-ohlunch-thursday-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement
    .parentElement;
var oh_thursday = document.querySelector('[id^="field-ohstart-thursday-"]')
    .parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_thursday = document.querySelector(
    '[id^="field-ohlunch-start-thursday-"]'
).parentElement.parentElement.parentElement.parentElement;

//Freitag
var oh_halfday_lunch_friday = document.querySelector(
    '[id^="field-ohlunch-friday-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement
    .parentElement;
var oh_friday = document.querySelector('[id^="field-ohstart-friday-"]')
    .parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_friday = document.querySelector(
    '[id^="field-ohlunch-start-friday-"]'
).parentElement.parentElement.parentElement.parentElement;

//Samstag
var oh_halfday_lunch_saturday = document.querySelector(
    '[id^="field-ohlunch-saturday-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement
    .parentElement;
var oh_saturday = document.querySelector('[id^="field-ohstart-saturday-"]')
    .parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_saturday = document.querySelector(
    '[id^="field-ohlunch-start-saturday-"]'
).parentElement.parentElement.parentElement.parentElement;

//Sonntag
var oh_halfday_lunch_sunday = document.querySelector(
    '[id^="field-ohlunch-sunday-"]'
).parentElement.parentElement.parentElement.parentElement.parentElement
    .parentElement;
var oh_sunday = document.querySelector('[id^="field-ohstart-sunday-"]')
    .parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_sunday = document.querySelector(
    '[id^="field-ohlunch-start-sunday-"]'
).parentElement.parentElement.parentElement.parentElement;

// EventListener WeekDays
oh_repeat.addEventListener("click", openinghours_repeat);
oh_repeat_none.addEventListener("click", openinghours_repeat);
checked_monday.addEventListener("click", openinghours_repeat);
checked_tuesday.addEventListener("click", openinghours_repeat);
checked_wednesday.addEventListener("click", openinghours_repeat);
checked_thursday.addEventListener("click", openinghours_repeat);
checked_friday.addEventListener("click", openinghours_repeat);
checked_saturday.addEventListener("click", openinghours_repeat);
checked_sunday.addEventListener("click", openinghours_repeat);
window.addEventListener("load", openinghours_repeat);

// EventListener Buttons of Weekdays
general_open_allday.addEventListener("click", openinghours_halfday);
general_open_halfday.addEventListener("click", openinghours_halfday);
general_lunch_closed.addEventListener("click", openinghours_halfday, openinghours_repeat);general_lunch_notclosed.addEventListener("click", openinghours_halfday);
monday_open_allday.addEventListener("click", openinghours_halfday);
monday_open_halfday.addEventListener("click", openinghours_halfday);
monday_lunch_closed.addEventListener("click", openinghours_halfday);
monday_lunch_notclosed.addEventListener("click", openinghours_halfday);
tuesday_open_allday.addEventListener("click", openinghours_halfday);
tuesday_open_halfday.addEventListener("click", openinghours_halfday);
tuesday_lunch_closed.addEventListener("click", openinghours_halfday);
tuesday_lunch_notclosed.addEventListener("click", openinghours_halfday);
wednesday_open_allday.addEventListener("click", openinghours_halfday);
wednesday_open_halfday.addEventListener("click", openinghours_halfday);
wednesday_lunch_closed.addEventListener("click", openinghours_halfday);
wednesday_lunch_notclosed.addEventListener("click", openinghours_halfday);
thursday_open_allday.addEventListener("click", openinghours_halfday);
thursday_open_halfday.addEventListener("click", openinghours_halfday);
thursday_lunch_closed.addEventListener("click", openinghours_halfday);
thursday_lunch_notclosed.addEventListener("click", openinghours_halfday);
friday_open_allday.addEventListener("click", openinghours_halfday);
friday_open_halfday.addEventListener("click", openinghours_halfday);
friday_lunch_closed.addEventListener("click", openinghours_halfday);
friday_lunch_notclosed.addEventListener("click", openinghours_halfday);
saturday_open_allday.addEventListener("click", openinghours_halfday);
saturday_open_halfday.addEventListener("click", openinghours_halfday);
saturday_lunch_closed.addEventListener("click", openinghours_halfday);
saturday_lunch_notclosed.addEventListener("click", openinghours_halfday);
sunday_open_allday.addEventListener("click", openinghours_halfday);
sunday_open_halfday.addEventListener("click", openinghours_halfday);
sunday_lunch_closed.addEventListener("click", openinghours_halfday);
sunday_lunch_notclosed.addEventListener("click", openinghours_halfday);

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

    if (oh_repeat_none.checked === true){
        oh_general_start_val.value = "";
        oh_general_end_val.value = "";
        oh_lunchtime_start_val.value = "";
        oh_lunchtime_end_val.value = "";
    }


    if (checked_monday.checked == true && oh_repeat.checked === false) {
        oh_halfday_lunch_monday.style.display = "flex";
        oh_monday.style.display = "flex";
        oh_lunchtime_monday.style.display = "flex";
    }
    if (checked_monday.checked == false) {
        oh_halfday_lunch_monday.style.display = "none";
        oh_monday.style.display = "none";
        oh_lunchtime_monday.style.display = "none";
    }
    if (checked_tuesday.checked == true && oh_repeat.checked === false) {
        oh_halfday_lunch_tuesday.style.display = "flex";
        oh_tuesday.style.display = "flex";
        oh_lunchtime_tuesday.style.display = "flex";
    }
    if (checked_tuesday.checked == false) {
        oh_halfday_lunch_tuesday.style.display = "none";
        oh_tuesday.style.display = "none";
        oh_lunchtime_tuesday.style.display = "none";
    }
    if (checked_wednesday.checked == true && oh_repeat.checked === false) {
        oh_halfday_lunch_wednesday.style.display = "flex";
        oh_wednesday.style.display = "flex";
        oh_lunchtime_wednesday.style.display = "flex";
    }
    if (checked_wednesday.checked == false) {
        oh_halfday_lunch_wednesday.style.display = "none";
        oh_wednesday.style.display = "none";
        oh_lunchtime_wednesday.style.display = "none";
    }
    if (checked_thursday.checked == true && oh_repeat.checked === false) {
        oh_halfday_lunch_thursday.style.display = "flex";
        oh_thursday.style.display = "flex";
        oh_lunchtime_thursday.style.display = "flex";
    }
    if (checked_thursday.checked == false) {
        oh_halfday_lunch_thursday.style.display = "none";
        oh_thursday.style.display = "none";
        oh_lunchtime_thursday.style.display = "none";
    }
    if (checked_friday.checked == true && oh_repeat.checked === false) {
        oh_halfday_lunch_friday.style.display = "flex";
        oh_friday.style.display = "flex";
        oh_lunchtime_friday.style.display = "flex";
    }
    if (checked_friday.checked == false) {
        oh_halfday_lunch_friday.style.display = "none";
        oh_friday.style.display = "none";
        oh_lunchtime_friday.style.display = "none";
    }
    if (checked_saturday.checked == true && oh_repeat.checked === false) {
        oh_halfday_lunch_saturday.style.display = "flex";
        oh_saturday.style.display = "flex";
        oh_lunchtime_saturday.style.display = "flex";
    }
    if (checked_saturday.checked == false) {
        oh_halfday_lunch_saturday.style.display = "none";
        oh_saturday.style.display = "none";
        oh_lunchtime_saturday.style.display = "none";
    }
    if (checked_sunday.checked == true && oh_repeat.checked === false) {
        oh_halfday_lunch_sunday.style.display = "flex";
        oh_sunday.style.display = "flex";
        oh_lunchtime_sunday.style.display = "flex";
    }
    if (checked_sunday.checked == false) {
        oh_halfday_lunch_sunday.style.display = "none";
        oh_sunday.style.display = "none";
        oh_lunchtime_sunday.style.display = "none";
    }
    if (oh_repeat.checked === false) {
        oh_halfday_lunch.style.display = "none";
        oh_general.style.display = "none";
        oh_lunchtime.style.display = "none";
    }

    if (checked_monday.checked == true && oh_repeat.checked === false && monday_lunch_notclosed.checked == true) {
        oh_halfday_lunch_monday.style.display = "flex";
        oh_monday.style.display = "flex";
        oh_lunchtime_monday.style.display = "none";      
    }

    if (checked_tuesday.checked == true && oh_repeat.checked === false && tuesday_lunch_notclosed.checked == true) {
        oh_halfday_lunch_tuesday.style.display = "flex";
        oh_tuesday.style.display = "flex";
        oh_lunchtime_tuesday.style.display = "none";      
    }

    if (checked_wednesday.checked == true && oh_repeat.checked === false && wednesday_lunch_notclosed.checked == true) {
        oh_halfday_lunch_wednesday.style.display = "flex";
        oh_wednesday.style.display = "flex";
        oh_lunchtime_wednesday.style.display = "none";      
    }

    if (checked_thursday.checked == true && oh_repeat.checked === false && thursday_lunch_notclosed.checked == true) {
        oh_halfday_lunch_thursday.style.display = "flex";
        oh_thursday.style.display = "flex";
        oh_lunchtime_thursday.style.display = "none";      
    }

    if (checked_friday.checked == true && oh_repeat.checked === false && friday_lunch_notclosed.checked == true) {
        oh_halfday_lunch_friday.style.display = "flex";
        oh_friday.style.display = "flex";
        oh_lunchtime_friday.style.display = "none";      
    }

    if (checked_saturday.checked == true && oh_repeat.checked === false && saturday_lunch_notclosed.checked == true) {
        oh_halfday_lunch_saturday.style.display = "flex";
        oh_saturday.style.display = "flex";
        oh_lunchtime_saturday.style.display = "none";      
    }

    if (checked_sunday.checked == true && oh_repeat.checked === false && sunday_lunch_notclosed.checked == true) {
        oh_halfday_lunch_sunday.style.display = "flex";
        oh_sunday.style.display = "flex";
        oh_lunchtime_sunday.style.display = "none";      
    }

    if(oh_repeat.checked==true && general_lunch_notclosed.checked == true){
        oh_lunchtime.style.display = "none";
    }

    if (general_open_halfday.checked === true) {
        oh_lunchtime.style.display = "none";
        document.querySelector(
            '[id^="field-ohlunch-general-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "none";
    }

    if (monday_open_halfday.checked === true) {
        oh_lunchtime_monday.style.display = "none";
        document.querySelector(
            '[id^="field-ohlunch-monday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "none";
    }

    if (tuesday_open_halfday.checked === true) {
        oh_lunchtime_tuesday.style.display = "none";
        document.querySelector(
            '[id^="field-ohlunch-tuesday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "none";
    }

    if (wednesday_open_halfday.checked === true) {
        oh_lunchtime_wednesday.style.display = "none";
        document.querySelector(
            '[id^="field-ohlunch-wednesday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "none";
    }

    if (thursday_open_halfday.checked === true) {
        oh_lunchtime_thursday.style.display = "none";
        document.querySelector(
            '[id^="field-ohlunch-thursday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "none";
    }

    if (friday_open_halfday.checked === true) {
        oh_lunchtime_friday.style.display = "none";
        document.querySelector(
            '[id^="field-ohlunch-friday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "none";
    }

    if (saturday_open_halfday.checked === true) {
        oh_lunchtime_saturday.style.display = "none";
        document.querySelector(
            '[id^="field-ohlunch-saturday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "none";
    }

    if (sunday_open_halfday.checked === true) {
        oh_lunchtime_sunday.style.display = "none";
        document.querySelector(
            '[id^="field-ohlunch-sunday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "none";
    }
}

// Function Show Hide Elements of Days
function openinghours_halfday() {
    // General halfday Buttons
    if (
        general_open_allday.checked === true &&
        general_lunch_closed.checked === true
    ) {
        oh_lunchtime.style.display = "flex";
        document.querySelector(
            '[id^="field-ohlunch-general-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "flex";
    }
    if (general_open_allday.checked === true) {
        document.querySelector(
            '[id^="field-ohlunch-general-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "flex";
    }
    if (general_open_halfday.checked === true) {
        oh_lunchtime.style.display = "none";
        document.querySelector(
            '[id^="field-ohlunch-general-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "none";
    }
    if (general_lunch_notclosed.checked === true) {
        oh_lunchtime.style.display = "none";
    }

   

    // Monday halfday Buttons
    if (
        monday_open_allday.checked === true &&
        monday_lunch_closed.checked === true
    ) {
        oh_lunchtime_monday.style.display = "flex";
        document.querySelector(
            '[id^="field-ohlunch-monday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "flex";
    }
    if (monday_open_allday.checked === true) {
        document.querySelector(
            '[id^="field-ohlunch-monday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "flex";
    }
    if (monday_open_halfday.checked === true) {
        oh_lunchtime_monday.style.display = "none";
        document.querySelector(
            '[id^="field-ohlunch-monday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "none";
    }
    if (monday_lunch_notclosed.checked === true) {
        oh_lunchtime_monday.style.display = "none";
    }

    // Tuesday halfday Buttons
    if (
        tuesday_open_allday.checked === true &&
        tuesday_lunch_closed.checked === true
    ) {
        oh_lunchtime_tuesday.style.display = "flex";
        document.querySelector(
            '[id^="field-ohlunch-tuesday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "flex";
    }
    if (tuesday_open_allday.checked === true) {
        document.querySelector(
            '[id^="field-ohlunch-tuesday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "flex";
    }
    if (tuesday_open_halfday.checked === true) {
        oh_lunchtime_tuesday.style.display = "none";
        document.querySelector(
            '[id^="field-ohlunch-tuesday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "none";
    }
    if (tuesday_lunch_notclosed.checked === true) {
        oh_lunchtime_tuesday.style.display = "none";
    }

    // Wednesday halfday Buttons
    if (
        wednesday_open_allday.checked === true &&
        wednesday_lunch_closed.checked === true
    ) {
        oh_lunchtime_wednesday.style.display = "flex";
        document.querySelector(
            '[id^="field-ohlunch-wednesday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "flex";
    }
    if (wednesday_open_allday.checked === true) {
        document.querySelector(
            '[id^="field-ohlunch-wednesday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "flex";
    }
    if (wednesday_open_halfday.checked === true) {
        oh_lunchtime_wednesday.style.display = "none";
        document.querySelector(
            '[id^="field-ohlunch-wednesday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "none";
    }
    if (wednesday_lunch_notclosed.checked === true) {
        oh_lunchtime_wednesday.style.display = "none";
    }

    // Thursday halfday Buttons
    if (
        thursday_open_allday.checked === true &&
        thursday_lunch_closed.checked === true
    ) {
        oh_lunchtime_thursday.style.display = "flex";
        document.querySelector(
            '[id^="field-ohlunch-thursday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "flex";
    }
    if (thursday_open_allday.checked === true) {
        document.querySelector(
            '[id^="field-ohlunch-thursday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "flex";
    }
    if (thursday_open_halfday.checked === true) {
        oh_lunchtime_thursday.style.display = "none";
        document.querySelector(
            '[id^="field-ohlunch-thursday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "none";
    }
    if (thursday_lunch_notclosed.checked === true) {
        oh_lunchtime_thursday.style.display = "none";
    }

    // Friday halfday Buttons
    if (
        friday_open_allday.checked === true &&
        friday_lunch_closed.checked === true
    ) {
        oh_lunchtime_friday.style.display = "flex";
        document.querySelector(
            '[id^="field-ohlunch-friday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "flex";
    }
    if (friday_open_allday.checked === true) {
        document.querySelector(
            '[id^="field-ohlunch-friday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "flex";
    }
    if (friday_open_halfday.checked === true) {
        oh_lunchtime_friday.style.display = "none";
        document.querySelector(
            '[id^="field-ohlunch-friday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "none";
    }
    if (friday_lunch_notclosed.checked === true) {
        oh_lunchtime_friday.style.display = "none";
    }

    // Saturday halfday Buttons
    if (
        saturday_open_allday.checked === true &&
        saturday_lunch_closed.checked === true
    ) {
        oh_lunchtime_saturday.style.display = "flex";
        document.querySelector(
            '[id^="field-ohlunch-saturday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "flex";
    }
    if (saturday_open_allday.checked === true) {
        document.querySelector(
            '[id^="field-ohlunch-saturday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "flex";
    }
    if (saturday_open_halfday.checked === true) {
        oh_lunchtime_saturday.style.display = "none";
        document.querySelector(
            '[id^="field-ohlunch-saturday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "none";
    }
    if (saturday_lunch_notclosed.checked === true) {
        oh_lunchtime_saturday.style.display = "none";
    }

    // Sunday halfday Buttons
    if (
        sunday_open_allday.checked === true &&
        sunday_lunch_closed.checked === true
    ) {
        oh_lunchtime_sunday.style.display = "flex";
        document.querySelector(
            '[id^="field-ohlunch-sunday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "flex";
    }
    if (sunday_open_allday.checked === true) {
        document.querySelector(
            '[id^="field-ohlunch-sunday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "flex";
    }
    if (sunday_open_halfday.checked === true) {
        oh_lunchtime_sunday.style.display = "none";
        document.querySelector(
            '[id^="field-ohlunch-sunday-"]'
        ).parentElement.parentElement.parentElement.parentElement.parentElement.style.display =
            "none";
    }
    if (sunday_lunch_notclosed.checked === true) {
        oh_lunchtime_sunday.style.display = "none";
    }
    openinghours_repeat();
}
