$(function() {
  console.log('ready');
  $('a[href^=#]').on('click', function(e) {
    console.log('click');
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top
    }, 500, 'linear');
  });
});
