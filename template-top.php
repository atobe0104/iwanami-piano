<?php
/*
Template Name: top_page
*/
?>
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>

<div class="container">
	<div class="pages-wrapper row">
		<div class="col-md-12">
			<h2 class="title">LESSON</h2>
		</div>
	</div>
</div>
		<div class="access-area">
			<h2 class="title">ACCESS</h2>
			<div id="gmap"></div>
		</div>
<!-- googleマップ -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript"> 

var rendererOptions = 
{
	draggable: true,  
	suppressMarkers : true,
	preserveViewport:false
};

var directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);;
var directionsService = new google.maps.DirectionsService();

//始点
var start = new google.maps.LatLng(35.728878, 139.552637);
//終点
var goal = new google.maps.LatLng(35.729115, 139.550629);

function initialize() 
{
	var myOptions = 
	{
		center: new google.maps.LatLng(35.729953, 139.550319),
		zoom: 1,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false
	};
	//マップを描写する
	var map = new google.maps.Map(document.getElementById("gmap"), myOptions);

	var goalmarker = new google.maps.Marker({
      icon: new google.maps.MarkerImage(
      	'<?php echo get_template_directory_uri(); ?>/images/pin-icon1.png',
        new google.maps.Size(70,84) // size
        // new google.maps.Point(0,0),  // origin
        // new google.maps.Point(11,37) // anchor
      )
    });
	// var marker1 = new google.maps.Marker();
	goalmarker.setPosition(new google.maps.LatLng(35.729115, 139.550529));		//↑で定義したマーカーを指定のポイントに置く
	goalmarker.setMap(map);		//描写するマップを指定
	// var startmarker = new google.maps.Marker({
 //      icon: new google.maps.MarkerImage(
 //      	'<?php echo get_template_directory_uri(); ?>/images/pin-icon1.png',
 //        new google.maps.Size(100,180) // size
 //        // new google.maps.Point(0,0),  // origin
 //        // new google.maps.Point(100,180) // anchor
 //      )
 //    });
	// startmarker.setPosition(new google.maps.LatLng(35.728403, 139.552894)); //駅に配置したマーカーに誤差があったので修正
	// startmarker.setMap(map);
	//マップの上に指定した２点のルートを表示する。
	directionsDisplay.setMap(map);
	calcRoute();
}
 
function calcRoute() 
{
	var request = 
	{
		origin: start, //出発地点を設定
		destination: goal, //終点を設定
		travelMode: google.maps.DirectionsTravelMode.WALKING,
		unitSystem: google.maps.DirectionsUnitSystem.METRIC,//単位km表示
	};

	directionsService.route(request, function(response, status) 
	{
		if (status == google.maps.DirectionsStatus.OK) 
		{
		directionsDisplay.setDirections(response);
		}
	});
}
window.onload=initialize;
</script> 
<!-- googleマップ　END -->
<?php get_footer(); ?>
