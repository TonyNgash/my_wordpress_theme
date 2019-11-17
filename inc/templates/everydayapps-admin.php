<h1>Ingrotel Sidebar Options</h1>

<?php settings_errors(); ?>

<?php

	$profile_pic = esc_attr( get_option('profile_pic'));
	$firstName = esc_attr( get_option('first_name'));
	$lastName = esc_attr( get_option('last_name'));
	$fullName = $firstName . " " . $lastName;

	$description = esc_attr( get_option('user_description'));
 ?>
<div class="eda-sidebar-preview">

	<div class="eda-sidebar">
		<div class="image_container">
			<div id="profile_picture_preview" class="profile_picture" style="background-image: url(<?php print $profile_pic; ?>);"></div>
		</div>
		<h1 class="eda-username"><?php print $fullName; ?></h1>
		<h2 class="eda-description"><?php print $description; ?></h2>
		<div class="eda-icons-wrapper">
			
		</div>
	</div>
	
</div>

<form method="post" action="options.php" class="eda-general-form">
	<?php settings_fields('eda-settings-group'); ?>
	<?php do_settings_sections('everydayapps_slug');  ?>
	<?php submit_button('Save Changes','primary','btnSubmit'); ?>
</form>