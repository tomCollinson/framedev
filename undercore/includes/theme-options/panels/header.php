<?php
/*
	ADD PACKAGE DETAILS

	Theme Options Header holds the output for the general options panel
*/
?>
<div class="undercore-options__panel undercore-options__header_settings" data-id="header">
        
     <?php 

        $generalOptions = undercore_section_options('header');

        foreach($generalOptions as $option) {

            echo undercore_html_helper_option($option["type"], $option);
        }
        ?>
 
</div> <!-- end options panel -->
