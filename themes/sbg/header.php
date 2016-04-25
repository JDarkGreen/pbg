<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	
	<!-- Pingbacks -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicon and Apple Icons -->
	
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	
	<?php 
		$options = get_option('sbg_custom_settings'); 
		global $post;
	?>

	<!-- Header -->
	<header class="mainHeader">
		<!-- Container -->
		<div class="container">
			<div class="row">
				<!-- Logo -->
				<div class="col-xs-4">
					<!-- Logo -->
					<h1 class="logo">
						<a href="<?= site_url() ?>"><img src="<?= IMAGES ?>/logo_sbg.png" alt="logo-sbg" class="img-fluid" /></a>
					</h1><!-- /.logo -->
				</div><!-- /col-xs-4 -->
				<!-- Menu  -->
				<div class="col-xs-8">
					<div class="col-xs-12">
						<!-- Redes sociales -->
						<ul class="social-links">
							<li><?php _e('Siguenos en las redes' , LANG ); ?></li>
							<!-- facebook -->
							<?php $fb = $options['red_social_fb']; if( !empty($fb) ) : ?>
							<li><a href="<?= $fb ?>" target="_blank"><img src="<?= IMAGES ?>/redes-sociales/redes_facebook_chico_superior.png" alt="" class="img-fluid" /></a></li>
							<?php endif; ?>
							<!-- twitter -->
							<?php $twitter = $options['red_social_twitter']; if( !empty($twitter) ) : ?>
							<li><a href="<?= $twitter ?>" target="_blank"><img src="<?= IMAGES ?>/redes-sociales/redes_twiter_chico_superior.png" alt="" class="img-fluid" /></a></li>
							<?php endif; ?>
							<!-- google -->
							<?php $gmail = $options['red_social_gmail']; if( !empty($gmail) ) : ?>
							<li><a href="<?= $gmail ?>" target="_blank"><img src="<?= IMAGES ?>/redes-sociales/redes_google_chico_superior.png" alt="" class="img-fluid" /></a></li>
							<?php endif; ?>
							<!-- youtube -->
							<?php $ytube = $options['red_social_ytube']; if( !empty($ytube) ) : ?>
							<li><a href="<?= $ytube ?>" target="_blank"><img src="<?= IMAGES ?>/redes-sociales/redes_youtube_chico_superior.png" alt="" class="img-fluid" /></a></li>
							<?php endif; ?>
						</ul><!-- /social-links -->
					</div><!-- /.col-xs-12 -->
					<div class="col-xs-12">
						<!-- Navegacion principal -->
						<nav class="mainNavigation">
							<?php 
								wp_nav_menu(
									array(
										'menu_class'     => 'mainMenu list-inline text-center',
										'theme_location' => 'main-menu'
								));
							?>
						</nav><!-- /.mainNavigation -->
					</div><!-- /.col-xs-12 -->
				</div><!-- /.col-xs-8 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</header><!-- /.mainHeader -->



