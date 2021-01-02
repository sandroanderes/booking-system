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
/******/ 	return __webpack_require__(__webpack_require__.s = 8);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/frontend/frontend-calendar.js":
/*!***********************************************************!*\
  !*** ./resources/assets/js/frontend/frontend-calendar.js ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && Symbol.iterator in Object(iter)) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var arrAppointment;
$(function () {
  if (typeof Storage !== "undefined") {
    arrAppointment = localStorage.getItem("tbAppointment");
    arrAppointment = JSON.parse(arrAppointment);
    $("#btn_clear_storage").prop('disabled', false);
    $("#btn_clear_storage").show();

    if (arrAppointment == null || arrAppointment == "[null]") {
      $("#btn_clear_storage").prop('disabled', true);
      $("#btn_clear_storage").hide();
      arrAppointment = [];
      arrAppointment.push(JSON.parse(localStorage.getItem('tbAppointment')));
      localStorage.setItem('tbAppointment', JSON.stringify(arrAppointment));
    }
  } else {
    iziToast.warning({
      title: 'Caution',
      message: "Sorry, but your web browser do not support localstorage, therefore this app won't work as it suposed to. Try updating your browser first.",
      overlay: true,
      zindex: 999,
      position: 'center',
      timeout: 20000
    });
  }

  $('#description').inputmask('Regex', {
    regex: "(?:[\\w\\d]+(\\s)*){1,5}",
    clearIncomplete: true
  });
  $("#start_time").inputmask("hh:mm", {
    placeholder: "hh:mm (24h)",
    alias: "datetime",
    clearIncomplete: true,
    oncomplete: function oncomplete() {
      $("#end_time").focus();
    }
  });
  $("#end_time").inputmask("hh:mm", {
    placeholder: "hh:mm (24h)",
    alias: "datetime",
    clearIncomplete: true,
    oncomplete: function oncomplete() {
      compare();
      $("#submit").focus();
    }
  });
  $(".date-input").inputmask("dd/mm/yyyy", {
    placeholder: "dd/mm/yyyy",
    alias: "datetime",
    clearIncomplete: true
  });
  $('[data-toggle="popover"]').popover();
  print(false, true);
});
var today = new Date();
var currentMonth = today.getMonth();
var currentYear = today.getFullYear();
var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
showCalendar(currentMonth, currentYear);

function showCalendar(month, year) {
  var firstDay = new Date(year, month).getDay(); //let daysInMonth = 32 - new Date(year, month, 32).getDate();

  var daysInMonth = new Date(year, month + 1, 0).getDate();
  var tbl = document.getElementById("days");
  tbl.innerHTML = "";
  $("#month").text(months[month]);
  $("#month").data("val", month);
  $("#year").text(year);
  var date = 1;

  for (var i = 0; i < 6; i++) {
    var row = document.createElement("tr");
    row.className = "week week_".concat(i);

    for (var j = 0; j < 7; j++) {
      if (i === 0 && j < firstDay) {
        var cell = document.createElement("td");
        var cellText = document.createTextNode("");
        cell.classList.add("inactive");
        cell.classList.add("disabled");
        cell.classList.add("bg-secondary");
        cell.setAttribute('data-day', date);
        cell.appendChild(cellText);
        row.appendChild(cell);
      } else if (date > daysInMonth) {
        break;
      } else {
        var _cell = document.createElement("td");

        var _cellText = document.createTextNode(date);

        if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
          $(_cell).addClass("text-white active bg-primary today text-center font-weight-bold");
          $(_cell).attr('data-day', date);
          put_badges_new(_cell);
        } else if (date < today.getDate() && year <= today.getFullYear() && month <= today.getMonth()) {
          $(_cell).addClass("inactive disabled text-white bg-light text-muted text-center font-weight-light");
          $(_cell).attr('data-day', date);
          $(_cell).attr('disabled', 'disabled');
        } else if (date >= today.getDate() && year >= today.getFullYear() && month >= today.getMonth()) {
          $(_cell).addClass("active text-dark bg-white text-center font-weight-bold");
          $(_cell).attr('data-day', date);
          put_badges_new(_cell);
        } else {
          $(_cell).addClass("text-center text-secondary");
        }

        _cell.appendChild(_cellText);

        row.appendChild(_cell);
        date++;
      }
    }

    tbl.appendChild(row);
  }
}

$("#days td.active").on("click", function () {
  $('#date').val($(this).text() + "/" + ($('#month').data('val') + 1) + "/" + $('#year').text());

  if (is_empty() == true) {
    $("#submit").prop('disabled', true);
  } else {
    $("#submit").prop('disabled', false);
  }

  if ($("#description").val() == null || $("#description").val() == '') {
    $("#description").focus();
  } else {
    $("#submit").focus();
  }
});
$("#days td.inactive").on("click", function () {
  iziToast.error({
    title: 'Error',
    message: "You can make appointments just today and foward",
    overlay: true,
    zindex: 999,
    position: 'center',
    timeout: 3000
  });
});

function make_appointment() {
  if (is_empty() == false) {
    is_past_date();
    compare();

    if (is_overlap() == false) {
      var appointment = {
        id: $("#date").inputmask('unmaskedvalue') + $("#start_time").inputmask('unmaskedvalue') + $("#end_time").inputmask('unmaskedvalue'),
        date: $("#date").val(),
        description: $("#description").val(),
        start_time: $("#start_time").val(),
        end_time: $("#end_time").val()
      };
      SaveDataToLocalStorage(appointment);
      $("#btn_clear_storage").prop('disabled', false);
      $("#btn_clear_storage").show();
      print();
      clear_input();
      iziToast.success({
        title: 'Success',
        message: 'Appointment created'
      });
    } else {
      clear_input();
      iziToast.error({
        title: 'Error',
        message: "This appointment is overlaping another one",
        overlay: true,
        zindex: 999,
        position: 'center',
        timeout: 3000
      });
    }
  } else {
    iziToast.error({
      title: 'Error',
      message: "All input fields are needed in order to make an appointment",
      overlay: true,
      zindex: 999,
      position: 'center',
      timeout: 3000
    });
  }
}

$("#end_time, #start_time").focusout(function () {
  compare();
});
$("#end_time, #start_time, #date").keyup(function () {
  if (is_empty() == true) {
    $("#submit").prop('disabled', true);
  } else {
    $("#submit").prop('disabled', false);
  }
});

function clear_input() {
  $("#date").val('');
  $("#description").val('');
  $("#start_time").val('');
  $("#end_time").val('');
  $("#submit").prop('disabled', true);
}

function is_empty() {
  if ($("#date").val() == null || $("#date").val() == '' || $("#start_time").val() == null || $("#start_time").val() == '' || $("#end_time").val() == null || $("#end_time").val() == '') {
    return true;
  }

  return false;
}

function compare() {
  var startTime = Date.parse(get_Date($("#start_time").val()));
  var endTime = Date.parse(get_Date($("#end_time").val()));

  if (startTime > endTime) {
    $("#submit").prop('disabled', true);
    clear_input();
    iziToast.warning({
      title: 'Caution',
      message: "Start Time is greater than end time",
      overlay: true,
      zindex: 999,
      position: 'center',
      timeout: 2000
    });
  }

  if (startTime == endTime) {
    $("#submit").prop('disabled', true);
    clear_input();
    iziToast.warning({
      title: 'Caution',
      message: "Start Time equals end time",
      overlay: true,
      zindex: 999,
      position: 'center',
      timeout: 2000
    });
  }
}

function is_past_date() {
  var today = new Date();
  var arrDate = GetDateInput();
  var selected_date = new Date(arrDate[2], arrDate[1] - 1, arrDate[0], 0, 0, 0, 0);

  if (selected_date < today) {
    return true;
  }

  return false;
}

function GetDateInput() {
  var date = $("#date").val();
  return date.split("/");
}

function is_overlap(sTime, eTime) {
  if (sTime == undefined || eTime == undefined) {
    sTime = $("#start_time").val();
    eTime = $("#end_time").val();
  }

  if (+get_Date(sTime) < +get_Date(eTime)) {
    var timeList = localStorage.getItem("tbAppointment");

    if (timeList == null || timeList == "[null]") {
      return false;
    } else {
      timeList = JSON.parse(timeList);
    }

    for (var i = 0; i < timeList.length; i++) {
      var element = timeList[i];

      if (element.date == $("#date").val()) {
        if (sTime > element.start_time && sTime < element.end_time || eTime > element.start_time && eTime < element.end_time || sTime < element.start_time && eTime >= element.end_time || sTime <= element.start_time && eTime > element.end_time || sTime == element.start_time && eTime == element.end_time) {
          return true;
        }
      }
    }

    return false;
  } else {
    return false;
  }
}

function get_Date(time) {
  var arrDate = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
  return function (arrDate) {
    if (arrDate == false) {
      var arrDate = GetDateInput();
    }

    var date = new Date(arrDate[2], arrDate[1] - 1, arrDate[0], 0, 0, 0, 0);

    var _t = time.split(":");

    date.setHours(_t[0], _t[1], 0, 0);
    return date;
  }(arrDate);
}

function print() {
  var clear = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;
  var init = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
  var edit = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;

  if (clear != false) {
    $("#appointment_list > tbody").html("");
    return true;
  }

  ;
  var data = localStorage.getItem("tbAppointment");
  data = JSON.parse(data);

  if (data[0] !== null) {
    $("#appointment_list > tbody").html("");
    $(".week td.active").removeClass('badge1');
    $(".week td.active").removeAttr("data-badge");
    var date = [];

    if (data.length !== 0) {
      for (var i = 0; i < data.length; i++) {
        var element = data[i];
        $("#appointment_list > tbody").append("\n                    <tr>\n                        <td class=\"text-center align-middle\">".concat(element.date, "</td>\n                        <td class=\"text-center align-middle\">").concat(element.description, "</td>\n                        <td class=\"text-center align-middle\">").concat(element.start_time, "</td>\n                        <td class=\"text-center align-middle\">").concat(element.end_time, "</td>\n                        <td class=\"text-center align-middle\">\n                            <button class=\"btn btn-primary btn-sm \" onclick=\"edit_appointment(").concat(element.id, ")\"><i class=\"fas fa-pencil-alt\"></i></button>\n                            <button class=\"btn btn-danger btn-sm \" onclick=\"delete_appointment(").concat(element.id, ")\"><i class=\"fas fa-trash\"></i></button>\n                        </td>\n                    </tr>\n                    "));
        var currDate = element.date.split("/");
        date.push(currDate[0]);
      }

      date = _toConsumableArray(new Set(date));
      date.forEach(function (element) {
        var cell = document.querySelector(".week > td.active[data-day='".concat(element, "']"));
        put_badges_new(cell);
      });
    } else {
      var _element = document.querySelector(".week > td.active[data-badge]");

      if (_element !== null) {
        put_badges_new(_element);
      }
    }
  }
}

function SaveDataToLocalStorage(data) {
  var a = [];
  a = JSON.parse(localStorage.getItem('tbAppointment'));
  var a = a.filter(function (el) {
    return el != null;
  });
  a.push(data);
  a.sort(function (sTime1, sTime2) {
    var temp3 = parseInt(sTime1.date.slice(0, 2));
    var temp4 = parseInt(sTime2.date.slice(0, 2));
    var temp1 = Date.parse(get_Date(sTime1.start_time));
    var temp2 = Date.parse(get_Date(sTime2.start_time));
    if (temp3 > temp4) return 1;
    if (temp3 < temp4) return -1;
    if (temp1 > temp2) return 1;
    if (temp1 < temp2) return -1;
  });
  localStorage.setItem('tbAppointment', JSON.stringify(a));
}

function clear_storage() {
  localStorage.clear();
  var arrAppointment = [];
  arrAppointment.push(JSON.parse(localStorage.getItem('tbAppointment')));
  localStorage.setItem('tbAppointment', JSON.stringify(arrAppointment));
  $("#btn_clear_storage").prop('disabled', true);
  $("#btn_clear_storage").hide();
  $(".week td.active").removeClass('badge1');
  $(".week td.active").removeAttr("data-badge");
  print(true);
  iziToast.success({
    title: 'Success',
    message: 'All appointments deleted'
  });
}

function edit_appointment(id) {
  var data = localStorage.getItem("tbAppointment");
  data = JSON.parse(data);

  if (data[0] !== null) {
    for (var i = 0; i < data.length; i++) {
      var element = data[i];

      if (element.id == id) {
        $("#date").val(element.date);
        $("#description").val(element.description);
        $("#start_time").val(element.start_time);
        $("#end_time").val(element.end_time);
        $("#submit").prop('disabled', false);
        delete_appointment(id);
      }
    }
  }
}

;

function delete_appointment(id) {
  var data = localStorage.getItem("tbAppointment");
  data = JSON.parse(data);

  if (data[0] !== null) {
    for (var i = 0; i < data.length; i++) {
      var element = data[i];

      if (element == null) {
        data.splice(i, 1);
      }

      if (element.id == id) {
        data.splice(i, 1);
      }
    }

    data = data.filter(function (el) {
      return el != null;
    });
    localStorage.setItem('tbAppointment', JSON.stringify(data));
    print(false, false, true);
    iziToast.success({
      title: 'Success',
      message: 'Appointment deleted'
    });
  }
}

;

function put_badges_new(cell) {
  var data = localStorage.getItem("tbAppointment");
  data = JSON.parse(data);

  if (data[0] !== null) {
    var counter = 0;

    for (var i = 0; i < data.length; i++) {
      var element = data[i];

      if (cell.getAttribute("data-day") == element.date.slice(0, 2)) {
        counter++;
      }
    }

    if (counter >= 1) {
      cell.classList.add("badge1");
      cell.setAttribute('data-badge', counter);
    }

    if (counter <= 0) {
      cell.classList.remove("badge1");
      cell.removeAttribute('data-badge');
    }
  }
}

function sort_database(data) {
  return data.sort(function (sTime1, sTime2) {
    var temp3 = parseInt(sTime1.date.slice(0, 1));
    var temp4 = parseInt(sTime2.date.slice(0, 1));
    var temp1 = Date.parse(get_Date(sTime1.start_time));
    var temp2 = Date.parse(get_Date(sTime2.start_time));
    if (temp3 > temp4) return 1;
    if (temp3 < temp4) return -1;
    if (temp1 > temp2) return -1;
    if (temp1 < temp2) return 1;
  });
}

/***/ }),

/***/ 8:
/*!*****************************************************************!*\
  !*** multi ./resources/assets/js/frontend/frontend-calendar.js ***!
  \*****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Applications/XAMPP/xamppfiles/htdocs/booking-system/resources/assets/js/frontend/frontend-calendar.js */"./resources/assets/js/frontend/frontend-calendar.js");


/***/ })

/******/ });