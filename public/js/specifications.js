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
/******/ 	return __webpack_require__(__webpack_require__.s = 7);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/specifications.js":
/*!***********************************************!*\
  !*** ./resources/assets/js/specifications.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/* =========== Calendar Specifications =========== */
//Knöpfe mit den Zeiteinheiten
var timeunit_minute = document.querySelector('[id^="field-specificationtimeunit-"][value="0"]');
var timeunit_hour = document.querySelector('[id^="field-specificationtimeunit-"][value="1"]');
var timeunit_day = document.querySelector('[id^="field-specificationtimeunit-"][value="2"]'); //Inputfelder mit Minutenangaben

var min_reservation_minute = document.querySelector('[id^="select2-field-specificationduration-min-min-"]').parentElement.parentElement.parentElement.parentElement.parentElement;
var max_reservation_minute = document.querySelector('[id^="select2-field-specificationduration-max-min-"]').parentElement.parentElement.parentElement.parentElement.parentElement; //Inputfelder mit Stundenangaben

var min_reservation_hour = document.querySelector('[id^="select2-field-specificationduration-min-h-"]').parentElement.parentElement.parentElement.parentElement.parentElement;
var max_reservation_hour = document.querySelector('[id^="select2-field-specificationduration-max-h-"]').parentElement.parentElement.parentElement.parentElement.parentElement; //Inputfelder mit Tage-Angaben

var min_reservation_day = document.querySelector('[id^="select2-field-specificationduration-min-d-"]').parentElement.parentElement.parentElement.parentElement.parentElement;
var max_reservation_day = document.querySelector('[id^="select2-field-specificationduration-max-d-"]').parentElement.parentElement.parentElement.parentElement.parentElement; //EventListener Zeiteinheit

timeunit_minute.addEventListener("click", reservation_timeunit);
timeunit_hour.addEventListener("click", reservation_timeunit);
timeunit_day.addEventListener("click", reservation_timeunit); //Standardmässig nichts anzeigen

min_reservation_minute.style.display = "none";
max_reservation_minute.style.display = "none";
min_reservation_hour.style.display = "none";
max_reservation_hour.style.display = "none";
min_reservation_day.style.display = "none";
max_reservation_day.style.display = "none"; // Function Show Hide TimeUnits

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

/***/ }),

/***/ 7:
/*!*****************************************************!*\
  !*** multi ./resources/assets/js/specifications.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\Bärni\Documents\HTW Chur\Studium\HS20\Major_Media_Application\Semesterprojekt\master\booking-system\resources\assets\js\specifications.js */"./resources/assets/js/specifications.js");


/***/ })

/******/ });