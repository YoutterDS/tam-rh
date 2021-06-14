// Init
require('./bootstrap');

//jQuery
require('jquery/dist/jquery.min');
window.$ = window.jQuery = require('jquery');

//OrgChart
// require('orgchart/dist/js/jquery.orgchart.min');

// Bootstrap Sb-admin-2
require('bootstrap/dist/js/bootstrap.js');
require('startbootstrap-sb-admin-2/js/sb-admin-2.js');
// require('startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.js');
require('startbootstrap-sb-admin-2/vendor/jquery-easing/jquery.easing.js');

// Bootstrap Selects
require('bootstrap-select/dist/js/bootstrap-select.min.js');
// require('bootstrap-select/dist/js/i18n/defaults-es_ES.js');

// Data & Time
require('./../../node_modules/moment/dist/moment.js');
window.moment = require('moment');
require('./daterangepicker.js');

// Chart
// require('chart.js');

// Alerts
window.Swal = require('./../../node_modules/sweetalert2/dist/sweetalert2.js');

// Init
require('./dashboard/main.js');

// Sections /*
require('./dashboard/clock.js');
require('./dashboard/sections/nav-pills.js');
require('./dashboard/sections/offices.js');
require('./dashboard/sections/employees.js');
require('./dashboard/sections/departments.js');
require('./dashboard/sections/organization-chart.js');
require('./dashboard/sections/timetable.js');
require('./dashboard/sections/documents.js');
require('./dashboard/sections/calendar.js');



