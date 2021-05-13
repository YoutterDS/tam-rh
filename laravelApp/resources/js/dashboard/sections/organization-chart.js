$(document).ready(function(){
    $('.list-organizationchart--item')
    .click(function(e){
        e.preventDefault();

        $this           = $(this);
        var target      = $this.attr('data-id');
        $(target).find('.subitem').toggleClass('active');
        $this.find('.list-organizationchart--item_arrow').toggleClass('down');
    })
});
