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

/***/ "./resources/assets/js/frontend/reservation.js":
/*!*****************************************************!*\
  !*** ./resources/assets/js/frontend/reservation.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var start_splitted, end_splitted, time_slot, duration, h, m, end_time;
start_splitted = start_general.split(':');
end_splitted = end_general.split(':');
start_general = new Date(null, null, null, start_splitted[0], start_splitted[1]);
time_slot = new Date(null, null, null, start_splitted[0], start_splitted[1]);
end_general = new Date(null, null, null, end_splitted[0], end_splitted[1]);
duration = parseFloat(document.getElementById('duration_output').value);
console.log(start_general);
console.log(end_general);
/* time_slot.setMinutes(time_slot.getMinutes() + (duration * 60)); */

h = addZero(time_slot.getHours());
m = addZero(time_slot.getMinutes());
end_time = h + ":" + m;
console.log(end_time);
h = addZero(start_general.getHours());
m = addZero(start_general.getMinutes());
start_general = h + ":" + m;
console.log(start_general);
h = addZero(end_general.getHours());
m = addZero(end_general.getMinutes());
end_general = h + ":" + m;
console.log(end_general);

while (end_time <= end_general) {
  console.log(start_general + " - " + end_time);
  time_slot.setMinutes(time_slot.getMinutes() + duration * 60);
  h = addZero(time_slot.getHours());
  m = addZero(time_slot.getMinutes());
  end_time = h + ":" + m;
  console.log(end_time);
  console.log(start_general + " - " + end_time);
}

function addZero(i) {
  if (i < 10) {
    i = "0" + i;
  }

  return i;
}

/***/ }),

/***/ 9:
/*!***********************************************************!*\
  !*** multi ./resources/assets/js/frontend/reservation.js ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\Github\booking-system\resources\assets\js\frontend\reservation.js */"./resources/assets/js/frontend/reservation.js");


/***/ })

/******/ });