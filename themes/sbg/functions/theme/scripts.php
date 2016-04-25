<?php  

/* Archivo que solo se encargara de cargas los scripts del tema 
	http://www.ey.com/PE/es/Home
*/

function load_custom_scripts()
{
	wp_deregister_script('jquery');
  wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js', false, '1.11.2');
  wp_enqueue_script('jquery');

	//jsCarousellite /
	wp_enqueue_script('jscarousel', THEMEROOT . '/js/jquery.jcarousellite.min.js', array('jquery'), false , true);

	//owl carousel /
	wp_enqueue_script('owl-carousel', THEMEROOT . '/js/owl.carousel.min.js', array('jquery'), false , true);

	//cargar tether /
	wp_enqueue_script('tether', THEMEROOT . '/js/tether.min.js', array('jquery'), '1.1.0', true);

	//cargar bootstrap v4
	wp_enqueue_script('bootstrap', THEMEROOT . '/js/bootstrap.min.js', array('jquery'), '4.0.0', true);

	//script
	wp_enqueue_script('custom_script', THEMEROOT . '/js/script.js', array('jquery'), false, true);

}

add_action('wp_enqueue_scripts', 'load_custom_scripts');

?>