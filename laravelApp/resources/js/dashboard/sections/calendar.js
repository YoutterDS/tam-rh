window.subformFestivity = function(action, type) {
    var obj     = $("#box-addFestivity-form");
    var form    = $(".box-subforms-form form");
    var btnText = $("#addFestivityFormBtn span");

    if( action === 'open') {
        if( type === 'create' ){
            obj.addClass('create')
            form.addClass('form-green')
            btnText.text("AÑADIR DÍA FESTIVO")
        }
        if( type === 'edit' ) {
            obj.removeClass('create')
            form.removeClass('form-green')
            btnText.text("EDITAR DÍA FESTIVO")
        }
        obj.addClass('active').removeClass('not-active')
    }

    if( action === 'close') {
        obj.addClass('not-active').removeClass('active create')
        btnText.text("AÑADIR DÍA FESTIVO")
    }

    $('html, body').stop().animate({ scrollTop: 0}, 600);
}

window.subformHolidays = function(action, type) {
    var obj     = $("#box-employeerRequestHolidays-form");
    var form    = $(".box-subforms-form form");
    var btnText = $("#employeerRequestHolidaysFormBtn span");

    if( action === 'open') {
        if( type === 'create' ){
            obj.addClass('create')
            form.addClass('form-green')
            btnText.text("PETICIÓN DÍA FESTIVO")
        }
        if( type === 'edit' ) {
            obj.removeClass('create')
            form.removeClass('form-green')
            btnText.text("EDITAR PETICIÓN")
        }
        obj.addClass('active').removeClass('not-active')
    }

    if( action === 'close') {
        obj.addClass('not-active').removeClass('active create')
        btnText.text("PETICIÓN DÍA FESTIVO")
    }

    $('html, body').stop().animate({ scrollTop: 0}, 600);
}
