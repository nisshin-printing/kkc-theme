! function($) {
  $('#btn-menu').click(function() {
    $('body').toggleClass('active-overlay');
    $('#responsive-menu').toggleClass('animated');
    $(this).children().children().toggleClass('menu-icon');
  });
}(jQuery);