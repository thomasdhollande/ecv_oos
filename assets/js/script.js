$(function () {
    let btn_burger = $(".btn_burger");
    let menu_mobile = $(".menu_mobile");

    $(document).on("click", ".btn_burger", function () {
        if ($(this).attr("aria-expanded") == "true") {
            $(this).attr("aria-expanded", "false");
            menu_mobile.removeAttr("style");
        } else {
            $(this).attr("aria-expanded", "true");
            menu_mobile.css("transform", "translateY(0)");
        }
    });

    $(document).on("click", ".mobile_menu_items li a", function() {
        btn_burger.attr("aria-expanded", "false");
        menu_mobile.removeAttr("style");
    });
});