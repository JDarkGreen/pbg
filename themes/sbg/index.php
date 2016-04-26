
<!-- Header -->
<?php 
	get_header(); 
	$options = get_option('sbg_custom_settings'); 
?>

<!-- Incluir Banner de Portada -->
<?php  
	$term = "Portada";
	//template
	include(locate_template('partials/portada/content-banner.php'));
?>

<!-- /**************************************************************/ -->
<!-- /*++++++++++++++++ SECCION DE SERVICIOS ++++++++++++++++++++++*/ -->
<!-- /**************************************************************/ -->

<section class="pageInicio__section-service">

	<section class="container">
		<div class="row">
			<div class="col-xs-12">

				<!-- Titulo -->
				<h2 class="PageCommon__subtitle PageCommon__subtitle--blue text-uppercase"><?php _e('Nuestros Servicios', LANG ); ?></h2>
				<?php  
					/* Query llamar a todos los servicios */
					$args = array(
						'order'          => 'ASC',
						'orderby'        => 'menu_order',
						'post_type'      => 'servicio',
						'posts_per_page' => -1,
					);

					$servicios = get_posts( $args ); #var_dump($servicios);
				?>

				<!-- Seccion con posicion relativa -->
				<section class="relative">

					<div id="owl-carousel-servicios" class="pageInicio__section-service__carousel">
						<?php foreach( $servicios as $servicio ) :  ?>
			          <div class="item-servicio">
			          	<!-- Conseguir imagen -->
			          	<?php 
			          		$img_servicio = get_the_post_thumbnail( $servicio->ID , array('',189) , array('class'=>'img-fluid') ); 
			          		if( !empty($img_servicio) ) echo $img_servicio;
			          	?>
			          	<!-- Titulo del servicio -->
			          	<h2 class="img-servicio__title"><?php _e( $servicio->post_title, LANG ); ?></h2>
			          </div><!-- /.items servicio -->
						<?php endforeach; ?>
					</div> <!-- /.owl-carousel-servicios -->

					<!-- Flechas del carousel -->
					<a id="arrow-service-carousel--prev" href="#" class="arrow-service-carousel arrow-service-carousel--prev">
						<i class="fa fa-play" aria-hidden="true"></i>
					</a> <!-- /-.arrow-service-carousel--prev -->
					<a id="arrow-service-carousel--next" href="#" class="arrow-service-carousel arrow-service-carousel--next">
						<i class="fa fa-play" aria-hidden="true"></i>
					</a> <!-- /.arrow-service-carousel--next -->
						
				</section><!-- /relative -->

			</div> <!-- ./col-xs-12 -->
		</div> <!-- /.row -->
	</section><!-- /.container -->

</section><!-- /.pageInicio__section-service -->

<!-- LineA Separadora -->
<!--span class="line-separator"></span><!-- /line separator -->


<!-- /**************************************************************/ -->
<!-- /*++++++++++++++++ SECCION DE PRESENTACION +++++++++++++++++++*/ -->
<!-- /**************************************************************/ -->
<section class="pageInicio__section-presentation">
	<!-- Container -->
	<div class="container">
		<div class="row container-flex"> <?php /*Contenedor con clase flex */ ?>
			<div class="col-xs-12 col-sm-6 container-flex container-flex-center">
				<!-- Imagen de Nosotros -->
				<?php $url_img_nosotros = $options['image_nosotros']; if( !empty($url_img_nosotros) ): ?>
					<figure class="">
						<img src="<?= $url_img_nosotros ?>" alt="nosotros-informacion-imagen" class="img-fluid" />
					</figure> <!-- /.centerblock -->
				<?php endif; ?>
			</div> <!-- /.col-xs-12 col-sm-6 -->

			<!-- /*Contenedor con clase flex */ -->
			<div class="col-xs-12 col-sm-6 container-flex container-flex-center section-presentation-text"> 
				<!-- Seccion de presentacion texto -->
				<section class="section-presentation-text-content text-justify">
					<!-- Titulo -->
					<h2 class="section-presentation-text__title text-uppercase">
						<?php _e( 'presentación' , LANG ); ?>
					</h2>
					<!-- Texto nosotros -->
					<?php $text_nosotros = $options['widget_nosotros']; if( !empty($text_nosotros) ): ?>
						<?= apply_filters('the_content', $text_nosotros ); ?>
					<?php endif; ?>

					<!-- Boton ver más -->
				  <a href="#" class="btn__show-more text-uppercase pull-xs-right"><?php _e('ver más' , LANG ); ?></a>

				  <!-- Limpiar Floats --><div class="clearfix"></div>
				</section> <!-- /.section-presentation-text-content --> 
			</div> <!-- /.col-xs-12 col-sm-6 -->
		</div> <!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.pageInicio__section-presentation" -->

