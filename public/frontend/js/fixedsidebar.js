$(document).ready(function() {
    // check where the shoppingcart-div is
    var offset = $('#sidebar').offset();

    if (typeof offset != undefined) {
        $(window).scroll(function () {
            var scrollTop = $(window).scrollTop();
            // check the visible top of the browser
            if (offset.top<scrollTop) {
                $('#sidebar').addClass('fixed');
            } else {
                $('#sidebar').removeClass('fixed');
            }
        });
    }

});