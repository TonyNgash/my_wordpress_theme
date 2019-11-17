<?php

/*
@package tony_ngash_everydayapps
	===============================
		ADMIN ENQUEUE FUNCTIONS
	===============================

*/

function eda_load_admin_scripts( $hook ) {
//echo $hook;
	if ('toplevel_page_everydayapps_slug' == $hook ) {
		

	  //wp_register_style(string $handle, mixed $src, array $dependancies, mixed $version, string $media);
		wp_register_style('eda_admin', get_template_directory_uri() . '/css/eda_admin.css', array(), '1.0.0', 'all');
		wp_enqueue_style('eda_admin');

		wp_enqueue_media();

	  //wp_register_script(string $handle, string $src, array $dependancies, mixed $version, boolean $in_footer);
		wp_register_script('eda_admin_script',get_template_directory_uri() . '/js/eda_admin.js',array('jquery'), '1.0.0', true);
		wp_enqueue_script( 'eda_admin_script' );

	} else if('everydayapps_page_everydayapps_css_slug' == $hook) {
       //USAGE
      //wp_enqueue_style(string $handle, mixed $src, array $dependancies, mixed $version, string $media);
		wp_enqueue_style('ace', get_template_directory_uri() . '/css/eda_ace.css', array(), '1.0.0', 'all');

       //USAGE
      //wp_enqueue_script(string $handle, mixed $src, array $dependancies, mixed $version, boolean $in_footer);
		wp_enqueue_script('ace', get_template_directory_uri() . '/js/ace/ace.js', array('jquery'), '1.4.6', true);
		wp_enqueue_script('eda-custom-css-script', get_template_directory_uri() . '/js/eda_custom_css.js',array('jquery'), '1.0.0', true);

	}else {

		return;	
	}

}

add_action('admin_enqueue_scripts','eda_load_admin_scripts');




/*

	===============================
		FRONTEND ENQUEUE FUNCTIONS
	===============================

*/


function everydayapps_load_scripts(){

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all');

	wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all' );

	wp_enqueue_style('eda', get_template_directory_uri() . '/css/eda.css', array(), '1.0.0', 'all');

	wp_enqueue_style('raleway','https://fonts.googleapis.com/css?family=Raleway:200,300,500&display=swap');

	wp_enqueue_style('montserrat', 'https://fonts.googleapis.com/css?family=Montserrat&display=swap');

	wp_enqueue_style('martel', 'https://fonts.googleapis.com/css?family=Martel+Sans&display=swap');


	wp_deregister_script( 'jquery' );
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', false, '3.4.1', true );
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
	wp_enqueue_script('eda-main', get_template_directory_uri() . '/js/eda-main-js.js', array('jquery'), '4.3.1', true);

}
add_action('wp_enqueue_scripts', 'everydayapps_load_scripts');