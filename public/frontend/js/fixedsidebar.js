/*$(function () {
  var sideBar = $('#sideBar');
  var top = sideBar.offset().top - parseFloat(sideBar.css('margin-top'));
  $(window).scroll(function (event) {
    var y = $(this).scrollTop();
    if (y >= top) {
      sideBar.addClass('fixed');
    } else {
      sideBar.removeClass('fixed');
    }
  });
});*/
  $(function() {
    var top = $('#sideBar').offset().top - parseFloat($('#sideBar').css('marginTop').replace(/auto/, 0));
    var footTop = $('#footer').offset().top - parseFloat($('#footer').css('marginTop').replace(/auto/, 0));

    var maxY = footTop + $('#sideBar').outerHeight();

    $(window).scroll(function(evt) {
        var y = $(this).scrollTop();
        if (y > top) {
          if (y < maxY) {
            $('#sideBar').addClass('fixed').removeAttr('style');
          } else {
            $('#sideBar').removeClass('fixed').css({
              position: 'absolute',
              top: (maxY - top) + 'px'
            });
          }
        } else {
          $('#sideBar').removeClass('fixed');
        }
    });
});