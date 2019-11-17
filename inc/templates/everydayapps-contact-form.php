<h1>Everydayapps Contact Form</h1>
<?php settings_errors(); ?>

<form method="post" action="options.php" class="eda-general-form">
	<?php settings_fields('eda-contact-options'); ?>
	<?php do_settings_sections('everydayapps_contact_slug');  ?>
	<?php submit_button() ?>
</form>