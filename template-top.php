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
		<!-- Lesson start -->
		<div class="container">
			<div class="pages-wrapper row">
				<div id="lesson-area" class="col-md-12 col-sm-12 col-xs-12">
					<h2 class="title">LESSON</h2>
					<div class="lesson-wrap">
						<div class="lesson-property">
							<div class="lesson step1 target">
								<p class="lesson-image">
									<img src="<?php the_field('lesson1-image',$post->ID); ?>">
								</p>
								<div class="lesson-text">
									<p>
										<?php the_field('lesson1-text',$post->ID); ?>
									</p>
								</div>
							</div>
							<div class="lesson step2 target">
								<div class="lesson-image">
									<img src="<?php the_field('lesson2-image',$post->ID); ?>">
								</div>
								<div class="lesson-text">
									<p>
										<?php the_field('lesson2-text',$post->ID); ?>
									</p>
								</div>
							</div>
							<div class="lesson step3 target">
								<p class="lesson-image">
									<img src="<?php the_field('lesson3-image',$post->ID); ?>">
								</p>
								<div class="lesson-text">
									<?php the_field('lesson3-text',$post->ID); ?>
								</div>
							</div>
						</div>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(window).load(function() {
			$('#detail-wrap').show();
				var obj = $('#detail-slider').bxSlider({ // 自動再生に必須
				auto: false,
				responsive: true,
				speed: 1000,
				displaySlideQty: 2,
				pager: false,
				moveSlides: 1,
				pause: 4000, 
				prevText: '<　',
				nextText: '>'
			});
			$('#detail-slider-sp').bxSlider({ // 自動再生に必須
				auto: false,
				responsive: true,
				speed: 1000,
				displaySlideQty: 1,
				pager: false,
				moveSlides: 1,
				pause: 4000, 
				prevText: '<　',
				nextText: '>'
			});
		});
	});
</script>
<div class="pc-slider hidden-sm hidden-xs">
	<div id="detail-slider">
		<div class="slider-element">
			<div class="img-wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/images/background-photo.jpg">
			</div>
			<div class="lesson-slider-text">
				講師情報<br>
				岩波　涼子 -Iwanami ryoko-<br>
				昭和５５年 国立大学　教育音楽学科卒<br>
				大学在学中より個人ピアノ教室開講
				昨年まで毎年ピアノ発表会を定期開催（今年は未定）

			</div>
		</div>
		<div class="slider-element">
			<div class="img-wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/images/background-photo02.jpg">
			</div>
			<div class="lesson-slider-text">
				<h4>ピアノ奏法・楽典・聴音・リトミック</h4>
			</div>
		</div>
		<div class="slider-element">
			<div class="img-wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/images/background-photo03.jpg">
			</div>
			<div class="lesson-slider-text">
				受験指導・音楽の定期試験対策・
				合唱祭伴奏曲指導</div>
		</div>
		<div class="slider-element">
			<div class="img-wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/images/background-photo03.jpg">
			</div>
			<div class="lesson-slider-text">
				ソルフェージュ・声楽基本・
			</div>
		</div>
		<div class="slider-element">
			<div class="img-wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/images/background-photo03.jpg">
			</div>
			<div class="lesson-slider-text">
				
			</div>
		</div>
	</div>
				
</div>
<div class="sp-slider">
	<div id="detail-slider-sp" class="">
		<div class="slider-element">
			<img src="<?php echo get_template_directory_uri(); ?>/images/background-photo.jpg">
			<div class="lesson-slider-text">レッスン内容は以下の通り</div>
		</div>
		<div class="slider-element">
			<img src="<?php echo get_template_directory_uri(); ?>/images/background-photo02.jpg">
			<div class="lesson-slider-text">
				レッスン内容は以下の通り
			</div>
		</div>
		<div class="slider-element">
			<img src="<?php echo get_template_directory_uri(); ?>/images/background-photo03.jpg">
			<div class="lesson-slider-text">レッスン内容は以下の通り</div>
		</div>
	</div>
</div>

					</div>
<div class="clearfix control-detail">
	<p>体験レッスンから始められます。</p>							
	<div class="more_lesson"><a href="#lesson-area"><span id="m">M</span><span id="o">o</span><span id="r">r</span><span id="e">e</span> &gt;</a></div>
	<div class="backto-list">&lt; <span id="b">B</span><span id="a">a</span><span id="c">c</span><span id="k">k</span></div>
</div>
				</div>
			</div>
		</div>
		<!-- Lesson end -->
		
		<div id="access-area">

		<!-- access start -->
			<h2 id="access-title" class="title">ACCESS</h2>
			<div id="gmap"></div>
			<div class="container">
				<div class="pages-wrapper row">

					<div id="access-addless" class="col-md-10 col-sm-12 col-xs-12">
						<p>住所：西東京市保谷町３-２５-２１</p>
						<p>西武新宿線：「西武柳沢駅」より徒歩３分</p>
						<p>関東バス：「西武柳沢駅」より徒歩３分</p>
					</div>
		<!-- access end -->

					<div class="contact-wrap col-md-8 col-sm-8 col-xs-12">
						<h2 id="contact-title" class="title">お問い合わせ</h2>
						<?php echo do_shortcode("[contact-form-7 id='5' title='contact form']") ?>
					</div>
				</div>
			</div>
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

var directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);
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
      )
    });
    // var marker1 = new google.maps.Marker();
    goalmarker.setPosition(new google.maps.LatLng(35.729115, 139.550529));      //↑で定義したマーカーを指定のポイントに置く
    goalmarker.setMap(map);     //描写するマップを指定
    directionsDisplay.setMap(map);
    calcRoute();
}
 
function calcRoute() 
{
    var request = 
    {
        origin: start, //出発地点を設定
        destination: goal, //終点を設定
        waypoints:[
		{
		location: new google.maps.LatLng(35.728554, 139.549970)
		}
		],
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
</script> 
<!-- googleマップ　END -->
<?php get_footer(); ?>
