<?php 
	$bodyClasses = undercore_get_body_classes();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php wp_title( '&#124;', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

	<!-- Output the FavIcon is one has been defined -->
	<?php echo undercore_get_favicon(); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class( $bodyClasses ); ?>>
<header>
	<div class="top-bar">
		<?php echo get_option('undercore_header_extra'); ?>
		<?php if (get_option('undercore_header_social')) { ?>
			<div class="header_top_social">
				HEADER SOCIAL ICONS
			</div>
		<?php }; ?>
	</div>
	<img src="<?php echo undercore_get_site_logo(); ?>">
</header>