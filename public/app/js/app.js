$("#header-btnIcon").click(function() {
    if ($(".hapo-headerContent").hasClass("show")) {
        setTimeout(function() {
            $(".navbar-toggler-icon").removeClass("header-hide");
            $(".fa-times").addClass("header-hide");
        }, 100);
    } else {
        setTimeout(function() {
            $(".navbar-toggler-icon").addClass("header-hide");
            $(".fa-times").removeClass("header-hide");
        }, 40);
    }
});
