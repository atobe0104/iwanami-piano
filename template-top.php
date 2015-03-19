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

<div class="pages-wrapper row">
	<div class="col-md-12">
		<div class="access-area">
			<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
			<script>

			    var mapCanvas;
			    function intialize() {
			      //Create a map
			      var mapOptions = { 
		                scrollwheel: false
		          };
			      
			      mapCanvas = new google.maps.Map(document.getElementById("gmap"),mapOptions);
			      mapCanvas.setCenter(new google.maps.LatLng(35.729953, 139.550319));
			      mapCanvas.setZoom(16);
			      mapCanvas.setMapTypeId(google.maps.MapTypeId.ROADMAP);

			      var marker1 = new google.maps.Marker();
			      marker1.setPosition(new google.maps.LatLng(35.729953, 139.550319));
			      marker1.setMap(mapCanvas);
				}
			    google.maps.event.addDomListener(window, "load", intialize);

			</script>
			<h2 class="title">ACCESS</h2>
			<div id="gmap"></div>
		</div>
	</div>

</div>

<?php get_footer(); ?>
