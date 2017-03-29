(function($) {
  function mobileMenu() {
    // hide cross icon, hide menu and on click transition them in
    $('.cross').hide();
    $('.blue-box').hide();
    $('.primary-nav').hide();
    $('.mobile-menu').show();
    $('.hamburger').show();
    $('.hamburger').on('click', function(){
      $('.primary-nav').slideToggle('fast', function() {
        $('.hamburger').hide();
        $('.cross').show();
        $(this).css({
          'height' : '7px'
        });
        $('.mobile-menu').css({
          'height': '60px'
        });
      });
    });

    $('.cross').on('click', function() {
      $('.primary-nav').slideToggle('fast', function() {
        $('.cross').hide();
        $('.hamburger').show();
      });
    });
  }

  // run javascript after other files have loaded
  $(document).ready(function(){
    if (window.outerWidth < 991) {
      mobileMenu();
    }
  });

})( jQuery );
