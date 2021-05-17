/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/dashboard/clock.js":
/*!*****************************************!*\
  !*** ./resources/js/dashboard/clock.js ***!
  \*****************************************/
/***/ (() => {

eval("var timerStart = true;\n\nfunction clock() {\n  var date = new Date();\n  var hrs = date.getHours();\n  var mins = date.getMinutes(); // let secs = date.getSeconds();\n\n  var period = \"AM\";\n\n  if (hrs == 0) {\n    hrs = 12;\n  } else if (hrs >= 12) {\n    hrs = hrs - 12;\n    period = \"PM\";\n  }\n\n  hrs = hrs < 10 ? \"0\" + hrs : hrs;\n  mins = mins < 10 ? \"0\" + mins : mins; // secs     = secs < 10 ? \"0\" + secs : secs;\n\n  var time = \"\".concat(hrs, \":\").concat(mins, \" \").concat(period);\n  postMessage(time);\n}\n\n;\n\nif (timerStart) {\n  myClock = setInterval(function () {\n    clock();\n  }, 1000);\n  timerStart = false;\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZGFzaGJvYXJkL2Nsb2NrLmpzP2NmZmQiXSwibmFtZXMiOlsidGltZXJTdGFydCIsImNsb2NrIiwiZGF0ZSIsIkRhdGUiLCJocnMiLCJnZXRIb3VycyIsIm1pbnMiLCJnZXRNaW51dGVzIiwicGVyaW9kIiwidGltZSIsInBvc3RNZXNzYWdlIiwibXlDbG9jayIsInNldEludGVydmFsIl0sIm1hcHBpbmdzIjoiQUFBQSxJQUFJQSxVQUFVLEdBQUcsSUFBakI7O0FBRUEsU0FBU0MsS0FBVCxHQUNBO0FBQ0ksTUFBSUMsSUFBSSxHQUFNLElBQUlDLElBQUosRUFBZDtBQUNBLE1BQUlDLEdBQUcsR0FBT0YsSUFBSSxDQUFDRyxRQUFMLEVBQWQ7QUFDQSxNQUFJQyxJQUFJLEdBQU1KLElBQUksQ0FBQ0ssVUFBTCxFQUFkLENBSEosQ0FJSTs7QUFFQSxNQUFJQyxNQUFNLEdBQUcsSUFBYjs7QUFFQSxNQUFJSixHQUFHLElBQUksQ0FBWCxFQUFjO0FBQ1ZBLElBQUFBLEdBQUcsR0FBTyxFQUFWO0FBQ0gsR0FGRCxNQUVPLElBQUlBLEdBQUcsSUFBSSxFQUFYLEVBQWU7QUFDbEJBLElBQUFBLEdBQUcsR0FBT0EsR0FBRyxHQUFHLEVBQWhCO0FBQ0FJLElBQUFBLE1BQU0sR0FBSSxJQUFWO0FBQ0g7O0FBRURKLEVBQUFBLEdBQUcsR0FBV0EsR0FBRyxHQUFHLEVBQU4sR0FBVyxNQUFNQSxHQUFqQixHQUF1QkEsR0FBckM7QUFDQUUsRUFBQUEsSUFBSSxHQUFVQSxJQUFJLEdBQUcsRUFBUCxHQUFZLE1BQU1BLElBQWxCLEdBQXlCQSxJQUF2QyxDQWhCSixDQWlCSTs7QUFDQSxNQUFJRyxJQUFJLGFBQVNMLEdBQVQsY0FBZ0JFLElBQWhCLGNBQXdCRSxNQUF4QixDQUFSO0FBRUFFLEVBQUFBLFdBQVcsQ0FBQ0QsSUFBRCxDQUFYO0FBQ0g7O0FBQUE7O0FBRUQsSUFBSVQsVUFBSixFQUFlO0FBQ1hXLEVBQUFBLE9BQU8sR0FBQ0MsV0FBVyxDQUFDLFlBQVU7QUFDMUJYLElBQUFBLEtBQUs7QUFDUixHQUZrQixFQUVqQixJQUZpQixDQUFuQjtBQUdBRCxFQUFBQSxVQUFVLEdBQUcsS0FBYjtBQUNGIiwic291cmNlc0NvbnRlbnQiOlsidmFyIHRpbWVyU3RhcnQgPSB0cnVlO1xuXG5mdW5jdGlvbiBjbG9jaygpXG57XG4gICAgbGV0IGRhdGUgICAgPSBuZXcgRGF0ZSgpO1xuICAgIGxldCBocnMgICAgID0gZGF0ZS5nZXRIb3VycygpO1xuICAgIGxldCBtaW5zICAgID0gZGF0ZS5nZXRNaW51dGVzKCk7XG4gICAgLy8gbGV0IHNlY3MgPSBkYXRlLmdldFNlY29uZHMoKTtcblxuICAgIGxldCBwZXJpb2QgPSBcIkFNXCI7XG5cbiAgICBpZiAoaHJzID09IDApIHtcbiAgICAgICAgaHJzICAgICA9IDEyO1xuICAgIH0gZWxzZSBpZiAoaHJzID49IDEyKSB7XG4gICAgICAgIGhycyAgICAgPSBocnMgLSAxMjtcbiAgICAgICAgcGVyaW9kICA9IFwiUE1cIjtcbiAgICB9XG5cbiAgICBocnMgICAgICAgICA9IGhycyA8IDEwID8gXCIwXCIgKyBocnMgOiBocnM7XG4gICAgbWlucyAgICAgICAgPSBtaW5zIDwgMTAgPyBcIjBcIiArIG1pbnMgOiBtaW5zO1xuICAgIC8vIHNlY3MgICAgID0gc2VjcyA8IDEwID8gXCIwXCIgKyBzZWNzIDogc2VjcztcbiAgICBsZXQgdGltZSAgICA9IGAke2hyc306JHttaW5zfSAke3BlcmlvZH1gO1xuXG4gICAgcG9zdE1lc3NhZ2UodGltZSk7XG59O1xuXG5pZiAodGltZXJTdGFydCl7XG4gICAgbXlDbG9jaz1zZXRJbnRlcnZhbChmdW5jdGlvbigpe1xuICAgICAgICBjbG9jaygpO1xuICAgIH0sMTAwMCk7XG4gICAgdGltZXJTdGFydCA9IGZhbHNlO1xuIH1cbiJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvZGFzaGJvYXJkL2Nsb2NrLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/dashboard/clock.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/dashboard/clock.js"]();
/******/ 	
/******/ })()
;