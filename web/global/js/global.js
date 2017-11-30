
function calculateContent() {
    if ($(window).width() < 768) {
        $("#id-mobile-menu").show();
        $("#id-menu").hide();
        $("#id-menu-top-bar").hide();
        $(".top-menu-height").css("height", $("#id-mm-top-bar").height() + 1);
        $("#id-content").css({
            "min-height": 0,
            "height": "auto"
        });

        calculateContentHeight();
    } else {
        $("#id-menu").show();
        $("#id-menu-top-bar").show();
        $("#id-mobile-menu").hide();
        $(".top-menu-height").css("height", $("#id-menu-top-bar").height());
        calculateContentHeight();
        if ($("#id-content").height() > $("#id-menu").height()) {
            $("#id-menu").css("min-height", $("#id-content").height() + 10);
        } else {
            $("#id-content").css("min-height", $("#id-menu").height());
        }
    }
}
function possibleResize() {

}

function   calculateContentHeight() {
    var topBarH = $("#id-mm-top-bar").height();
    var contentH = $("#id_row_content").height();
    var footerTopPosition = $("#id-footer").position().top;
    var minH = footerTopPosition - topBarH + 2;
    if ((topBarH + contentH + 2) < footerTopPosition) {
        $("#id-content").css({
            "min-height": minH,
            "height": "auto"
        });
    }
    if ((topBarH + contentH + 2) > ($(window).height() - $("#id-footer").height())) {
        $("#id-footer").css("position", "relative");
    } else {
        $("#id-footer").css("position", "fixed");
    }

}
$(window).resize(function () {

    if ($(window).width() < 751) {
        $(".navbar").css("height", "auto !important");
        $(".mm-content-arrow").css("left", $(window).width() - 33);
        $(".top-menu-height").css("height", $("#id-mm-top-bar").height());
        $("#id-mobile-menu").show();
        $("#id-menu").hide();
        $("#id-menu-top-bar").hide();
        $("#id-menu").css({
            "min-height": 0,
            "height": "auto"
        });

        calculateContentHeight()
    } else {
        $(".top-menu-height").css("height", $("#id-menu-top-bar").height());
        $("#id-mm-content").hide();
        calculateContent();
        calculateContentHeight()
    }
});

$(document).scroll(function () {

    if ($(this).scrollTop() > 57) {
        $('#id-navbar-header').slideUp();
        $(".navbar").css("height", "auto !important");
    } else {
        $('#id-navbar-header').slideDown();
        $(".navbar").css("height", "auto !important");
    }





});

/*menu
 * id-mobile-menu
 * id-mobile-menu-image
 */
function showMobileMenu() {
    $(document).ready(function () {
        $("#id-mm-content").toggle('fast', function () {
            if ($(this).is(':visible')) {
                $(this).css('display', 'box');

                $(".mm-content-arrow").css("left", $(window).width() - 33);
            }

        });
    });


}

function eventListBox(divList) {



}