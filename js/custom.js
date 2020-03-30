/* ================================================================ */
/* グローバルナビゲーション オープン */
$(function() {
    $('.gNavSp__openBtn').on('click', function(){
      $('.gNavSpMenu').addClass('gNavSpMenu_open');
    });
    $('.gNavSpMenu__closeBtn').on('click', function(){
      $('.gNavSpMenu').removeClass('gNavSpMenu_open');
    });
});

/* ================================================================ */
/* totop */
$(function(){
	var timer = null;
	$(window).on('resize load scroll',function() {
		clearTimeout( timer );
		timer = setTimeout(function() {
			var scrolltop = $(window).scrollTop(),
				docHeight = $(document).innerHeight(),
				windowHeight = $(window).innerHeight(),
				differ = docHeight - windowHeight,
				footerHeight = $('.footer').innerHeight(),
				distance = differ - scrolltop;
				if( scrolltop < 100){
					$(".totop").removeClass('on');
				}
				if( scrolltop > 100 ){
					$(".totop").addClass('on');
				}
				 if( footerHeight > distance ){
				 	$(".totop").addClass('state01');
				 }else if( footerHeight < distance ){
				  $(".totop").removeClass('state01');
			   }
		}, 10 );
	});
});

/* ================================================================ */
/* 設備仕様 タブ切替 */
$(document).ready(function() {
	 //初期表示
	 $(".tab_content").hide();//全ての.tab_contentを非表示
	 $("ul.tabs li:first").addClass("active").show();//tabs内最初のliに.activeを追加
	 $(".tab_content:first").show();//最初の.tab_contentを表示
	 //タブクリック時
	 $("ul.tabs li").click(function() {
			$("ul.tabs li").removeClass("active");//.activeを外す
			$(this).addClass("active");//クリックタブに.activeを追加
			$(".tab_content").hide();//全ての.tab_contentを非表示
			var activeTab = $(this).find("a").attr("href");//アクティブタブコンテンツ
			$(activeTab).fadeIn();//アクティブタブコンテンツをフェードイン
			return false;
	 });
});

/* ================================================================ */
$(function(){
    'use strict';
    // PCの際はTELクリックを無効化
    var ua = navigator.userAgent.toLowerCase();
    var isMobile = /iphone/.test(ua)||/android(.+)?mobile/.test(ua);
    if (!isMobile) {
			$('a[href^="tel:"]').on('click', function(e) {
					e.preventDefault();
			});
    }
});

/* ================================================================ */
/* 現地案内図 */
function map(){
sub = window.open("map/","","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=850,height=700");
}
function map2(){
sub = window.open("../map/","","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=850,height=700");
}
