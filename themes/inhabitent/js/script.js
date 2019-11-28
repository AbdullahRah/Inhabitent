(function($) {
  // your code here
  $('.search-submit').on('click', function(event) {
    event.preventDefault();
    $('.search-field').toggle();
    $('.search-field').focus();
  });

  $('.search-field').on('blur', function() {
    $('.search-field').toggle();
  });
})(jQuery);
