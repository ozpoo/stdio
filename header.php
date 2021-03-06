<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title>
			<?php wp_title(''); ?><?php if (wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?>
		</title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/fav.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/icon.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="format-detection" content="telephone=no">
		<meta name="keywords" content="PR, Public, Public Relations, Seattle, Washingtion, WA, SEA, Good, Media, Press">

		<meta property="og:title" content="<?php bloginfo('name'); ?>">
		<meta property="og:description" content="<?php bloginfo('description'); ?>">
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/share.jpg">
		<meta property="og:url" content="<?php echo home_url($wp->request); ?>">
		<meta name="twitter:card" content="summary_large_image">

		<?php wp_head(); ?>

		<script>
			document.createElement( "picture" );
		</script>

	</head>
	<body>

		<section class="intro show">
			<svg version="1.1"
				 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
				 x="0px" y="0px" width="280px" height="107.4px" viewBox="0 0 280 107.4" style="enable-background:new 0 0 280 107.4;"
				 xml:space="preserve">
			<path class="st2" d="M34.5,66.3c-3.6-1.7-10.5-4-12.8-4.8c-4.1-1.5-2.9-5.7,1.2-5.7c2.8,0,4.5,1.2,5.8,3.3l14-7.7c-2.2-4.5-9.5-12-19.2-12
				c-11.1,0-22.1,8.2-22.1,19.8c0,5.8,2.8,11.5,7.9,15.5c5.6,3.7,10.3,4.4,14.2,5.7c7.1,2.5,6.9,5.8,5.6,7.5c-1.6,2-9.9,3.8-14.7-4.1
				L0,91.4c4.9,9.3,12.3,15.3,23.7,15.3c13.4,0,23.4-8.9,23.4-21.2C47.1,77.3,42.3,70.1,34.5,66.3z"/>
			<polygon class="st2" points="80.7,16.7 63.5,16.7 63.5,40.5 52.1,40.5 52.1,56.9 63.5,56.9 63.5,105.8 80.7,105.8 80.7,56.9 92.1,56.9
				92.1,40.5 80.7,40.5 "/>
			<path class="st2" d="M148.6,45.4c0,0-6-6.1-16.7-6.1c-18.7,0-33.2,15.1-33.2,33.7c0,18.7,14.6,33.7,33.2,33.7c10.7,0,16.7-6.1,16.7-6.1v5.2h17.2
				V0h-17.2V45.4z M132.2,89.6c-9.1,0-16.3-7.3-16.3-16.5c0-9.3,7.1-16.5,16.3-16.5c9.1,0,16.4,7.3,16.4,16.5
				C148.6,82.3,141.3,89.6,132.2,89.6z"/>
			<rect class="st2" x="181.5" y="40.4" width="17.2" height="65.5"/>
			<path class="st2" d="M190.1,6C184,6,179,11,179,17.1c0,6.1,5,11.1,11.1,11.1c6.1,0,11.1-5,11.1-11.1C201.2,11,196.2,6,190.1,6z"/>
			<path class="st2" d="M222.2,98.1c5.8,4.8,13.3,7.8,21.5,7.8c18.5,0,33.6-15.1,33.6-33.7c0-8.2-2.9-15.6-7.7-21.4L280,40.3l-3.6-3.6l-10.4,10.4
				c-6-5.3-13.8-8.6-22.4-8.6c-18.7,0-33.7,15-33.7,33.6c0,8.6,3.3,16.5,8.6,22.5l-9.2,9.2l3.6,3.6L222.2,98.1z M227.1,72.3
				c0-9.1,7.4-16.5,16.5-16.5c3.8,0,7.3,1.4,10.1,3.6l-23.1,23.1C228.5,79.6,227.1,76.1,227.1,72.3z M234.4,85.9L257.3,63
				c1.8,2.6,2.8,5.8,2.8,9.3c0,9.1-7.4,16.5-16.4,16.5C240.2,88.8,237,87.7,234.4,85.9z"/>
			</svg>
		 </section>

		<section class="loader">Loading...</section>
		<section class="modal-promotion"></section>

		<section id="page" class="site-content">
			<div id="site-content-wrap" <?php body_class(); ?>>
				<header class="header sticky" data-aos="fade-down" data-aos-offset="0" data-aos-easing="ease" data-aos-duration="800">
					<div class="logo">
						<p>
							<a href="<?php echo site_url('/', 'http'); ?>">
								<svg version="1.1"
									 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
									 x="0px" y="0px" width="78.2px" height="30px" viewBox="0 0 78.2 30" style="enable-background:new 0 0 78.2 30;"
									 xml:space="preserve">
								<defs>
								</defs>
								<path class="st1" d="M9.6,18.5c-1-0.5-2.9-1.1-3.6-1.3c-1.1-0.4-0.8-1.6,0.3-1.6c0.8,0,1.3,0.3,1.6,0.9l3.9-2.1C11.3,13.1,9.3,11,6.6,11
									c-3.1,0-6.2,2.3-6.2,5.5c0,1.6,0.8,3.2,2.2,4.3c1.6,1,2.9,1.2,4,1.6c2,0.7,1.9,1.6,1.6,2.1c-0.4,0.6-2.8,1.1-4.1-1.1l-4,2.1
									c1.4,2.6,3.4,4.3,6.6,4.3c3.7,0,6.5-2.5,6.5-5.9C13.2,21.6,11.8,19.6,9.6,18.5z"/>
								<polygon class="st1" points="22.5,4.7 17.7,4.7 17.7,11.3 14.6,11.3 14.6,15.9 17.7,15.9 17.7,29.6 22.5,29.6 22.5,15.9 25.7,15.9 25.7,11.3
									22.5,11.3 "/>
								<path class="st1" d="M41.5,12.7c0,0-1.7-1.7-4.7-1.7c-5.2,0-9.3,4.2-9.3,9.4c0,5.2,4.1,9.4,9.3,9.4c3,0,4.7-1.7,4.7-1.7v1.4h4.8V0h-4.8V12.7z
									 M36.9,25c-2.6,0-4.5-2-4.5-4.6c0-2.6,2-4.6,4.5-4.6c2.6,0,4.6,2,4.6,4.6C41.5,23,39.5,25,36.9,25z"/>
								<rect class="st1" x="50.7" y="11.3" width="4.8" height="18.3"/>
								<path class="st1" d="M53.1,1.7c-1.7,0-3.1,1.4-3.1,3.1c0,1.7,1.4,3.1,3.1,3.1c1.7,0,3.1-1.4,3.1-3.1C56.2,3.1,54.8,1.7,53.1,1.7z"/>
								<path class="st1" d="M62.1,27.4c1.6,1.4,3.7,2.2,6,2.2c5.2,0,9.4-4.2,9.4-9.4c0-2.3-0.8-4.4-2.2-6l2.9-2.9l-1-1l-2.9,2.9
									c-1.7-1.5-3.9-2.4-6.3-2.4c-5.2,0-9.4,4.2-9.4,9.4c0,2.4,0.9,4.6,2.4,6.3L58.5,29l1,1L62.1,27.4z M63.5,20.2c0-2.6,2.1-4.6,4.6-4.6
									c1.1,0,2,0.4,2.8,1L64.5,23C63.8,22.2,63.5,21.3,63.5,20.2z M65.5,24l6.4-6.4c0.5,0.7,0.8,1.6,0.8,2.6c0,2.6-2.1,4.6-4.6,4.6
									C67.1,24.8,66.2,24.5,65.5,24z"/>
								</svg>
							</a>
						</p>
					</div>
					<nav class="menu-main">
						<ul>
							<!-- <li><a href="<?php echo site_url('/', 'http'); ?>">Work</a></li> -->
							<li><a href="<?php echo site_url('/about', 'http'); ?>">About</a></li>
							<li><a href="<?php echo site_url('/contact', 'http'); ?>">Contact</a></li>
							<li><button class="menu">Menu</button></li>
						</ul>
					</nav>
				</header>
