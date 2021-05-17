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

eval("var timerStart = true;\n\nfunction clock() {\n  var date = new Date();\n  var hrs = date.getHours();\n  var mins = date.getMinutes(); // let secs = date.getSeconds();\n\n  var period = \"AM\";\n\n  if (hrs == 0) {\n    hrs = 12;\n  } else if (hrs >= 12) {\n    hrs = hrs - 12;\n    period = \"PM\";\n  }\n\n  hrs = hrs < 10 ? \"0\" + hrs : hrs;\n  mins = mins < 10 ? \"0\" + mins : mins; // secs = secs < 10 ? \"0\" + secs : secs;\n\n  var time = \"\".concat(hrs, \":\").concat(mins, \" \").concat(period); // document.getElementById(\"clock\").innerText = time;\n  // setTimeout(clock, 1000);\n\n  postMessage(time);\n}\n\n;\n\nif (timerStart) {\n  myVar = setInterval(function () {\n    clock();\n  }, 1000);\n  timerStart = false;\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZGFzaGJvYXJkL2Nsb2NrLmpzP2NmZmQiXSwibmFtZXMiOlsidGltZXJTdGFydCIsImNsb2NrIiwiZGF0ZSIsIkRhdGUiLCJocnMiLCJnZXRIb3VycyIsIm1pbnMiLCJnZXRNaW51dGVzIiwicGVyaW9kIiwidGltZSIsInBvc3RNZXNzYWdlIiwibXlWYXIiLCJzZXRJbnRlcnZhbCJdLCJtYXBwaW5ncyI6IkFBQUEsSUFBSUEsVUFBVSxHQUFHLElBQWpCOztBQUVBLFNBQVNDLEtBQVQsR0FDQTtBQUNJLE1BQUlDLElBQUksR0FBRyxJQUFJQyxJQUFKLEVBQVg7QUFDQSxNQUFJQyxHQUFHLEdBQUdGLElBQUksQ0FBQ0csUUFBTCxFQUFWO0FBQ0EsTUFBSUMsSUFBSSxHQUFHSixJQUFJLENBQUNLLFVBQUwsRUFBWCxDQUhKLENBSUk7O0FBRUEsTUFBSUMsTUFBTSxHQUFHLElBQWI7O0FBQ0EsTUFBSUosR0FBRyxJQUFJLENBQVgsRUFBYztBQUNaQSxJQUFBQSxHQUFHLEdBQUcsRUFBTjtBQUNELEdBRkQsTUFFTyxJQUFJQSxHQUFHLElBQUksRUFBWCxFQUFlO0FBQ3BCQSxJQUFBQSxHQUFHLEdBQUdBLEdBQUcsR0FBRyxFQUFaO0FBQ0FJLElBQUFBLE1BQU0sR0FBRyxJQUFUO0FBQ0Q7O0FBQ0RKLEVBQUFBLEdBQUcsR0FBR0EsR0FBRyxHQUFHLEVBQU4sR0FBVyxNQUFNQSxHQUFqQixHQUF1QkEsR0FBN0I7QUFDQUUsRUFBQUEsSUFBSSxHQUFHQSxJQUFJLEdBQUcsRUFBUCxHQUFZLE1BQU1BLElBQWxCLEdBQXlCQSxJQUFoQyxDQWRKLENBZUk7O0FBRUEsTUFBSUcsSUFBSSxhQUFNTCxHQUFOLGNBQWFFLElBQWIsY0FBcUJFLE1BQXJCLENBQVIsQ0FqQkosQ0FrQkk7QUFDQTs7QUFFQUUsRUFBQUEsV0FBVyxDQUFDRCxJQUFELENBQVg7QUFDSDs7QUFBQTs7QUFFRCxJQUFJVCxVQUFKLEVBQWU7QUFDWFcsRUFBQUEsS0FBSyxHQUFDQyxXQUFXLENBQUMsWUFBVTtBQUN4QlgsSUFBQUEsS0FBSztBQUNSLEdBRmdCLEVBRWYsSUFGZSxDQUFqQjtBQUdBRCxFQUFBQSxVQUFVLEdBQUcsS0FBYjtBQUNGIiwic291cmNlc0NvbnRlbnQiOlsidmFyIHRpbWVyU3RhcnQgPSB0cnVlO1xuXG5mdW5jdGlvbiBjbG9jaygpXG57XG4gICAgbGV0IGRhdGUgPSBuZXcgRGF0ZSgpO1xuICAgIGxldCBocnMgPSBkYXRlLmdldEhvdXJzKCk7XG4gICAgbGV0IG1pbnMgPSBkYXRlLmdldE1pbnV0ZXMoKTtcbiAgICAvLyBsZXQgc2VjcyA9IGRhdGUuZ2V0U2Vjb25kcygpO1xuXG4gICAgbGV0IHBlcmlvZCA9IFwiQU1cIjtcbiAgICBpZiAoaHJzID09IDApIHtcbiAgICAgIGhycyA9IDEyO1xuICAgIH0gZWxzZSBpZiAoaHJzID49IDEyKSB7XG4gICAgICBocnMgPSBocnMgLSAxMjtcbiAgICAgIHBlcmlvZCA9IFwiUE1cIjtcbiAgICB9XG4gICAgaHJzID0gaHJzIDwgMTAgPyBcIjBcIiArIGhycyA6IGhycztcbiAgICBtaW5zID0gbWlucyA8IDEwID8gXCIwXCIgKyBtaW5zIDogbWlucztcbiAgICAvLyBzZWNzID0gc2VjcyA8IDEwID8gXCIwXCIgKyBzZWNzIDogc2VjcztcblxuICAgIGxldCB0aW1lID0gYCR7aHJzfToke21pbnN9ICR7cGVyaW9kfWA7XG4gICAgLy8gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJjbG9ja1wiKS5pbm5lclRleHQgPSB0aW1lO1xuICAgIC8vIHNldFRpbWVvdXQoY2xvY2ssIDEwMDApO1xuXG4gICAgcG9zdE1lc3NhZ2UodGltZSk7XG59O1xuXG5pZiAodGltZXJTdGFydCl7XG4gICAgbXlWYXI9c2V0SW50ZXJ2YWwoZnVuY3Rpb24oKXtcbiAgICAgICAgY2xvY2soKTtcbiAgICB9LDEwMDApO1xuICAgIHRpbWVyU3RhcnQgPSBmYWxzZTtcbiB9XG4iXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2Rhc2hib2FyZC9jbG9jay5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/dashboard/clock.js\n");

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