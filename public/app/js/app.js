$(document).ready(function(){
  $('#headerBtnIcon').click(function() {
    if ($('.header-content').hasClass('show')) {
      $('.navbar-toggler-icon').removeClass('hide');
      $('.fa-times').addClass('hide');
    } else {
      $('.navbar-toggler-icon').addClass('hide');
      $('.fa-times').removeClass('hide');
    }
  });
});
