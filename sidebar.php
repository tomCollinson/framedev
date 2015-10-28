<?php 
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/*
	ADD PACKAGE DETAILS
*/

?>

<div id="widgets">
	<?php if ( !dynamic_sidebar( 'main-sidebar' ) ) : ?>
		<div class="widget-wrapper">

			<div class="widget-title"><h3><?php _e( 'In Archive', 'undercore' ); ?></h3></div>
			<ul>
				<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
			</ul>

		</div><!-- end of .widget-wrapper -->
	<?php endif; //end of main-sidebar ?>
</div><!-- end of #widgets -->