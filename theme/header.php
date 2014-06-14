<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php if ( is_category() ) {
	echo ''; single_cat_title(); echo ' | '; bloginfo( 'name' );
} elseif ( is_tag() ) {
	echo ''; single_tag_title(); echo ' | '; bloginfo( 'name' );
} elseif ( is_archive() ) {
	wp_title(''); echo ' Archive | '; bloginfo( 'name' );
} elseif ( is_search() ) {
	echo 'Søk etter &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
} elseif ( is_home() || is_front_page() ) {
	bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
}  elseif ( is_404() ) {
	echo 'Error 404 Not Found | '; bloginfo( 'name' );
} elseif ( is_single() ) {
	wp_title('');
} else {
	echo wp_title( ' | ', false, right ); bloginfo( 'name' );
} ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="description" content="Anyu klinikken, senter for helse og livsmestring i lørenskog">
		<meta name="keywords" content="lørenskog, akupunktur, tuinamassasje, muskelmassasje, qigong, yoga, tankefeltterapi, rosenterapi, anyu klinikken">
		<meta name="author" content="Ildiko Balog">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">



		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=256092084433955";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

    <header class="main-header inverse<?php if ( !is_front_page() ) echo 'inverse'; ?>" role="banner">
		<nav class="main-navigation inverse<?php if ( !is_front_page() ) echo 'inverse'; ?>" role="navigation">
			<a href="/" class="anyu-logo <?php if ( !is_front_page() ) echo 'inverse'; ?>"></a>
			<button class="mobile-menu-toggle <?php if ( !is_front_page() ) echo 'inverse'; ?>"></button>
			<?php bones_main_nav(); ?>
			<?php //get_search_form(); ?>
		</nav>
	</header>

		

