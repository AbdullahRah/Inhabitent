(function($) {
  // your code here
  $('#icon-search').on('click', function(event) {
    console.log('CLICK');

    $('#search-field')
      .animate({ width: 200 })
      .focus();
  });

  $('#search-field').on('blur', function() {
    console.log('BLUR');
    $('#search-field').animate({ width: 0 });
    // $('.search-field').toggle();
  });
})(jQuery);
