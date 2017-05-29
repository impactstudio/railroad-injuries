(function($) {

  function Counter(className) {
    // We utilize the self var so other methods within the class have access to it. Similar to a class variable in ruby.
    var self = this;
    this.className = className;
    this.total = parseInt($(this.className).data('count'));
    this.setInitialValue = function() { $(this.className).html("$" + 0); };
    this.countUp = function() {
      $(this.className).prop('Count', 0).animate(
        {
          Count: this.total
        },
        {
          duration: 2500,
          easing: 'swing',
          step: function () {
          $(this).text('$' + parseInt(this.Count).toLocaleString());
        },
          complete: function(){
            $(this).html("$" + this.Count.toLocaleString());
          }
      });
    };
    this.execute = function() {
      self.setInitialValue();
      self.countUp();
    }
  }

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
    var counter = new Counter('.counter');

    var docWindow = $(window)
    var counterDistance = $('.settlements').offset().top;
    var alreadyScrolled = false;

    docWindow.scroll(function() {
        if (!alreadyScrolled) {
          if ( docWindow.scrollTop() >= counterDistance - 250 ) {
             counter.execute();
             alreadyScrolled = true;
          }
        }
    });

    if (window.outerWidth < 991) {
      mobileMenu();
    }

    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      responsive:{
        0:{
            items: 1
        }
    }
})

  });

})( jQuery );
