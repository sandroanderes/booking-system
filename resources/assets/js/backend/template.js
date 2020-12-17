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
var title_oh_days = document.querySelector('[for^="field-ohday-monday-"]');

//EventListener
select_template.addEventListener("change", reservation_template);
window.addEventListener("load", reservation_template);

//Funktion Hide Show je nach Template
function reservation_template() {
    let calendar_unit = document.querySelector('[id^="field-calendarunit-"]')
        .parentElement.parentElement;
    let tbl_gastro1 = document.querySelector(
        '[id^="field-specificationtable-one-"]'
    ).parentElement.parentElement.parentElement.parentElement;
    let tbl_gastro2 = document.querySelector(
        '[id^="field-specificationtable-five-"]'
    ).parentElement.parentElement.parentElement.parentElement;

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

    let calendar_unit_val = document.querySelector(
        '[id^="field-calendarunit-"]'
    );

    switch (select_template.value) {
        case "none":
            title_oh_days.innerHTML =
                "An welchen Tagen können Reservationen vorgenommen werden?";
            //Ein- und Ausblenden je nach Kalender-Template
            if ((calendar_unit.style.display = "none")) {
                calendar_unit.style.display = "inline";
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

            if ((tbl_gastro1.style.display = "flex")) {
                tbl_gastro1.style.display = "none";
            }

            if ((tbl_gastro2.style.display = "flex")) {
                tbl_gastro2.style.display = "none";
            }

            break;
        case "gastronomy":
            title_oh_days.innerHTML =
                "Wann hat dein Gastronomie-Betrieb geöffnet?";
            //Ein- und Ausblenden je nach Kalender-Template

            if ((calendar_unit.style.display = "inline")) {
                calendar_unit_val.value = "";
                calendar_unit.style.display = "none";
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

            if ((tbl_gastro1.style.display = "none")) {
                tbl_gastro1.style.display = "flex";
            }

            if ((tbl_gastro2.style.display = "none")) {
                tbl_gastro2.style.display = "flex";
            }

            break;
        case "sports":
            title_oh_days.innerHTML = "Wann hat deine Sportanlage geöffnet?";
            //Ein- und Ausblenden je nach Kalender-Template

            if ((calendar_unit.style.display = "inline")) {
                calendar_unit_val.value = "";
                calendar_unit.style.display = "none";
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

            if ((tbl_gastro1.style.display = "flex")) {
                tbl_gastro1.style.display = "none";
            }

            if ((tbl_gastro2.style.display = "flex")) {
                tbl_gastro2.style.display = "none";
            }

            break;
        case "room":
            title_oh_days.innerHTML =
                "Wann können deine Räume reserviert werden?";
            //Ein- und Ausblenden je nach Kalender-Template

            if ((calendar_unit.style.display = "inline")) {
                calendar_unit_val.value = "";
                calendar_unit.style.display = "none";
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

            if ((tbl_gastro1.style.display = "flex")) {
                tbl_gastro1.style.display = "none";
            }

            if ((tbl_gastro2.style.display = "flex")) {
                tbl_gastro2.style.display = "none";
            }

            break;
        case "services":
            title_oh_days.innerHTML =
                "An welchen Tagen kann deine Dienstleistung reserviert werden?";
            //Ein- und Ausblenden je nach Kalender-Template

            if ((calendar_unit.style.display = "inline")) {
                calendar_unit_val.value = "";
                calendar_unit.style.display = "none";
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

            if ((tbl_gastro1.style.display = "flex")) {
                tbl_gastro1.style.display = "none";
            }

            if ((tbl_gastro2.style.display = "flex")) {
                tbl_gastro2.style.display = "none";
            }

            break;
    }
}
