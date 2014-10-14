<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<!-- <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png"> -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<link href="<?php echo get_template_directory_uri(); ?>/library/images/nlicon-60.png" rel="apple-touch-icon" />
		<link href="<?php echo get_template_directory_uri(); ?>/library/images/nlicon-76.png" rel="apple-touch-icon" sizes="76x76" />
		<link href="<?php echo get_template_directory_uri(); ?>/library/images/nlicon-120.png" rel="apple-touch-icon" sizes="120x120" />
		<link href="<?php echo get_template_directory_uri(); ?>/library/images/nlicon-152.png" rel="apple-touch-icon" sizes="152x152" />

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

	<body>


	<nav role="navigation">
		<ul>
			<li id="NL"><a href="#aboutme"><i class="fa fa-long-arrow-up"></i> <span>Nick Long</span></a></li>
			<li id="navList"><a href="#"><i class="fa fa-bars"></i> Examples of work</a>
				<?php wp_nav_menu(array(
				'menu_id' => 'navList',
				'container' => false,                           // remove nav container
				'container_class' => 'menu cf',                 // class of container (should you choose to use it)
				'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
				'menu_class' => 'nav top-nav cf',               // adding custom nav class
				'theme_location' => 'main-nav',                 // where it's located in the theme
				'before' => '',                                 // before the menu
				'after' => '',                                  // after the menu
				'link_before' => '',                            // before each link
				'link_after' => '',                             // after each link
				'depth' => 0,                                   // limit the depth of the nav
				'fallback_cb' => ''                             // fallback function (if there is one)
				)); ?>
			</li>
			<li id="contact"><a href="mailto:nick@nicklong.id.au" target"_blank"><i class="fa fa-envelope"></i> <span>Contact me</span></a></li>
		</ul>

	</nav>

	<header>
		<div class="screen" id="aboutme">
			<div class="content">
				<h1>Nick Long</h1>
				<p>I'm a  front-end developer with a passion for user interaction and an eye for visual design.</p>
				<p>I build responsive user-friendly interfaces for websites and applications.</p>
				<ul class="contactList">
					<li><a href="mailto:nick@nicklong.id.au" target"_blank"><i class="fa fa-envelope"></i> Contact me</a></li>
					<li><a href="http://www.linkedin.com/pub/nick-long/55/12b/417"><i class="fa fa-linkedin-square"></i> LinkedIn</a></li>
					<li><a href="https://github.com/nicklosh"><i class="fa fa-github-square"></i> GitHub</a></li>
				</ul>
			</div>
			<div id="examples">
				<!-- add link to php first page -->
				<h2><a href="#test"><i class="fa fa-angle-down"></i> Examples of work</a></h2>
			</div>
		</div>
	</header>
