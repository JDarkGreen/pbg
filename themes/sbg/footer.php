
<!-- Extraer opciones  -->
<?php $options = get_option('pretelli_custom_settings'); ?>

<footer class="mainFooter">
	<div class="container">
		<div class="row container-flex">

			<!-- logo  -->
			<div class="col-xs-12 col-sm-4 container-flex container-flex-center">
				<a href="<?= site_url()  ?>" class="text-xs-center">
					<img src="<?= IMAGES ?>/footer/logo_blanco_pretelli.png" alt="logo-footer" class="center-block img-fluid" />
				</a> <!-- /.center-block -->
			</div><!-- /.col-xs-12 col-sm-4 -->

			<!-- Informacion  -->
			<div class="col-xs-12 col-sm-4 ">
				<!-- Subtitulo -->
				<h2 class="mainFooter__subtitle text-uppercase"><?php _e('contacto', LANG ); ?></h2>
				<!-- Lista -->
				<ul class="mainFooter__contact-list list-unstyled">
					<li class="address"> jr tambo real n 280 of 208 santiago de surco</li>
					<li class="phone"> 992 745 510 </li>
					<li class="email"> info@grupopetrelli.pe </li>
				</ul><!-- /mainFooter__contact-list  -->

			</div><!-- /.col-xs-12 col-sm-4 -->
			<!--  Redes sociales -->
			<div class="col-xs-12 col-sm-4">
				<!-- Subtitulo -->
				<h2 class="mainFooter__subtitle text-uppercase"><?php _e('redes sociales', LANG ); ?></h2>
				<!-- Lista -->
				<ul class="mainFooter__social-list list-unstyled list-inline">

					<!-- facebook -->
					<?php if( isset( $options['red_social_fb'] ) && !empty($options['red_social_fb']) ) : ?>
						<li><a href="<?= $options['red_social_fb'] ?>" target="_blank">
							<img src="<?= IMAGES ?>/redes-sociales/redes_facebook.png" alt="facebook" class="img-fluid" />
						</a></li>
					<?php endif; ?>

					<!-- twitter -->
					<?php if( isset( $options['red_social_twitter'] ) && !empty($options['red_social_twitter']) ) : ?>
						<li><a href="<?= $options['red_social_twitter'] ?>" target="_blank">
							<img src="<?= IMAGES ?>/redes-sociales/redes_twitter.png" alt="twitter" class="img-fluid" />
						</a></li>
					<?php endif; ?>

					<!-- youtube -->
					<?php if( isset( $options['red_social_ytube'] ) && !empty($options['red_social_ytube']) ) : ?>
						<li><a href="<?= $options['red_social_ytube'] ?>" target="_blank">
							<img src="<?= IMAGES ?>/redes-sociales/redes_youtube.png" alt="youtube" class="img-fluid" />
						</a></li>
					<?php endif; ?>

					<!-- gmail -->
					<?php if( isset( $options['red_social_gmail'] ) && !empty($options['red_social_gmail']) ) : ?>
						<li><a href="<?= $options['red_social_gmail'] ?>" target="_blank">
							<img src="<?= IMAGES ?>/redes-sociales/redes_google.png" alt="gplus" class="img-fluid" />
						</a></li>
					<?php endif; ?>

				</ul><!-- /mainFooter__social-list  -->	

				<!-- Logo petrelli pagina web -->
				<a href="<?= site_url() ?>" class="text-xs-right"> <img src="<?= IMAGES ?>/footer/www_grupo_pretelli.png" alt="" class="img-fluid" /></a>

			</div><!-- /.col-xs-12 col-sm-4 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</footer> <!-- /.mainFooter -->


	<?php wp_footer(); ?>
</body>
</html>

