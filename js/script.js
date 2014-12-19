/**
 * Created by storyteller on 12/19/14.
 */
;
(function ($) {
    $(document).ready(function () {
        if(banner_gallery.length==0){
            banner_gallery = [
                site.theme_path + "/img/b1.jpg",
                site.theme_path + "/img/b16.jpg",
                site.theme_path + "/img/b20.jpg"
            ];
        }
        $(".banner").backstretch(banner_gallery, {duration: 3000, fade: 750});

        /* ============================================
         Testimonials
         ==============================================*/
        var items = parseInt( $('.clients-say').find('.item').length );
        var loop = 0;
        if(items<=1) loop = 0;
        $('.clients-say').owlCarousel({
            loop: loop,
            /*nav:true,
             navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],*/
            autoHeight: true,
            items: 1,
            smartSpeed: 1000,
            /*autoplay : true,*/
            autoplayTimeout: 6000,
            /*autoplayHoverPause: true*/
            responsive: {
                320: {
                    stagePadding: 20,
                    margin: 20
                },
                640: {
                    stagePadding: 60,
                    margin: 60
                },
                1024: {
                    stagePadding: 100,
                    margin: 100
                }
            }
        });

        if (!$("div#navigation>div>ul").hasClass("list-inline")) {
            $("div#navigation>div>ul").addClass("pull-right list-inline");
        }
    });
})
(jQuery);