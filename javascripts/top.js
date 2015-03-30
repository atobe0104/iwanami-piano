var winheight = window.innerHeight;
var winwidth = window.innerWidth;
var menublackpoint = winheight - 30;

jQuery(document).ready(function($) {
    $(window).load(function() {
        $(window).scroll(function () {
            var ScrTop = $(document).scrollTop();
            if (ScrTop > menublackpoint){
                $(".menu > .menu-text").css("color","#666666");
            }else if(ScrTop < menublackpoint){
                $(".menu > .menu-text").css("color","#ffffff");
            }
        });
        $("#top-text,.overlay,.g-menu").css( "height" , winheight + 'px');
        $("#loading").delay('1000').animate({"opacity":"0"},300 ,"swing");
        $("header,#wrapper").delay('2000').animate({"opacity":"1"},300,"swing",function(){
            initialize();   //googlemapを表示
        });
        $('#main-menu > li:last-child').after('<li id="back-contents">閉じる</li>');
        // //要素がスクロールで表示されたらアニメーション
        $('.step1,.step2,.step3').scrollInTurn({
            fadeInSpeed:1000,
            delaySpeed:600,
            easing : 'linear',
            fadeOutEvent : false
        });
        linkscroll();
        $(".menu-btn").click(function(){
            menuopen();
        });
        $(".overlay,#back-contents").click(function(){
            menuclose();
        });
    });
});
function linkscroll(){
    $('a[href^=#]').click(function() {
        // スクロールの速度
        var speed = 400; // ミリ秒
        // アンカーの値取得
        var href= $(this).attr("href");
        // 移動先を取得
        var target = $(href == "#" || href == "" ? 'html' : href);
        // 移動先を数値で取得
        var position = target.offset().top;
        // スムーススクロール
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
    });
}

function menuopen(){
    $(".g-menu").animate({"left": "0px"}, 300 ,'swing',function(){
	    $(".overlay").css({
            "z-index":"11",
            "opacity":"0.3",
        });
        $("header").css("z-index","-1");
        $("#wrapper").css("-webkit-filter","blur(3px)");
    });
}

function menuclose(){
    $(".g-menu").animate({"left": "-200px"}, 300 ,'swing',function(){
	    $(".overlay").css("z-index","-1");
	    $(".overlay").css("opacity","0");
        $("header").css("z-index","5");
        $("#wrapper").css("-webkit-filter","blur(0px)");
    });
}