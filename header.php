<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('|','true','right'); ?></title>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/includes/js/jquery.easing.1.3.js'></script>
	<!--[if lt IE 9]>
		<script src='<?php echo get_template_directory_uri(); ?>/includes/js/respond.js'></script>
		<script src='<?php echo get_template_directory_uri(); ?>/includes/js/html5shiv.js'></script>
	<![endif]--><!-- IE8以下のhtml5タグ・レスポンシブ対応 -->
	<!--[if (gte IE 9)|!(IE)]><!-->
</head>

<body <?php body_class(); ?>>
	<div id="loading">
		<img src="<?php echo get_template_directory_uri(); ?>/images/loading.gif">
		<p>このサイトは音が出ます</p>
	</div>
	<div id="wrapper">
	<header id="masthead" class="site-header" role="banner">
		<div class="menu">
			<div class="menu-btn"></div>
			<div class="menu-text">MENU</div>
		</div>
		<audio autoplay controls loop>
		   <source src="<?php echo get_template_directory_uri(); ?>/audio/music.mp3" type="audio/mp3">
		</audio> 
	</header><!-- #masthead -->	

	<?php wp_nav_menu(
		array(
			'theme_location' => 'primary',
			'container_class' => 'g-menu',
			'menu_class' => 'g-menu-nav',
			'fallback_cb' => '',
			'menu_id' => 'main-menu',
		)
	); ?>

<div class="overlay"></div>

<?php if(is_front_page()): ?>
	<div id="top-text">
		<h2 class="top-title">About</h2>
		<p>
			岩波ピアノ教室では、幅広い年層に楽しくピアノを習える場所です。<br class="hidden-xs">
			ピアノを弾きたいと思った方、お子様の教育の一部にピアノを取り入れたい方<br class="hidden-xs">
			岩波ピアノ教室ではあなたのペースに合わせてレッスンを行います。<br class="hidden-xs">
		</p>
	</div>
<?php endif;?>

<div class="main-content">
