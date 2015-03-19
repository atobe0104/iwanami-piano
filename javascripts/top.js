var winheight = window.innerHeight;

jQuery(document).ready(function($) {
    $("#top-text,.overlay,.g-menu").css( "height" , winheight + 'px');
    $('#main-menu > li:last-child').after('<li id="back-contents">閉じる</li>');

    $(".menu > .menu-btn").click(function(){
    	menuopen();
    });
    $(".overlay,#back-contents").click(function(){
    	menuclose();
    });
});

function menuopen(){
    $(".g-menu").animate({"left": "0px"}, 300 ,'swing',function(){
	    $(".overlay").css("z-index","9");
	    $(".overlay").css("opacity","0.3");
    });
}

function menuclose(){
    $(".g-menu").animate({"left": "-200px"}, 300 ,'swing',function(){
	    $(".overlay").css("z-index","-1");
	    $(".overlay").css("opacity","0");
    });
}