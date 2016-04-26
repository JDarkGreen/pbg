<?php
/***********************************************************************************************/
/* Add a menu option to link to the customizer */
/***********************************************************************************************/
add_action('admin_menu', 'display_custom_options_link');
function display_custom_options_link() {
	add_theme_page('Sbg Options', 'Sbg Options', 'edit_theme_options', 'customize.php');
}

/***********************************************************************************************/
/* Add options in the theme customizer page */
/***********************************************************************************************/
add_action('customize_register', 'sbg_customize_register');
function sbg_customize_register($wp_customize) {
	// Logo 
	$wp_customize->add_section('sbg_logo', array(
		'title' => __('Logo', 'sbg-framework'),
		'description' => __('Permite subir tu logo personalizado.', 'sbg-framework'),
		'priority' => 35
	));
	
	$wp_customize->add_setting('sbg_custom_settings[logo]', array(
		'default' => IMAGES . '/logo.png',
		'type' => 'option'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
		'label' => __('Carga tu Logo', 'sbg-framework'),
		'section' => 'sbg_logo',
		'settings' => 'sbg_custom_settings[logo]'
	)));

	/*|-----------------------------------------------------------------------|*/
	/*|-----------------------------------------------------------------------|*/

	####>>>>>>>>>>>> MISION Y VISIÓN >>>>>>>>>>>>>>>>>>
	$wp_customize->add_section('sbg_mision_vision', array(
		'title' => __('Misión y Visión Empresa', 'sbg-framework'),
		'description' => __('Sección Misión y Visión Empresa', 'sbg-framework'),
		'priority' => 41
	));	
	/* MISION */
	$wp_customize->add_setting('sbg_custom_settings[text_mision]', array(
		'default' => '',
		'type' => 'option'
	));
	$wp_customize->add_control('sbg_custom_settings[text_mision]', array(
		'label'    => __('Escribe el texto MISIÓN', 'sbg-framework'),
		'section'  => 'sbg_mision_vision',
		'settings' => 'sbg_custom_settings[text_mision]',
		'type'     => 'textarea'
	));	
	/* VISION */
	$wp_customize->add_setting('sbg_custom_settings[text_vision]', array(
		'default' => '',
		'type' => 'option'
	));
	$wp_customize->add_control('sbg_custom_settings[text_vision]', array(
		'label'    => __('Escribe el texto VISIÓN', 'sbg-framework'),
		'section'  => 'sbg_mision_vision',
		'settings' => 'sbg_custom_settings[text_vision]',
		'type'     => 'textarea'
	));

	/*|-----------------------------------------------------------------------|*/
	/*|-----------------------------------------------------------------------|*/

	####>>>>>>>>>>>> REDES SOCIALES >>>>>>>>>>>>>>>>>>
	$wp_customize->add_section('sbg_redes_sociales', array(
		'title' => __('Redes Sociales', 'sbg-framework'),
		'description' => __('Sección Redes Sociales', 'sbg-framework'),
		'priority' => 41
	));	
	//facebook
	$wp_customize->add_setting('sbg_custom_settings[red_social_fb]', array(
		'default' => '',
		'type' => 'option'
	));
	$wp_customize->add_control('sbg_custom_settings[red_social_fb]', array(
		'label'    => __('Coloca el link de facebook de la empresa', 'sbg-framework'),
		'section'  => 'sbg_redes_sociales',
		'settings' => 'sbg_custom_settings[red_social_fb]',
		'type'     => 'text'
	));
	//youtube
	$wp_customize->add_setting('sbg_custom_settings[red_social_ytube]', array(
		'default' => '',
		'type' => 'option'
	));
	$wp_customize->add_control('sbg_custom_settings[red_social_ytube]', array(
		'label'    => __('Coloca el link de youtube de la empresa', 'sbg-framework'),
		'section'  => 'sbg_redes_sociales',
		'settings' => 'sbg_custom_settings[red_social_ytube]',
		'type'     => 'text'
	));
	//twitter
	$wp_customize->add_setting('sbg_custom_settings[red_social_twitter]', array(
		'default' => '',
		'type' => 'option'
	));
	$wp_customize->add_control('sbg_custom_settings[red_social_twitter]', array(
		'label'    => __('Coloca el link de twitter de la empresa', 'sbg-framework'),
		'section'  => 'sbg_redes_sociales',
		'settings' => 'sbg_custom_settings[red_social_twitter]',
		'type'     => 'text'
	));
	//gmail
	$wp_customize->add_setting('sbg_custom_settings[red_social_gmail]', array(
		'default' => '',
		'type' => 'option'
	));
	$wp_customize->add_control('sbg_custom_settings[red_social_gmail]', array(
		'label'    => __('Coloca el link de gmail de la empresa', 'sbg-framework'),
		'section'  => 'sbg_redes_sociales',
		'settings' => 'sbg_custom_settings[red_social_gmail]',
		'type'     => 'text'
	));

	
	// Contact Email
	$wp_customize->add_section('sbg_contact_email', array(
		'title' => __('Correo Contacto de Formulario', 'sbg-framework'),
		'description' => __('Escribe el Correo Contacto de Formulario', 'sbg-framework'),
		'priority' => 37
	));
	
	$wp_customize->add_setting('sbg_custom_settings[contact_email]', array(
		'default' => '',
		'type' => 'option'
	));
	
	$wp_customize->add_control('sbg_custom_settings[contact_email]', array(
		'label'    => __('Dirección Contacto de Formulario', 'sbg-framework'),
		'section'  => 'sbg_contact_email',
		'settings' => 'sbg_custom_settings[contact_email]',
		'type'     => 'text'
	));

	//Customizar celular
	$wp_customize->add_section('sbg_contact_cel', array(
		'title' => __('Celular de Contacto', 'sbg-framework'),
		'description' => __('Celular de Contacto', 'sbg-framework'),
		'priority' => 39
	));
	
	$wp_customize->add_setting('sbg_custom_settings[contact_cel]', array(
		'default' => '',
		'type' => 'option'
	));
	
	$wp_customize->add_control('sbg_custom_settings[contact_cel]', array(
		'label'    => __('Escribe el o los números de celular del contacto separados por comas', 'sbg-framework'),
		'section'  => 'sbg_contact_cel',
		'settings' => 'sbg_custom_settings[contact_cel]',
		'type'     => 'text'
	));

	//Customizar telefono
	$wp_customize->add_section('sbg_contact_tel', array(
		'title' => __('Telefono de Contacto', 'sbg-framework'),
		'description' => __('Telefono de Contacto', 'sbg-framework'),
		'priority' => 39
	));
	
	$wp_customize->add_setting('sbg_custom_settings[contact_tel]', array(
		'default' => '',
		'type' => 'option'
	));
	
	$wp_customize->add_control('sbg_custom_settings[contact_tel]', array(
		'label'    => __('Escribe el numero de teléfono', 'sbg-framework'),
		'section'  => 'sbg_contact_tel',
		'settings' => 'sbg_custom_settings[contact_tel]',
		'type'     => 'text'
	));

	//Customizar Direccion
	$wp_customize->add_section('sbg_contact_address', array(
		'title' => __('Direccion de Contacto', 'sbg-framework'),
		'description' => __('Direccion de Contacto', 'sbg-framework'),
		'priority' => 40
	));
	
	$wp_customize->add_setting('sbg_custom_settings[contact_address]', array(
		'default' => '',
		'type' => 'option'
	));
	
	$wp_customize->add_control('sbg_custom_settings[contact_address]', array(
		'label'    => __('Escribe la Direccion del contacto ', 'sbg-framework'),
		'section'  => 'sbg_contact_address',
		'settings' => 'sbg_custom_settings[contact_address]',
		'type'     => 'text'
	));

	//Customizar MAPA
	$wp_customize->add_section('sbg_contact_mapa', array(
		'title' => __('Mapa de Contacto', 'sbg-framework'),
		'description' => __('Mapa de Contacto', 'sbg-framework'),
		'priority' => 41
	));
	
	$wp_customize->add_setting('sbg_custom_settings[contact_mapa]', array(
		'default' => '',
		'type' => 'option'
	));
	
	$wp_customize->add_control('sbg_custom_settings[contact_mapa]', array(
		'label'    => __('Escribe latitud y longitud de mapa sepador por coma', 'sbg-framework'),
		'section'  => 'sbg_contact_mapa',
		'settings' => 'sbg_custom_settings[contact_mapa]',
		'type'     => 'text'
	));

	//Customizar WIDGET NOSOTROS
	$wp_customize->add_section('sbg_widget_nosotros', array(
		'title' => __('Sección WIDGET NOSOTROS', 'sbg-framework'),
		'description' => __('Sección WIDGET NOSOTROS', 'sbg-framework'),
		'priority' => 40
	));
	
	//textarea
	$wp_customize->add_setting('sbg_custom_settings[widget_nosotros]', array(
		'default' => '',
		'type' => 'option'
	));
	
	$wp_customize->add_control('sbg_custom_settings[widget_nosotros]', array(
		'label'    => __('Escribe contenido que ira en sección nosotros - PORTADA', 'sbg-framework'),
		'section'  => 'sbg_widget_nosotros',
		'settings' => 'sbg_custom_settings[widget_nosotros]',
		'type'     => 'textarea'
	));
	//imagen
	$wp_customize->add_setting('sbg_custom_settings[image_nosotros]',array(
		'default' => '',
		'type'    => 'option'
	));

	$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'widget_nosotros',array(
		'label'    => __('Imagen Nosotros', 'sbg-framework'),
		'section'  => 'sbg_widget_nosotros',
		'settings' => 'sbg_custom_settings[image_nosotros]',
	)));
	
}	
?>