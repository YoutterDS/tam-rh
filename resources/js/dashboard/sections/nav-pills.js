$(document).ready(function(){
    $('.nav-link').on('shown.bs.tab', function (e) {
        if(history.pushState) {
            history.pushState(null, null, e.target.hash);
        } else {
            window.location.hash = e.target.hash;
        }
    })

    if(window.location.hash != "") {
        $('a[href="' + window.location.hash + '"]').click();
    } else {
        var getFirstItemPills = $('.nav-pills .nav-link').first();
        var getFirstIdToShow  = getFirstItemPills.attr("href");
        $('a[href="' + getFirstIdToShow +'"]').click();
    }

});

$(window).on('hashchange',function(){
    $('a[href="' + window.location.hash + '"]').click();
});
