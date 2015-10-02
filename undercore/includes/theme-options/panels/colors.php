<?php
/*
	ADD PACKAGE DETAILS

	Theme Options Colors holds the output for the general options panel
*/
?>
<div class="undercore-options__panel undercore-options__colors" data-id="colors">
    <table class="form-table">
		<tr>
			<td colspan="2">
				<h3>
					<?php _e('Theme Colours', 'undercore'); ?>
				</h3>
				<p>
					<?php _e('Pick from the preset theme colors below or control theme individually', 'undercore'); ?>
				</p>
			</td>
		</tr>
		
		<?php settings_fields( 'undercore-settings-general' ); ?>
		<?php do_settings_sections( 'undercore-settings-general' ); ?>
    </table>
</div> <!-- end options panel -->