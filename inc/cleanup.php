<?php

/*
@package tony_ngash_everydayapps
	====================================
		REMOVE GENERATOR VERSION NUMBER
	====================================

*/
	/*remove version string from js and css */
function eda_remove_wp_version_strings( $src ) {

	global $wp_version;
	parse_str( parse_url($src, PHP_URL_QUERY), $query );
	if( !empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}
   //USAGE
  //add_filter(string $tag, callback $function_to_add, int $priority, int $accepted_args);
	add_filter('script_loader_src', 'eda_remove_wp_version_strings' );
	add_filter('style_loader_src', 'eda_remove_wp_version_strings' );

	/*remove meta tag generator from header*/
function eda_remove_meta_version() {
	return '';
}	
add_filter( 'the_generator', 'eda_remove_meta_version' ); 