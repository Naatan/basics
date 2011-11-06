<!doctype html>
<html class="no-js <?php echo Basics::get_browser(); ?>" <?php echo Basics::language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	
	<!-- ----------------------------------------------------------------------------- SEO INFO -->
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<meta name="title" content="<?php wp_title('|', true, 'right'); bloginfo('name'); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	
	<!-- ----------------------------------------------------------------------------- MOBILE DEVICES -->
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<!-- ----------------------------------------------------------------------------- STYLESHEETS -->
	<link	rel="stylesheet/less" 	href="<?php echo site_url(); ?>/css/style.less" 			type="text/css">

	<!-- ----------------------------------------------------------------------------- RSS FEED -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!-- ----------------------------------------------------------------------------- SCRIPT LIBRARIES -->
	<script src="<?php echo site_url(); ?>/js/libs/modernizr-2.0.6.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('/js/libs/jquery-1.6.4.min.js"><\/script>')</script>
	<script src="<?php echo site_url(); ?>/js/libs/less-1.1.4.min.js"></script>

	<!-- ----------------------------------------------------------------------------- WP SCRIPTS -->
	<?php wp_head(); ?>

	<!-- ----------------------------------------------------------------------------- SCRIPTS -->
	<script defer src="<?php echo site_url(); ?>/js/plugins.js"></script>
	<script defer src="<?php echo site_url(); ?>/js/script.js"></script>
</head>

<body <?php body_class(Basics::body_class()); ?>>

	<div id="wrap" class="container" role="document">
		<header id="banner" class="span-24" role="banner">
			<div class="container">
	
				<figure clas="logo"></figure>
				
				<nav id="nav-main" role="navigation">
					<?php wp_nav_menu(array('theme_location' => 'primary_navigation')); ?>
				</nav>
				
				<nav id="nav-utility">
					<?php wp_nav_menu(array('theme_location' => 'utility_navigation')); ?>
				</nav>

			</div>
		</header>
