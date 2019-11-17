<?php

/*
@package tony_ngash_everydayapps
	===============================
		ADD A CLASS TO WP NAV MENU LIs
	===============================

*/

/*adds a class to nav menu 'li' tag*/
// function add_additional_class_on_li($classes, $item, $args) {
//     if($args->add_li_class) {
//         $classes[] = $args->add_li_class;
//     }
//     return $classes;
// }
// add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

	//in wp_nav_menu args add: 'add_li_class' => 'your classes here'


/*adds a class to nav menu 'a' tag*/

function add_link_atts($atts) {
  $atts['class'] = "test-red";
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');