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

var title_oh_days = document.querySelector('[for^="field-openingday-monday-"]');
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
window.addEventListener("load", reservation_template);

//Funktion Hide Show je nach Template
function reservation_template() {
    let calender_unit = document.querySelector('[id^="field-calendarunit-"]')
        .parentElement.parentElement;
    let tbl_gastro = document.querySelector(
        '[for^="field-specificationgastro-"]'
    ).parentElement;

    let sport_unit = document.querySelector(
        '[id^="field-specificationsportunit-"]'
    ).parentElement.parentElement;
    let sport_number = document.querySelector(
        '[id^="field-specificationsportnumber-"]'
    ).parentElement.parentElement;
    let tbl_rooms = document.querySelector('[for^="field-specificationroom"]')
        .parentElement;
    let fld_service = document.querySelector(
        '[id^="field-specificationservice-"]'
    ).parentElement.parentElement;
    let tbl_employee = document.querySelector(
        '[for^="field-specificationemployee-"]'
    ).parentElement;

    let required_att = document.querySelector('[id^="field-calendarunit-"]');

    switch (select_template.value) {
        case "none":
            title_oh_days.innerHTML =
                "An welchen Tagen können Reservationen vorgenommen werden?";
            //Ein- und Ausblenden je nach Kalender-Template

            if ((calender_unit.style.display = "none")) {
                calender_unit.style.display = "inline";
            }

            if ((sport_unit.style.display = "inline")) {
                sport_unit.style.display = "none";
            }

            if ((sport_number.style.display = "inline")) {
                sport_number.style.display = "none";
            }

            if ((tbl_rooms.style.display = "inline")) {
                tbl_rooms.style.display = "none";
            }

            if ((fld_service.style.display = "inline")) {
                fld_service.style.display = "none";
            }

            if ((tbl_employee.style.display = "inline")) {
                tbl_employee.style.display = "none";
            }

            if ((tbl_gastro.style.display = "inline")) {
                tbl_gastro.style.display = "none";
            }

            break;
        case "gastronomy":
            title_oh_days.innerHTML =
                "Wann hat dein Gastronomie-Betrieb geöffnet?";
            //Ein- und Ausblenden je nach Kalender-Template
            if ((calender_unit.style.display = "inline")) {
                calender_unit.style.display = "none";
            }

            if ((sport_unit.style.display = "inline")) {
                sport_unit.style.display = "none";
            }

            if ((sport_number.style.display = "inline")) {
                sport_number.style.display = "none";
            }

            if ((tbl_rooms.style.display = "inline")) {
                tbl_rooms.style.display = "none";
            }

            if ((fld_service.style.display = "inline")) {
                fld_service.style.display = "none";
            }

            if ((tbl_employee.style.display = "inline")) {
                tbl_employee.style.display = "none";
            }

            if ((tbl_gastro.style.display = "none")) {
                tbl_gastro.style.display = "inline";
            }

            break;
        case "sports":
            title_oh_days.innerHTML = "Wann hat deine Sportanlage geöffnet?";
            //Ein- und Ausblenden je nach Kalender-Template

            if ((calender_unit.style.display = "inline")) {
                calender_unit.style.display = "none";
            }

            if ((sport_unit.style.display = "none")) {
                sport_unit.style.display = "inline";
            }

            if ((sport_number.style.display = "none")) {
                sport_number.style.display = "inline";
            }

            if ((tbl_rooms.style.display = "inline")) {
                tbl_rooms.style.display = "none";
            }

            if ((fld_service.style.display = "inline")) {
                fld_service.style.display = "none";
            }

            if ((tbl_employee.style.display = "inline")) {
                tbl_employee.style.display = "none";
            }

            if ((tbl_gastro.style.display = "inline")) {
                tbl_gastro.style.display = "none";
            }
            break;
        case "room":
            title_oh_days.innerHTML =
                "Wann können deine Räume reserviert werden?";
            //Ein- und Ausblenden je nach Kalender-Template

            if ((calender_unit.style.display = "inline")) {
                calender_unit.style.display = "none";
            }

            if ((sport_unit.style.display = "inline")) {
                sport_unit.style.display = "none";
            }

            if ((sport_number.style.display = "inline")) {
                sport_number.style.display = "none";
            }

            if ((tbl_rooms.style.display = "none")) {
                tbl_rooms.style.display = "inline";
            }

            if ((fld_service.style.display = "inline")) {
                fld_service.style.display = "none";
            }

            if ((tbl_employee.style.display = "inline")) {
                tbl_employee.style.display = "none";
            }

            if ((tbl_gastro.style.display = "inline")) {
                tbl_gastro.style.display = "none";
            }
            break;
        case "services":
            title_oh_days.innerHTML =
                "An welchen Tagen kann deine Dienstleistung reserviert werden?";
            //Ein- und Ausblenden je nach Kalender-Template

            if ((calender_unit.style.display = "inline")) {
                calender_unit.style.display = "none";
            }

            if ((sport_unit.style.display = "inline")) {
                sport_unit.style.display = "none";
            }

            if ((sport_number.style.display = "inline")) {
                sport_number.style.display = "none";
            }

            if ((tbl_rooms.style.display = "inline")) {
                tbl_rooms.style.display = "none";
            }

            if ((fld_service.style.display = "none")) {
                fld_service.style.display = "inline";
            }

            if ((tbl_employee.style.display = "none")) {
                tbl_employee.style.display = "inline";
            }

            if ((tbl_gastro.style.display = "inline")) {
                tbl_gastro.style.display = "none";
            }
            break;
    }
}
