$(document).ready(function(){
    // TODO: fer una única clase per obrir i tancar les subseccions, per exemple btn-toggle-section
    $('.btn-toggle-subsection, .list-employees--item_email .list-employees--item_icon, .list-employees--item_view .list-employees--item_icon, .list-employees--item_edit .list-employees--item_icon, .list-employees .btn-close, .list-employees--item_info-hourly-record .list-employees--item_icon')
    .click(function(e){
        e.preventDefault();

        var target      = $(this).attr('data-target');
        var token       = $(target).attr('data-token');
        var section     = $(this).attr('data-section');
        var action      = $(this).attr('data-action');

        window.subformEmployeerToggleVisibility(target, section, action, token);
    })

    $('.list-employees--item_active .custom-switch').on('change', function(){
        var checked = $(this).find("input[type='checkbox']").is(":checked")
        if( !checked ) {
            $('#InactiveEmployeerModal').modal('show');
        }
    })

});

/*
    target  => destí formulari
    section => formulari a obrir/tancar
    action  => obrir o tancar el bloc
    token   => Token de l'usuari per carregar les dades
*/
window.subformEmployeerToggleVisibility = function(target, section, action, token) {
    var action              = action || 'close';
    var obj                 = $(target);
    var removeActiveForms   = obj.find('.active');
        removeActiveForms.removeClass('active');

    var formObj = obj.find('.list-employees--form_' + section);
    console.log(formObj)

    if( action === 'open') {
        obj.addClass("active")
        formObj.addClass("active");
    } else {
        obj.removeClass("active")
        formObj.removeClass("active");
    }
}

window.subformEditEmployeer = function(action, type) {
    var obj     = $("#box-employeer-form");
    var form    = $(".box-subforms-form form");

    if( action === 'open') {
        obj.addClass('active create').removeClass('not-active')
    }

    if( action === 'close') {
        obj.addClass('not-active').removeClass('active create')
    }

    $('html, body').stop().animate({ scrollTop: 0}, 600);
}
