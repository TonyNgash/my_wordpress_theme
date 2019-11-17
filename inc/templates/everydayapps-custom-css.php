<h1>Everydayapps Custom CSS</h1>
<?php settings_errors(); ?>

<form id="save-custom-css-form" method="post" action="options.php" class="eda-general-form">
	<?php settings_fields('eda-custom-css-options'); ?>
	<?php do_settings_sections('everydayapps_css_settings_page');  ?>
	<?php submit_button() ?>
</form>