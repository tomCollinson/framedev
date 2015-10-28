<?php
/*
	ADD PACKAGE DETAILS

	Theme Options Colors holds the output for the general styles options panel
*/
?>
<div class="undercore-options__panel undercore-options__styles" data-id="styles">
	<div class="undercore-tabs">
		<ul class="undercore-tabs__tabs">
		    <?php 

		    	global $undercore_config;
		    	$colorOptions = undercore_section_options('styles');
		    	$i = 0;
		    	$output = '';

		    	foreach($undercore_config['color_sets'] as $key => $val) {
		    		$i++;
		    		$output ='<li class="undercore-tabs__tab';

		    		if ($i === 1) {
		    			$output .= ' undercore-tabs__tab--active';
		    		}
		    		$output .= '" data-id="' . $i . '">' . $val . '</li>';

		    		echo $output;
		    	}
		    ?>
    	</ul>
    	<?php
    	$i = 0;

    		foreach($undercore_config['color_sets'] as $key => $val) {
    			$i++;
    			echo '<div class="undercore-tabs__content';
    			if ($i === 1) {
    				echo ' undercore-tabs__content--active';
    			}

    			echo '" data-tab="' . $i . '">';
		    	foreach($colorOptions as $option) {
		        	if ($option['group'] === $key) {
		        		echo undercore_html_helper_option($option["type"], $option);
		        	}
		        }
		       echo '</div>'; 

		    }
		    ?>


	</div><!-- End Tab Panels Wrap-->
</div> <!-- end options panel -->