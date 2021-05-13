/*!
 * Bootstrap-select v1.13.17 (https://developer.snapappointments.com/bootstrap-select)
 *
 * Copyright 2012-2020 SnapAppointments, LLC
 * Licensed under MIT (https://github.com/snapappointments/bootstrap-select/blob/master/LICENSE)
 */

(function (root, factory) {
  if (root === undefined && window !== undefined) root = window;
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module unless amdModuleId is set
    define(["jquery"], function (a0) {
      return (factory(a0));
    });
  } else if (typeof module === 'object' && module.exports) {
    // Node. Does not work with strict CommonJS, but
    // only CommonJS-like environments that support module.exports,
    // like Node.
    module.exports = factory(require("jquery"));
  } else {
    factory(root["jQuery"]);
  }
}(this, function (jQuery) {

(function ($) {
  $.fn.selectpicker.defaults = {
    noneSelectedText: 'No hi ha selecció',
    noneResultsText: 'No hi ha resultats {0}',
    countSelectedText: 'Seleccionats {0} de {1}',
    maxOptionsText: ['Límit assolit ({n} {var} max)', 'Límit de el grup arribat({n} {var} max)', ['elementos', 'element']],
    multipleSeparator: ', ',
    selectAllText: 'Seleccionar Tots',
    deselectAllText: 'Desmarcar Tots'
  };
})(jQuery);


}));
//# sourceMappingURL=defaults-ca_ES.js.map
