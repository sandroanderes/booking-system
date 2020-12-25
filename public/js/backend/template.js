/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 9);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/backend/template.js":
/*!*************************************************!*\
  !*** ./resources/assets/js/backend/template.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/* =========== Calendar KalenderTemplate Auswahl =========== */
//Auslesen des Template-Selectors
var select_template = document.querySelector('[id^="field-calendartemplate-"]');
var accordion_3 = document.querySelector("#heading-schritt-3-reservations-spezifikationen");
var selected_template = document.querySelector('[id^="field-calendartemplate-"]').value;
var select_none = document.querySelector('[id^="select2-field-calendartemplat"][id$="-none"]');
var select_gastronomy = document.querySelector('[id^="select2-field-calendartemplat"][id$="-gastronomy"]');
var select_sports = document.querySelector('[id^="select2-field-calendartemplat"][id$="-sports"]');
var select_room = document.querySelector('[id^="select2-field-calendartemplat"][id$="-room"]');
var select_services = document.querySelector('[id^="select2-field-calendartemplat"][id$="-services"]');
var gastro_table = document.querySelector('[for^="field-gastrotable-"]').parentElement; //auszublendende und einzublendende Variablen

var res_objekt = document.querySelector('[id^="field-calendarunit-"]').parentElement.parentElement;
var title_oh_days = document.querySelector('[for^="field-ohday-monday-"]'); //EventListener

select_template.addEventListener("change", reservation_template);
accordion_3.addEventListener("click", reservation_template);
window.addEventListener("load", reservation_template); //Funktion Hide Show je nach Template

function reservation_template() {
  var calendar_unit = document.querySelector('[id^="field-calendarunit-"]').parentElement.parentElement;
  var sport_unit = document.querySelector('[id^="field-sportsname-"]').parentElement.parentElement;
  var sport_number = document.querySelector('[id^="field-sportsnumber-"]').parentElement.parentElement;
  var tbl_rooms = document.querySelector('[for^="field-rooms-"]').parentElement;
  var fld_service = document.querySelector('[id^="field-service-employeesservice-name-"]').parentElement.parentElement;
  var tbl_employee = document.querySelector('[for^="field-service-employees-"]').parentElement;
  var calendar_unit_val = document.querySelector('[id^="field-calendarunit-"]');

  switch (select_template.value) {
    case "none":
      title_oh_days.innerHTML = "An welchen Tagen können Reservationen vorgenommen werden?"; //Ein- und Ausblenden je nach Kalender-Template

      if (calendar_unit.style.display = "none") {
        calendar_unit.style.display = "inline";
      }

      if (sport_unit.style.display = "inline") {
        sport_unit.style.display = "none";
      }

      if (sport_number.style.display = "inline") {
        sport_number.style.display = "none";
      }

      if (tbl_rooms.style.display = "inline") {
        tbl_rooms.style.display = "none";
      }

      if (fld_service.style.display = "inline") {
        fld_service.style.display = "none";
      }

      if (tbl_employee.style.display = "inline") {
        tbl_employee.style.display = "none";
      }

      if (gastro_table.style.display = "inline") {
        gastro_table.style.display = "none";
      }

      break;

    case "gastronomy":
      title_oh_days.innerHTML = "Wann hat dein Gastronomie-Betrieb geöffnet?"; //Ein- und Ausblenden je nach Kalender-Template

      if (calendar_unit.style.display = "inline") {
        calendar_unit_val.value = "";
        calendar_unit.style.display = "none";
      }

      if (sport_unit.style.display = "inline") {
        sport_unit.style.display = "none";
      }

      if (sport_number.style.display = "inline") {
        sport_number.style.display = "none";
      }

      if (tbl_rooms.style.display = "inline") {
        tbl_rooms.style.display = "none";
      }

      if (fld_service.style.display = "inline") {
        fld_service.style.display = "none";
      }

      if (tbl_employee.style.display = "inline") {
        tbl_employee.style.display = "none";
      }

      if (gastro_table.style.display = "none") {
        gastro_table.style.display = "inline";
      }

      break;

    case "sports":
      title_oh_days.innerHTML = "Wann hat deine Sportanlage geöffnet?"; //Ein- und Ausblenden je nach Kalender-Template

      if (calendar_unit.style.display = "inline") {
        calendar_unit_val.value = "";
        calendar_unit.style.display = "none";
      }

      if (sport_unit.style.display = "none") {
        sport_unit.style.display = "inline";
      }

      if (sport_number.style.display = "none") {
        sport_number.style.display = "inline";
      }

      if (tbl_rooms.style.display = "inline") {
        tbl_rooms.style.display = "none";
      }

      if (fld_service.style.display = "inline") {
        fld_service.style.display = "none";
      }

      if (tbl_employee.style.display = "inline") {
        tbl_employee.style.display = "none";
      }

      if (gastro_table.style.display = "inline") {
        gastro_table.style.display = "none";
      }

      break;

    case "room":
      title_oh_days.innerHTML = "Wann können deine Räume reserviert werden?"; //Ein- und Ausblenden je nach Kalender-Template

      if (calendar_unit.style.display = "inline") {
        calendar_unit_val.value = "";
        calendar_unit.style.display = "none";
      }

      if (sport_unit.style.display = "inline") {
        sport_unit.style.display = "none";
      }

      if (sport_number.style.display = "inline") {
        sport_number.style.display = "none";
      }

      if (tbl_rooms.style.display = "none") {
        tbl_rooms.style.display = "inline";
      }

      if (fld_service.style.display = "inline") {
        fld_service.style.display = "none";
      }

      if (tbl_employee.style.display = "inline") {
        tbl_employee.style.display = "none";
      }

      if (gastro_table.style.display = "inline") {
        gastro_table.style.display = "none";
      }

      break;

    case "services":
      title_oh_days.innerHTML = "An welchen Tagen kann deine Dienstleistung reserviert werden?"; //Ein- und Ausblenden je nach Kalender-Template

      if (calendar_unit.style.display = "inline") {
        calendar_unit_val.value = "";
        calendar_unit.style.display = "none";
      }

      if (sport_unit.style.display = "inline") {
        sport_unit.style.display = "none";
      }

      if (sport_number.style.display = "inline") {
        sport_number.style.display = "none";
      }

      if (tbl_rooms.style.display = "inline") {
        tbl_rooms.style.display = "none";
      }

      if (fld_service.style.display = "none") {
        fld_service.style.display = "inline";
      }

      if (tbl_employee.style.display = "none") {
        tbl_employee.style.display = "inline";
      }

      if (gastro_table.style.display = "inline") {
        gastro_table.style.display = "none";
      }

      break;
  }
}

/***/ }),

/***/ 9:
/*!*******************************************************!*\
  !*** multi ./resources/assets/js/backend/template.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\Github\booking-system\resources\assets\js\backend\template.js */"./resources/assets/js/backend/template.js");


/***/ })

/******/ });