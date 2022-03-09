$(document).ready(function(){
  $("#headerBtnIcon").click(function() {
    if ($(".header-content").hasClass("show")) {
      setTimeout(function() {
        $(".navbar-toggler-icon").removeClass("hide");
        $(".fa-times").addClass("hide");
      }, 100);
    } else {
      setTimeout(function() {
        $(".navbar-toggler-icon").addClass("hide");
        $(".fa-times").removeClass("hide");
      }, 40);
    }
  });
});
