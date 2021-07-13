/*
window.subformOffice = function(action, type) {
    var obj         = $("#box-office-form");
    var form        = $(".box-subforms-form form");
    var btn         = $("#officeFormBtn");
    var btnText     = btn.find("span");
    var createText  = btn.attr('data-create');
    var editText    = btn.attr('data-edit');

    if( action === 'open') {
        if( type === 'create' ){
            obj.addClass('create')
            form.addClass('form-green')
            btnText.text(createText)
        }
        if( type === 'edit' ) {
            obj.removeClass('create')
            form.removeClass('form-green')
            btnText.text(editText)
        }
        obj.addClass('active').removeClass('not-active')
    }

    if( action === 'close') {
        obj.addClass('not-active').removeClass('active create')
    }

    $('html, body').stop().animate({ scrollTop: 0}, 600);
}
*/
