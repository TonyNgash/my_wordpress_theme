<h1>Everydayapps Theme Options</h1>

<?php settings_errors(); ?>

<?php

	// $profile_pic = esc_attr( get_option('profile_pic'));
	

	
 ?>

<form method="post" action="options.php" class="eda-general-form">
	<?php settings_fields('eda-theme-group'); ?>
	<?php do_settings_sections('everydayapps_theme_settings_page');  ?>
	<?php submit_button() ?>
</form>