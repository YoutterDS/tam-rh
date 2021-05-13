$(document).ready(function(){
    $('.list-departments--item_edit .list-departments--item_icon, .list-departments--item_employeers .list-departments--item_icon, .list-departments .btn-close')
    .click(function(e){
        e.preventDefault();

        $this           = $(this);
        var target      = $this.attr('data-target');
        var token       = $(target).attr('data-token');
        var section     = $this.attr('data-section');
        var action      = $this.attr('data-action');

        window.subformDepartmentToggleVisibility(target, section, action, token);
    })

});

/*
    target  => destí formulari
    section => formulari a obrir/tancar
    action  => obrir o tancar el bloc
    token   => Token del departament per carregar les dades
*/
window.subformDepartmentToggleVisibility = function(target, section, action, token) {
    var action              = action || 'close';
    var obj                 = $(target);
    var removeActiveForms   = obj.find('.active');
        removeActiveForms.removeClass('active');

    var formObj = obj.find('.list-departments--form_' + section);

    if( action === 'open') {
        obj.addClass("active")
        formObj.addClass("active");
    } else {
        obj.removeClass("active")
        formObj.removeClass("active");
    }
}


window.subformEditDepartment = function(action) {
    var obj     = $("#box-departments-form");

    if( action === 'open') {
        obj.addClass('active create').removeClass('not-active')
    }

    if( action === 'close') {
        obj.addClass('not-active').removeClass('active create')
    }

    $('html, body').stop().animate({ scrollTop: 0}, 600);
}
