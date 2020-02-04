$("[data-toggle=popover]")
    .popover({
        html: true
    })
    .on("focus", function () {
        $(this).popover("show");
    }).on("focusout", function () {
        var _this = this;
        if (!$(".popover:hover").length) {
            $(this).popover("hide");
        } else {
            $('.popover').mouseleave(function () {
                $(_this).popover("hide");
                $(this).off('mouseleave');
            });
        }
    });
