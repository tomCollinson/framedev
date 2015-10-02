<?php
/*
	ADD PACKAGE DETAILS

	Theme Options General holds the output for the general options panel

    MOVE THE JS OUT OF THIS FILE!
*/ 
?>

<div class="undercore-options__panel undercore-options__footer" data-id="footer">

    <?php 

        global $undercore_options;

        $generalOptions = undercore_section_options('footer');

        foreach($generalOptions as $option) {

            echo undercore_html_helper_option($option["type"], $option);
        }
        ?>
    
 
</div> <!-- end options panel -->
