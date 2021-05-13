window.subformEditDocumentsList = function(action, token) {
    var obj     = $("#box-documents-form");
    var token   = token || 'create';
    var btnText = $("#documentListFormBtn span");

    if( action === 'open') {
        obj.addClass('active ' + token).removeClass('not-active')
        if( token === 'create' ) {
            btnText.text("Crear Lista de Documentos")
        } else {
            btnText.text("Editar Lista de Documentos")
        }
    }

    if( action === 'close') {
        obj.addClass('not-active').removeClass('active ' + token)
        btnText.text("Crear Lista de Documentos")
    }

    $('html, body').stop().animate({ scrollTop: 0}, 600);
}

window.subformAddDocument = function(action, target) {
    var obj     = $(target + ' .list-documents--form_add');

    if( action === 'open') {
        obj.addClass('active').removeClass('not-active')
    }

    if( action === 'close') {
        obj.addClass('not-active').removeClass('active')
    }

    // $('html, body').stop().animate({ scrollTop: obj.offset().top}, 600);
}
