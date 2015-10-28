<?php 

if (have_posts()) :

	while (have_posts()) : the_post();

		echo get_the_title();

		echo get_the_content();

	endwhile;
	endif;

?>