<!-- /**************************************************************/ -->
<!-- /*++++++++++++++++ MISCELANEO +++++++++++++++++++++++++++++++*/ -->
<!-- /**************************************************************/ -->

<section class="pageInicio__miscelaneo">
	
	<section class="container">
		<div class="row">

			<!-- Seccion de Articulos -->
			<section class="sectionPage__articles col-xs-12 col-sm-8">

				<!-- Titulo -->
				<h2 class="PageCommon__subtitle text-uppercase"><?php _e('Artículos', LANG ); ?></h2>

				<?php  
					//Obtener todos los posts
					$args = array(
						'order'          => 'ASC',
						'orderby'        => 'menu_order',
						'post_type'      => 'post',
						'posts_per_page' => 6,
					);

					$ultimos_posts = get_posts( $args ); #var_dump($ultimos_posts);
				?>
				<div id="carousel-articles">
					<ul>
					<?php foreach( $ultimos_posts as $u_post ) : ?>
						<li>
						<article class="sectionPage__articles__item">
							<!-- Imagen -->
							<figure class="pull-xs-left">
								<?php $image = get_the_post_thumbnail( $u_post->ID , array(210,96) ); echo $image; ?>
							</figure><!-- /figure -->
							<!-- Texto -->
							<h3 class="sectionPage__articles__item__title">
								<?php _e( $u_post->post_title , LANG ); ?></h3>
							<!-- Extracto 30 palabras -->
							<p class="sectionPage__articles__item__excerpt text-justify">
								<?php _e( wp_trim_words( $u_post->post_content , 30 , '' ) , LANG ); ?>
								<a href="<?= $u_post->guid ?>">Leer más <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>
							</p>
						</article><!-- /.sectionPage__articles__item -->

						<!-- Limpiar float --> <div class="clearfix"></div>
					<?php endforeach; ?>
						</li>
					</ul>
				</div><!-- /#bxslider-carousel-articles -->
			</section><!-- /.sectionPage__articles -->

			<!-- Seccion widget facebook - Ocultar en version mobile -->
			<section class="sectionHomeFacebook col-xs-12 col-sm-4 text-xs-center">
			
				<!-- Titulo -->
				<h2 class="PageCommon__subtitle text-uppercase text-xs-left"><?php _e('Facebook', LANG ); ?></h2>

				<?php $link_facebook = $options['red_social_fb']; 
					if( !empty($link_facebook) ) :
				?>

					<div id="fb-root"></div> <!-- /fb root -->

					<!-- Script -->
					<script>(function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id)) return;
						js = d.createElement(s); js.id = id;
						js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
						fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>

					<div class="fb-page" data-href="<?= $link_facebook ?>" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-height="375" data-hide-cover="false" data-show-facepile="true">
						<div class="fb-xfbml-parse-ignore">
							<blockquote cite="<?= $link_facebook ?>">
								<a href="<?= $link_facebook ?>"><?php bloginfo('name'); ?></a>
							</blockquote>
						</div> <!-- /.fb-xfbml-parse-ignore -->
					</div> <!-- /.fb-page -->
				<?php endif; ?>
			</section>  <!-- /.sectionHomeFacebook -->
		
		</div> <!-- /.row -->
	</section> <!-- /.container -->

</section> <!-- /.pageInicio__miscelaneo -->

<!-- Footer -->
<?php get_footer(); ?>