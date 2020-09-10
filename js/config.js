(function () {
    function logEvent(eventName, element) {
        console.log(Date.now(), eventName, element.getAttribute('data-src'), element.getAttribute('src'));
    }

    var callback_enter = function (element) {
        logEvent("ENTERED", element);
    };
    var callback_load = function (element) {
        logEvent("LOADED", element);
    };
    var callback_set = function (element) {
        logEvent("SET", element);
    };
    var callback_error = function (element) {
        logEvent("ERROR", element);
        element.src = "https://placehold.it/220x280?text=Placeholder";
    };

    var llWebp = new LazyLoad({
        elements_selector: ".lazy.has-webp",
        to_webp: true,
        callback_enter: callback_enter,
        callback_load: callback_load,
        callback_set: callback_set,
        callback_error: callback_error
    });
    var llStandard = new LazyLoad({
        elements_selector: ".lazy:not(.has-webp)",
        callback_enter: callback_enter,
        callback_load: callback_load,
        callback_set: callback_set,
        callback_error: callback_error
    });
}());
//ページトップ
$('a[href^="#page_top"]').on( 'click', function() {
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
});
//スマホメニューオープン
$(function(){
    $('.button_sp_manu_box').on( 'click', function() {        
        if($('.button_sp_manu_box').hasClass('off')){
            $('.button_sp_manu_box').removeClass('off').addClass('on');
            $('.sp_main_header_nav').fadeIn(500);
        }else {
            $('.button_sp_manu_box').removeClass('on').addClass('off');
            $('.sp_main_header_nav').fadeOut(500);
        }        
    });
    $('.button_lp_bunner_close_box').on( 'click', function() {
        $('.lp_banner').fadeOut(500);
    });
    $('.button_lp_bunner_close_box_02').on( 'click', function() {
        $('.lp_banner_02').fadeOut(500);
    });
});
//ヘッダー追従
$(function(){
    $(window).scroll(function() {
        if( $(this).scrollTop() >= $("#scroll_off").height()) {
            $("#scroll_on").fadeIn(500);
        }else {
            $("#scroll_on").fadeOut(500);
        }
    });
});