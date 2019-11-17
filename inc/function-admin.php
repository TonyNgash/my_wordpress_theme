<?php

/*
@package tony_ngash_everydayapps
	===============================
		ADMIN PAGE
	===============================

*/
function everydayapps_add_admin_page() {

	//Generate Everydayapps Admin Page
	add_menu_page( 'Everydayapps Theme Options','Everydayapps','manage_options','everydayapps_slug', 'everydayapps_theme_create_page',get_template_directory_uri() . '/img/eda-favicon.png', 110);

	//Generate EDA Admin Subpages
  //add_submenu_page(string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug, callback $function);
	add_submenu_page('everydayapps_slug','Ingrotel Sidebar Settings','Sidebar','manage_options','everydayapps_slug','everydayapps_theme_create_page');
	add_submenu_page('everydayapps_slug','Everydayapps Options','Theme Options','manage_options','everydayapps_theme_slug','everydayapps_theme_settings_page');
	add_submenu_page('everydayapps_slug','Everydayapps Contact Form','Contact Form','manage_options','everydayapps_contact_slug','everydayapps_contact_form_page');
	add_submenu_page('everydayapps_slug','Everydayapps CSS Options','Custom CSS','manage_options','everydayapps_css_slug','everydayapps_css_settings_page');

	//activate custom settings
	add_action('admin_init','everydayapps_custom_settings');

}
add_action('admin_menu', 'everydayapps_add_admin_page');

function everydayapps_custom_settings() {
	//Sidebar Options====================================================
  //register_setting(string $option_group, string $option_name, callback $sanitize_calback);
	register_setting('eda-settings-group','profile_pic');
	register_setting('eda-settings-group','first_name');
	register_setting('eda-settings-group','last_name');
	register_setting('eda-settings-group','user_description');
	register_setting('eda-settings-group','twitter_handle','eda_sanitize_twitter_handle');
	register_setting('eda-settings-group','facebook_handle');
	register_setting('eda-settings-group','instagram_handle');

  //add_settings_section(string $id, string $title, string $callback, string $page);
	add_settings_section('eda-sidebar-options','Sidebar Options','eda_sidebar_options','everydayapps_slug');

  //add_settings_field('string $id','string $title','string $callback','string $page','string $section','array $args');
	add_settings_field('sidebar-pic','Profile Picture','eda_sidebar_pic','everydayapps_slug','eda-sidebar-options');
	add_settings_field('sidebar-name','Full Name','eda_sidebar_name','everydayapps_slug','eda-sidebar-options');
	add_settings_field('sidebar-desc','Description','eda_user_description','everydayapps_slug','eda-sidebar-options');
	add_settings_field('sidebar-twitter','Twitter Handle','eda_sidebar_twitter','everydayapps_slug','eda-sidebar-options');
	add_settings_field('sidebar-facebook','Facebook Handle','eda_sidebar_facebook','everydayapps_slug','eda-sidebar-options');
	add_settings_field('sidebar-instagram','Instagram Handle','eda_sidebar_instagram','everydayapps_slug','eda-sidebar-options');

	//Theme Options====================================================
	register_setting('eda-theme-group','post_formats');
	register_setting('eda-theme-group','custom_header');
	register_setting('eda-theme-group','custom_background');

	add_settings_section('eda-theme-options','Theme Options','eda_theme_options','everydayapps_theme_settings_page');

	add_settings_field('post-formats', 'Post Formats','eda_post_formats','everydayapps_theme_settings_page','eda-theme-options');
	add_settings_field('custom-header', 'Custom Header','eda_custom_header','everydayapps_theme_settings_page','eda-theme-options');
	add_settings_field('custom-background', 'Custom Background','eda_custom_background','everydayapps_theme_settings_page','eda-theme-options');

	//CONTACT FORM OPTIONS====================================================
	register_setting('eda-contact-options','activate_contact');

	add_settings_section('eda-contact-section','Contact Form','eda_contact_section','everydayapps_contact_slug');

	add_settings_field('activate-form', 'Activate Conatct Form','eda_activate_contact_form','everydayapps_contact_slug','eda-contact-section');

	//CUSTOM CSS OPTIONS====================================================
	register_setting('eda-custom-css-options', 'eda_css', 'eda_sanitize_custom_css');

	add_settings_section( 'eda-custom-css-section', 'Custom CSS', 'eda_custom_css_section_callback', 'everydayapps_css_settings_page');

	add_settings_field( 'custom-css', 'Insert Your Custom CSS', 'eda_custom_css_callback', 'everydayapps_css_settings_page', 'eda-custom-css-section');
}
function eda_custom_css_section_callback() {
	echo 'Customize EDA Theme With Your Own CSS.';
}
function eda_custom_css_callback() {
	$css = get_option('eda_css');
	$css = ( empty($css) ? '/* Everydayapps Theme Custom CSS */' : $css );
	echo '<div id="customCss"> '.$css.'</div><textarea id="eda_css" name="eda_css" style="display:none;visibility:hidden;">'.$css.'</textarea>';
}




