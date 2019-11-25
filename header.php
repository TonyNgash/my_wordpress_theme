<?php 

	/*
		This is the header template

		@package tony_ngash_everydayapps
	*/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description');  ?>" >
	<meta charset="<?php bloginfo('charset'); ?>" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<?php 
	// if( is_home() ):
	// 	$someVarName = array('someClassName','someOtherClassName');
	// else:
	// 	$someVarName = array('notAclassname');
	// endif;
 ?>
<body <?php body_class(); ?> >
<div class="site-wide-wrapper">

<header class="top-menu-navigation-section">
	<nav class="ingrotel-nav">
		<div class="ingrotel-logo-box ingrotel-icon">
			<a href="#" class="d-none"><?php bloginfo('name'); ?>"></a>
			<a href="#" class="ingrotel-ingrotel_font_logo"></a>
		</div>
		<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container' => false,
				'menu_class' => 'ingrotel-nav-ul',
				'walker' => new Ingrotel_Walker_Nav_Primary()
			) );
		?>
		<div class="burger-container">
			<div class="burger">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>	
		</div>
		
	</nav>
</header>