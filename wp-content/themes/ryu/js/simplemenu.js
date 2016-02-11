jQuery(document).ready(function () {
    jQuery(".icon").click(function () {
        jQuery(".mobilenav").fadeToggle(500);
        jQuery(".top-menu").toggleClass("top-animate");
        jQuery(".mid-menu").toggleClass("mid-animate");
        jQuery(".bottom-menu").toggleClass("bottom-animate");
		jQuery(".icon").toggleClass("icon-animate");
		jQuery(".hamburger").toggleClass("hamburger-animate");
    });
    jQuery(".icon-search").click(function () {
        jQuery(".mobilenav").fadeToggle(500);
        jQuery(".top-menu").toggleClass("top-animate");
        jQuery(".mid-menu").toggleClass("mid-animate");
        jQuery(".bottom-menu").toggleClass("bottom-animate");
        jQuery(".icon").toggleClass("icon-animate");
        jQuery(".hamburger").toggleClass("hamburger-animate");
    });
});
