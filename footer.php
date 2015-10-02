<?php

	wp_reset_query();

?>
<footer class="footer">
	<div class="block-inner">
		<?php
		/*
			DEV COMMENT - REMOVE ME
			Allow users to control the content of the columns in the footer using widgets, by registering
			sidebars. These will be useable under Appearance > Widgets
			For this starter theme we'll allow for 4 columns.

			@todo - Add an else to display default / dummy widgets
			@todo - Add theme options to control:
			 - Show / Hide footer
			 - Output widgets only
			 - Output copyright / bottom bar only
			 - How many Columns to display. Change class to make sure X number fills the width
			*/
		$copyright = undercore_get_copyright_notice();
		$colCount = undercore_get_footer_col_count();
		$preserveWidths =  undercore_get_footer_widths_preserved();
		$colClass = "";
		// Set the class to use depending on a) the number of columns and b) whether they should preserve normal widths or stretch

		// Scenario 1 - do not limit widths, use a class that will stretch each to fill the space
		// @TODO - Change these classes to whatever framework we use 
		if ($preserveWidths !== 'true') {
			switch ($colCount) {
				case 1: 
					$colClass = ''; 
					break;
	        	case 2: 
	        		$colClass = 'one-half'; 
	        		break;
	        	case 3: 
	        		$colClass = 'one-third';
	        		break;
	        	case 4: 
	        		$colClass = 'one-fourth';
	        		break;
	        	case 5: 
	        		$colClass = 'one-fifth';
	        		break;
	        	case 6: 
	        		$colClass = 'one-sixth';
	        		break;
	        }

		} else {
			$colClass = 'one-sixth';
		}

		for ($i = 0; $i <= $colCount; $i++) { ?>
			<div class="ADD-PROPER-COL-CLASS <?php echo $colClass; ?>">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-col-'.$i) ) : else :  endif; ?>
			</div>
		<?php } ?>

		<div class="footer__copyright">
			<?php if ($copyright) {
				echo $copyright;
			} else { ?>
			<?php esc_attr_e( '&copy;'); ?> <?php echo date( 'Y' ); ?><a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<?php bloginfo( 'name' ); ?>
			</a>
			<?php } ?>
		</div>
		<div class="footer_bottom_bar">
			<?php if (get_option('undercore_footer_social')) { ?>
				<div class="footer_bottom_social">
					FOOTER SOCIAL ICONS
				</div>
			<?php }; ?>
		</div>
	</div>
</footer>


<?php

	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */


	wp_footer();


?>
</body>
</html>