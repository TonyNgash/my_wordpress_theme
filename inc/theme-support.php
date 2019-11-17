<?php

/*
@package tony_ngash_everydayapps
	===============================
		THEME SUPPORT OPTIONS
	===============================

*/

$options = get_option('post_formats');
$formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
$output = array();
foreach ( $formats as $format ) {
		$output[] = ( @$options[$format] == 1 ? $format : '' );
}
if( !empty($options) ) {
  //add_theme_support(string $feature)
	add_theme_support('post-formats', $output);
}

$header = get_option('custom_header');
if( @$header == 1) {
	add_theme_support('custom-header');
}
$background = get_option('custom_background');
if( @$background == 1) {
	add_theme_support('custom-background');
}

add_theme_support( 'post-thumbnails' );

/* Activate Nav Menu Option*/

function eda_register_nav_menu(){
	//UASGE  
  //register_nav_menu(string $location, string $description);
	register_nav_menu( 'primary', 'Header Navigation Menu' );

}
add_action( 'after_setup_theme', 'eda_register_nav_menu' );

/*
===============================
		BLOG LOOP CUSTOM FUNCTIONS
	===============================
*/

function eda_posted_meta() {

	return 'category name and publishing time';

}