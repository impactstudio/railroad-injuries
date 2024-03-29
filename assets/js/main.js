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
  var $primaryNav = $('.primary-nav');
  $('.mobile-menu').after($primaryNav);
  $('.hamburger').on('click', function() {
    $('.primary-nav').slideToggle('fast');
    $('.cross').show();
    $('.hamburger').hide();
  });

  $('.cross').on('click', function() {
    $('.primary-nav').slideToggle('fast');
    $('.cross').hide();
    $('.hamburger').show();
  });
}

  // run javascript after other files have loaded
  $(document).ready(function(){
    var counter = new Counter('.counter');

    var docWindow = $(window)
    var alreadyScrolled = false;

    if (window.outerWidth < 991) {
      mobileMenu();
    }

    var counterDistance = $('.settlements').offset().top;

    docWindow.scroll(function() {
        if (!alreadyScrolled) {
          if ( docWindow.scrollTop() >= counterDistance - 250 ) {
             counter.execute();
             alreadyScrolled = true;
          }
        }
    });

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
