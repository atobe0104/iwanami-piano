var winheight = window.innerHeight;
var winwidth = window.innerWidth;

jQuery(document).ready(function($) {
	var boxMarginLeft = parseInt($(".container").css('margin-left'), 10);

	console.log(boxMarginLeft);
    $("#top-text,.overlay,.g-menu").css( "height" , winheight + 'px');
    $("#gmap").css({
    	"width":winwidth + 'px',
    	"left": '-'+ boxMarginLeft+ 'px'
    });

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