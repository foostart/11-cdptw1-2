$(document).ready(function () {
    if ($(this).width() >= 767) {
        $('.dropdown').hover(function () {
            $(this).children('ul').stop(true, true).slideDown(400);
            $(this).toggleClass('open');
            $('span .caret', this).toggleClass("caret caret-up");
        }, function () {
            $(this).children('ul').stop(true, true).slideUp(400);
            $(this).toggleClass('open');
            $('span .caret', this).toggleClass("caret caret-up");
        });
    }
    $(window).resize(function () {
        if ($(this).width() >= 767) {
            $('.dropdown').hover(function () {
                $(this).children('ul').stop(true, true).slideDown(400);
                $(this).toggleClass('open');
                $('span .caret', this).toggleClass("caret caret-up");
            }, function () {
                $(this).children('ul').stop(true, true).slideUp(400);
                $(this).toggleClass('open');
                $('span .caret', this).toggleClass("caret caret-up");
            });
        } else {
            $(window).bind('resize', function ()
            {
                this.location.reload(true); /* false to get page from cache */
                /* true to fetch page from server */
            });
        }
    });
});
