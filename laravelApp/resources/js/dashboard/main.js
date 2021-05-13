$(document).ready(function(){

    $('.selectpicker').selectpicker();

    // $('[data-toggle="tooltip"]').tooltip();

    $('#expandSidebarMobile, #collapseSidebarMobile').click(function(e){
        e.preventDefault();
        e.stopImmediatePropagation();

        $(".sidebar-mobile").toggleClass("collapsed").toggleClass("expanded")
    })

    $('.custom-file-input').change(function(e) {
        var objFile = $(this);
        var objFileId = objFile.attr("id");
        var fileSelected = $(objFile)[0].files[0].name;

        var target = $('.custom-file-label[for="' + objFileId + '"]')
            target.text(fileSelected)
    })

});

$(window).on("scroll", function() {
    if ( $(window).scrollTop() > 0 ) {
        $('.topbar-mobile-sticky').addClass('shadow-bottom');
        $('.topbar-mobile').addClass('topbar-mobile-small')
    } else {
        $('.topbar-mobile-sticky').removeClass('shadow-bottom');
        $('.topbar-mobile').removeClass('topbar-mobile-small')
    }
});
