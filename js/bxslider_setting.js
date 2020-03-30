call("//cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js", function(){
    $(document).ready(function(){
        $('.index_main_slider_contents_pc_ul').bxSlider({ //bxsliderを使用しているulクラスを指定
            pager: false,
            minSlides: 1,
            maxSlides: 1,
            moveSlides: 1,
            slideWidth: 1920,
            controls:true,
            auto: true,
            pager:false,
            controls:false,
            slideMargin: 0
        });
        $('.index_main_slider_contents_sp_ul').bxSlider({ //bxsliderを使用しているulクラスを指定
            pager: false,
            controls:false,
            minSlides: 1,
            maxSlides: 1,
            moveSlides: 1,
            slideWidth: 768,
            controls:true,
            auto: true,
            pager:false,
            slideMargin: 20
        });
        
        $('.modelroom_main_slider').bxSlider({
            mode: 'fade',
            auto: true,
            minSlides: 1,
            maxSlides: 1,
            moveSlides: 1,
            slideWidth: 1920,
            pagerCustom: '.modelroom_main_thumbs_contents'
        });
    });
});


$(function(){
    $(document).on('click', 'a[href*="#"]', function(){
        var speed = 1000;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - $("#scroll_off").outerHeight(true);
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });
});