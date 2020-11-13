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
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/openinghours.js":
/*!*********************************************!*\
  !*** ./resources/assets/js/openinghours.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/* =========== Calendar Opening Hours =========== */
// openinghours_repeat "Ja"-Knopf
var oh_repeat = document.querySelector('[id^="field-openinghours-repeat-"][value="1"]');
var oh_repeat_none = document.querySelector('[id^="field-openinghours-repeat-"][value="0"]'); // openinghours_halfday_closed_general und openinghourslunchbreak_general auslesen

var oh_halfday_lunch = document.querySelector('[id^="field-halfday-closed-general-"]').parentElement.parentElement.parentElement.parentElement.parentElement.parentElement; // openinghours_general und closinghours_general auslesen

var oh_general = document.querySelector('[id^="field-openinghours-general-"]').parentElement.parentElement.parentElement.parentElement; // lunchbreakstart_general und lunchbreakend_general auslesen

var oh_lunchtime = document.querySelector('[id^="field-lunchbreakstart-general-"]').parentElement.parentElement.parentElement.parentElement; //Montag

var oh_halfday_lunch_monday = document.querySelector('[id^="field-lunchbreak-monday-"]').parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
var oh_monday = document.querySelector('[id^="field-openinghours-monday-"]').parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_monday = document.querySelector('[id^="field-lunchbreackstart-monday-"]').parentElement.parentElement.parentElement.parentElement; //Dienstag

var oh_halfday_lunch_tuesday = document.querySelector('[id^="field-lunchbreak-tuesday-"]').parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
var oh_tuesday = document.querySelector('[id^="field-openinghours-tuesday-"]').parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_tuesday = document.querySelector('[id^="field-lunchbreackstart-tuesday-"]').parentElement.parentElement.parentElement.parentElement; //Mittwoch

var oh_halfday_lunch_wednesday = document.querySelector('[id^="field-lunchbreak-wednesday-"]').parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
var oh_wednesday = document.querySelector('[id^="field-openinghours-wednesday-"]').parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_wednesday = document.querySelector('[id^="field-lunchbreackstart-wednesday-"]').parentElement.parentElement.parentElement.parentElement; //Donnerstag

var oh_halfday_lunch_thursday = document.querySelector('[id^="field-lunchbreak-thursday-"]').parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
var oh_thursday = document.querySelector('[id^="field-openinghours-thursday-"]').parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_thursday = document.querySelector('[id^="field-lunchbreackstart-thursday-"]').parentElement.parentElement.parentElement.parentElement; //Freitag

var oh_halfday_lunch_friday = document.querySelector('[id^="field-lunchbreak-friday-"]').parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
var oh_friday = document.querySelector('[id^="field-openinghours-friday-"]').parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_friday = document.querySelector('[id^="field-lunchbreackstart-friday-"]').parentElement.parentElement.parentElement.parentElement; //Samstag

var oh_halfday_lunch_saturday = document.querySelector('[id^="field-lunchbreak-saturday-"]').parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
var oh_saturday = document.querySelector('[id^="field-openinghours-saturday-"]').parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_saturday = document.querySelector('[id^="field-lunchbreackstart-saturday-"]').parentElement.parentElement.parentElement.parentElement; //Sonntag

var oh_halfday_lunch_sunday = document.querySelector('[id^="field-lunchbreak-sunday-"]').parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
var oh_sunday = document.querySelector('[id^="field-openinghours-sunday-"]').parentElement.parentElement.parentElement.parentElement;
var oh_lunchtime_sunday = document.querySelector('[id^="field-lunchbreackstart-sunday-"]').parentElement.parentElement.parentElement.parentElement; // EventListener onClick => Ja/Nein Button

oh_repeat.addEventListener("click", openinghours_repeat);
oh_repeat_none.addEventListener("click", openinghours_repeat);

function openinghours_repeat() {
  if (oh_repeat.checked === true) {
    oh_halfday_lunch_monday.style.display = "none";
    oh_monday.style.display = "none";
    oh_lunchtime_monday.style.display = "none";
    console.log("none");
  } else {
    oh_halfday_lunch_monday.style.display = "inline";
    oh_monday.style.display = "inline";
    oh_lunchtime_monday.style.display = "inline";
    console.log("inline");
  }
}

/***/ }),

/***/ 5:
/*!***************************************************!*\
  !*** multi ./resources/assets/js/openinghours.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\Bärni\Documents\HTW Chur\Studium\HS20\Major_Media_Application\Semesterprojekt\master\booking-system\resources\assets\js\openinghours.js */"./resources/assets/js/openinghours.js");


/***/ })

/******/ });