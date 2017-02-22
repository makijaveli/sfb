<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<!--[if lte IE 8]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">

		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slicknav.css">

        <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/font-awesome/css/font-awesome.min.css">

		<!--<link href="css/jquery.bxslider.css" rel="stylesheet" />-->

		<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 

		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>

		<script>

		jQuery(document).ready(function(){
		  jQuery('.slider').bxSlider({
		  auto: true
  			});
		});

		</script>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>



		<?php wp_head(); ?>

	</head>

<body <?php body_class(); ?>>

<div class="redres">
	</div>

	<header class="red">
		
		<div class="headerup">
			
			<div class="wrapper">

				<?php get_template_part('template_parts/header-icons'); ?>
				
				<div class="headerupnav">
					
					<?php wp_nav_menu( array( 'theme_location' => 'header-top-menu' ) ); ?>

				</div><!-- headerupnav -->

				<div class="headerright">

				<div class="seacrhexpand">

					<form class="Search red" method="get" action="<?php bloginfo('home'); ?>/">
				  <input type="text" class="Search-box red" name="s" id="Search-box" placeholder="Pretraga...">
				  <label for="Search-box" class="Search-box-label">
				    <span class="fa fa-search sb-icon-search"></span>
				  </label>
				  <span class="Search-close">
				    <i class="fa fa-times" aria-hidden="true"></i>
				  </span>
				</form>

				</div>	

				
				<div class="headersoclang">	
						
						<a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>


					<div class="lang">
						<div class="cir-lat-select">
							<?php if(ICL_LANGUAGE_CODE=='sr'): ?>						
								<?php stl_show_selector ('oneline', '', 'Ћир', 'Lat') ?>
							<?php endif; ?>						
						</div>	
						<div class="lang-select">
							<?php do_action('wpml_add_language_selector'); ?>
						</div>
					</div>

				</div><!-- headersoclang -->

				</div><!-- headerright -->

			</div><!-- wrapper -->

		</div><!-- headerup -->

		<div class="headerlogo">

			<?php if (stl_is_current_cyrillic()) { ?>
				<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo-red-cir.png" alt="Šumarski fakultet"></a>
			<?php } else { ?>
				<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo-red.png" alt="Šumarski fakultet"></a>
			<?php } ?>
		</div>

	</header>

	<nav class="main-nav red">

		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

	</nav>

	<!-- responsive navigacija -->

	<div id="menu" class="red">
		<?php wp_nav_menu( array( 'theme_location' => 'header-res' ) ); ?>

		<div class="lang">
	
			<ul>
				<div class="cir-lat-select">
							<?php if(ICL_LANGUAGE_CODE=='sr'): ?>						
								<?php stl_show_selector ('oneline', '', 'Ћир', 'Lat') ?>
							<?php endif; ?>						
						</div>	
						<div class="lang-select">
							<?php do_action('wpml_add_language_selector'); ?>
						</div>
			</ul>
		</div>

		<div class="ressocial">

			<ul>
			    <li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
				<li><a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
				<li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href=""><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
				<li><a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
			</ul>

			

		</div>

		
	</div>