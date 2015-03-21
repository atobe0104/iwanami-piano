var winheight = window.innerHeight;
var winwidth = window.innerWidth;

jQuery(document).ready(function($) {
    $(window).load(function() {
        $("#top-text,.overlay,.g-menu").css( "height" , winheight + 'px');
        $("#loading").delay('1000').animate({"opacity":"0"},300 ,"swing");
        $("#wrapper").delay('2000').fadeIn("slow",function(){
            initialize();
        });
        $('#main-menu > li:last-child').after('<li id="back-contents">閉じる</li>');
        // //要素がスクロールで表示されたらアニメーション
        $('.lesson-animation').scrollInTurn();

        $(".menu-btn").click(function(){
            menuopen();
        });
        $(".overlay,#back-contents").click(function(){
            menuclose();
        });
    });
});

function menuopen(){
    $(".g-menu").animate({"left": "0px"}, 300 ,'swing',function(){
	    $(".overlay").css("z-index","11");
	    $(".overlay").css("opacity","0.3");
    });
}

function menuclose(){
    $(".g-menu").animate({"left": "-200px"}, 300 ,'swing',function(){
	    $(".overlay").css("z-index","-1");
	    $(".overlay").css("opacity","0");
    });
}