function eda_contact_section() {
	echo 'Activate and Deactivate The Built-in Contact Form.';
}
function eda_activate_contact_form() {
	$options = get_option('activate_contact');
	$checked = ( @$options[$format] == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="activate_contact" name="activate_contact" value="1" '.$checked.' /></label>';
}

function eda_theme_options() {
	echo 'Activate and Deactivate Theme Support Options.';
}
function eda_post_formats() {
	$options = get_option('post_formats');
	$formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
	$output = '';
	foreach ( $formats as $format ) {
		$checked = ( @$options[$format] == 1 ? 'checked' : '' );
		$output .= '<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="1" '.$checked.' />'.$format.'</label><br/>';
	}
	echo $output;
}
function eda_custom_header() {
	$options = get_option('custom_header');
	$checked = ( @$options[$format] == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_header" name="custom_header" value="1" '.$checked.' />Activate The Custom Header</label>';
}
function eda_custom_background() {
	$options = get_option('custom_background');
	$checked = ( @$options[$format] == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_background" name="custom_background" value="1" '.$checked.' />Activate The Custom Background</label>';
}


//Sidebar options functions
function eda_sidebar_pic() {
	$profile_pic = esc_attr( get_option('profile_pic'));
	if ( empty($profile_pic) ) {
		echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload_button" /> <input type="hidden" name="profile_pic" value="" id="profile_pic_input" /> ';
	} else {
		echo '<input type="button" class="button button-secondary" value="Change Profile Picture" id="upload_button" /> <input type="hidden" name="profile_pic" value="'.$profile_pic.'" id="profile_pic_input" /> <input type="button" class="button button-secondary" value="Remove" id="remove_picture" /> ';
	}
	
	
}
function eda_sidebar_name() {
	$firstName = esc_attr( get_option('first_name'));
	$lastName = esc_attr( get_option('last_name'));
	echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" /> <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name" />';
}

function eda_user_description() {
	$description = esc_attr( get_option('user_description'));
	echo '<input type="text" name="user_description" value="'.$description.'" placeholder="User Description" /><p class="description">Brief Description.</p>';
}

function eda_sidebar_twitter() {
	$twitter = esc_attr( get_option('twitter_handle'));
	echo '<input type="text" name="twitter_handle" value="'.$twitter.'" placeholder="Twitter Handle" /><p class="description">Input username without the @ character.</p>';
}
function eda_sidebar_facebook() {
	$facebook = esc_attr( get_option('facebook_handle'));
	echo '<input type="text" name="facebook_handle" value="'.$facebook.'" placeholder="Facebook Handle" /> ';
}
function eda_sidebar_instagram() {
	$instagram = esc_attr( get_option('instagram_handle'));
	echo '<input type="text" name="instagram_handle" value="'.$instagram.'" placeholder="Instagram Handle" /> ';
}
//Sanitaizantion Settings
function eda_sanitize_twitter_handle( $input ) {
	$output = sanitize_text_field($input);
	$output = str_replace('@', '', $output);
	return $output;
}

function eda_sanitize_custom_css( $input ) {
	$output = esc_textarea($input);
	return $output;
}

//TEMPLATE FUNCTIONS (Each page in our Theme Category)

function eda_sidebar_options() {
	echo "Customize your sidebar information.";
}

function everydayapps_theme_create_page() {
	//generation of our admin page

	require_once( get_template_directory() . '/inc/templates/everydayapps-admin.php');
	
}


function everydayapps_theme_settings_page() {
	//generation of our admin page

	require_once( get_template_directory() . '/inc/templates/everydayapps-theme.php');

}
function everydayapps_contact_form_page() {
	//generation of our admin page

	require_once( get_template_directory() . '/inc/templates/everydayapps-contact-form.php');

}
function everydayapps_css_settings_page() {
	//generation of a sub page
	require_once( get_template_directory() . '/inc/templates/everydayapps-custom-css.php');

}