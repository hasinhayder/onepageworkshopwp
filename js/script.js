/**
 * Created by storyteller on 12/19/14.
 */
;(function($){
    $(document).ready(function(){
        $(".banner").backstretch([
            site.theme_path+"/img/b1.jpg",
            site.theme_path+"/img/b16.jpg",
            site.theme_path+"/img/b20.jpg"
        ], {duration: 3000, fade: 750});

        if(!$("div#navigation>div>ul").hasClass("list-inline")){
            $("div#navigation>div>ul").addClass("pull-right list-inline");
        }
    });
})(jQuery);