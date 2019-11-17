<?php

/*
@package tony_ngash_everydayapps
	===============================
		THEME CUSTOM POST TYPES
	===============================

*/

$contact = get_option('activate_contact');
if( @$contact == 1) {

	add_action('init', 'eda_contact_custom_post_type');

	add_filter( 'manage_eda-contact_posts_columns', 'eda_set_contact_columns' );

	add_action('manage_eda-contact_posts_custom_column', 'eda_contact_custom_column', 10, 2);

	add_action('add_meta_boxes', 'eda_contact_add_meta_box');
	add_action('save_post', 'eda_save_contact_email_data');
}

/*  CONTACT CUSTOM POST TYPE   */
function eda_contact_custom_post_type() {
	$labels = array(
		'name' 				=> 'Messages',
		'singular_name' 	=> 'Message',
		'menu_name'			=> 'Messages',
		'name_admin_bar'	=> 'Message'
	);
	$args = array(
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'hierarchical'		=> false,
		'menu_position'		=> 26,
		'menu_icon'			=> 'dashicons-email-alt',
		'supports'			=> array( 'title', 'editor', 'author' )
	);

	register_post_type('eda-contact', $args);
}

function eda_set_contact_columns( $columns ) {
	$newColumns = array();
	$newColumns['title'] = 'Full Name';
	$newColumns['message'] = 'Message';
	$newColumns['email'] = 'Email';
	$newColumns['date'] = 'Date';

	return $newColumns;
}
 function eda_contact_custom_column( $column, $post_id ) {

 	switch ($column) {
 		case 'message':
 			echo get_the_excerpt();
 			break;
 		case 'email':
 			//email column
 			$email =  get_post_meta($post_id, '_contact_email_value_key', true);
 			echo '<a href="mailto:'.$email.'" >'.$email.'</a>';
 			break;
 	}

 }

 /** CONTACT META BOXES **/
 function eda_contact_add_meta_box() {
 	//UASAGE
  //add_meta_box(string $id, string $title, callback $callback, mixed $screen, string $context, string $priority, array $callback_args);
 	add_meta_box('contact_email', 'User Email', 'eda_contact_email_callback', 'eda-contact', 'side', 'default');
 }

 function eda_contact_email_callback( $post ) {
 	//USAGE
  //wp_nonce_field(mixed $action, string $name, boolean $referer, boolean $echo);
 	wp_nonce_field('eda_save_contact_email_data', 'eda_contact_email_meta_box_nonce');
 			//USAGE
 		   //get_post_meta(int $post_id, string $key(begins with underscore), boolean $single);
 	$value = get_post_meta($post->ID, '_contact_email_value_key', true);
 	echo '<label for="eda_contact_email_field" >User Email Address: </label>';
 	echo '<input type="email" id="eda_contact_email_field" name="eda_contact_email_field" value="'.esc_attr($value).'" size="25" />' ;
 }

 function eda_save_contact_email_data( $post_id ) {
 	if( ! isset( $_POST['eda_contact_email_meta_box_nonce'] ) ){
 		return;
 	}
 	     //USAGE
 	     //wp_verify_nonce(string $nonce, mixed $action);
 	if ( ! wp_verify_nonce( $_POST['eda_contact_email_meta_box_nonce'], 'eda_save_contact_email_data' ) ) {
 		return;
 	}

 	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
 		return;
 	}

 	if( ! current_user_can( 'edit_post', $post_id ) ){
 		return;
 	}

 	if( ! isset( $_POST['eda_contact_email_field'] ) ){
 		return;
 	}

 	$my_data = sanitize_text_field($_POST['eda_contact_email_field']);

 	//USAGE
  //update_post_meta(int $post_id, string $meta_key, mixed $meta_value, mixed $prev_value);
 	update_post_meta( $post_id, '_contact_email_value_key', $my_data);
 }