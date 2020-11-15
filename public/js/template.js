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

/***/ "./resources/assets/js/template.js":
/*!*****************************************!*\
  !*** ./resources/assets/js/template.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/* =========== Calendar KalenderTemplate Auswahl =========== */
//Auslesen des Template-Selectors
var select_template = document.querySelector('[id^="field-calendartemplate-"]');
var selected_template = document.querySelector('[id^="field-calendartemplate-"]').value;
var select_none = document.querySelector('[id^="select2-field-calendartemplat"][id$="-none"]');
var select_gastronomy = document.querySelector('[id^="select2-field-calendartemplat"][id$="-gastronomy"]');
var select_sports = document.querySelector('[id^="select2-field-calendartemplat"][id$="-sports"]');
var select_room = document.querySelector('[id^="select2-field-calendartemplat"][id$="-room"]');
var select_services = document.querySelector('[id^="select2-field-calendartemplat"][id$="-services"]'); //auszublendende und einzublendende Variablen

var res_objekt = document.querySelector('[id^="field-calendarunit-"]').parentElement.parentElement;
var title_oh_days = document.querySelector('[id^="field-openingday-monday"]').parentElement.parentElement.previousElementSibling;
var title_oh_identical = document.querySelector('[id^="field-openinghours-repeat-"][value="1"]').parentElement.parentElement.parentElement.previousElementSibling; //Montag

var oh_halfday_lunch_monday = document.querySelector('[id^="field-lunchbreak-monday-"]').parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
var oh_monday = document.querySelector('[id^="field-openinghours-monday-"]').parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_monday = document.querySelector('[id^="field-lunchbreackstart-monday-"]').parentElement.parentElement.parentElement.parentElement; //EventListener

select_template.addEventListener("change", reservation_template); //Funktion Hide Show je nach Template

function reservation_template() {
  switch (select_template.value) {
    case "none":
      title_oh_days.innerHTML = "Sandro stinkt.";
      console.log("none");
      break;

    case "gastronomy":
      title_oh_days.innerHTML = "Sandro stinkt.";
      console.log("gastronomy");
      break;

    case "sports":
      title_oh_days.innerHTML = "Sandro stinkt.";
      console.log("sports");
      break;

    case "room":
      title_oh_days.innerHTML = "Sandro stinkt.";
      console.log("room");
      break;

    case "services":
      title_oh_days.innerHTML = "Sandro stinkt.";
      console.log("services");
      break;
  }
}

/***/ }),

/***/ 9:
/*!***********************************************!*\
  !*** multi ./resources/assets/js/template.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Applications/XAMPP/xamppfiles/htdocs/booking-system/resources/assets/js/template.js */"./resources/assets/js/template.js");


/***/ })

/******/ });