var winheight = window.innerHeight;
var winwidth = window.innerWidth;
var menublackpoint = winheight - 30;

jQuery(document).ready(function($) {
    $(window).load(function() {
        var ScrTop = $(document).scrollTop();
        if (ScrTop > menublackpoint){
            $(".menu > .menu-text").css("color","#666666");
        }else if(ScrTop < menublackpoint){
            $(".menu > .menu-text").css("color","#ffffff");
        }
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

        $(".more_lesson a").click(function(){
            $(".more_lesson").stop().fadeOut("100",function(){
                $(".backto-list").stop().fadeIn("100").css("display","inline-block");
                $(".detail-slider").fadeIn("200");
                var sliderheight = $(".sp-slider > .bx-wrapper").height();
                alert(sliderheight);
                $(".sp-slider").css("height",sliderheight+"px");
            });
            $(".lesson-property").stop().animate({"opacity":"0"},300,"swing" ,function(){
                $(this).hide();
                $(".bx-wrapper").stop().animate({"opacity":"1"},300,"swing");
            });
        });
        $(".backto-list").click(function(){
            $(this).stop().fadeOut("100",function(){
                $(".more_lesson").stop().fadeIn("100").css("display","inline-block");
                $(".detail-slider").hide();
                $(".sp-slider").css("height","0");
            });
            $(".bx-wrapper").stop().animate({"opacity":"0"},300,"swing" ,function(){
                $(".lesson-property").stop().css("display","block").animate({"opacity":"1"},300,"swing");
            });
        });

        // 　コンタクトフォームの状態による、cssの変化
        $("input[name='name']").blur(function(){
          if($(this).val() == ""){
        //入力されていない
            var parent_div = $(this).parent("div").attr(id);
            $(parent_div + " > .line").addClass("null-input");
            $(this).removeClass("ok-input");
          }else{
        //入力されている
            $(this).addClass("ok-input");
            $(parent_div > ".line").removeClass("null-input");
            $(parent_div > ".line").css("width","100%");
          }
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